<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
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
