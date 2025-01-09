<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
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
}
