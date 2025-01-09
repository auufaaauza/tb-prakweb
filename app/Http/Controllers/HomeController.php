<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Event;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $event = Event::all();
        $city  = City::all();
        return view('index', [
            'event' => $event,
            'city' => $city
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function event(Request $request)
    {
        $event = Event::query()
            ->when($request->name, function ($query) use ($request) {
                $query->where('name', 'like', "%$request->name%");
            })
            ->when($request->city, function ($query) use ($request) {
                $city = City::where('slug', $request->city)->first();
                $query->where('city_id', $city->id);
            })
            ->when($request->available, function ($query) use ($request) {
                if ($request->available == 'tersedia') {
                    $query->where('quota', '>', 0);
                } else {
                    $query->where('quota', '<=', 0);
                }
            })
            ->when($request->rangePrice, function ($query) use ($request) {
                // Meng-decode rangePrice menjadi array
                $json = json_decode($request->rangePrice, true);

                // Memastikan bahwa $json adalah array dengan dua elemen
                if (is_array($json) && count($json) == 2) {
                    $query->whereBetween('price', [$json[0], $json[1]]);
                }
            });

        // Mendapatkan semua kota untuk filter
        $city = City::all();

        // Mengembalikan data ke view
        return view('event', [
            'event' => $event->get(), // pastikan untuk mengambil data dari query
            'city' => $city
        ]);
    }


    public function detail($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $user = User::find(1);
        return view('detail', [
            'event' => $event,
            'user' => $user
        ]);
    }

    public function createOrder(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required',
            'total' => 'required',
            'quantity' => 'required',
            'payment_method' => 'required',
        ]);
        $event = Event::where('slug', $slug)->first();
        if ($event->quota >= $request->quantity) {
            $order = Order::create([
                'event_id' => $event->id,
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'quantity' => $request->quantity,
                'total' => $request->total,
                'payment_method' => $request->payment_method
            ]);
            if ($order) {
                $event->update([
                    'quota' => $event->quota - $request->quantity
                ]);
            }
            return view('thankyou', compact('order'));
        } else {
            return redirect()->route('event.detail', $event->slug)->with('error','Tiket sudah habis!');
        }
    }
}
