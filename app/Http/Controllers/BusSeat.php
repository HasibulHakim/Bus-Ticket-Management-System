<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusSeat extends Controller
{
    function bus_seat_view(){
    	return view('Dashboard.bus_seat.seat');
    }
}
