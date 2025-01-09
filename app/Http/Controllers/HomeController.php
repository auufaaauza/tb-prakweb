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

   

    
}
