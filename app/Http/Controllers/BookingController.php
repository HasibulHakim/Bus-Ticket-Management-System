<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\TicketBooking;

class BookingController extends Controller
{
    function ticket_booking(Request $request){

    	$all_ticket_booking = $request;
    	return view('Dashboard.bus_seat.seat_view',compact('all_ticket_booking'));
    }

    function ticket_book(Request $request){
    	$check = TicketBooking::insertGetId([
    		'name' =>$request->name,
			'phone' =>$request->phone,
			'bus_name' =>$request->bus_name,
			'date' =>$request->date,
			'time' =>$request->time,
			'from' =>$request->from,
			'to' =>$request->to,
			'bus_type' =>$request->bus_type,
			'total_price' =>$request->total_price,
			'seat_no' =>$request->seat_no,
			'stoppage' =>$request->stoppage,
			'total_seat' =>$request->total_seat,
			'payment_status' =>0,
    	]);
    	if($check){
    		$total_price =$request->total_price;
    		return view('stripe',compact('check','total_price'));
    	}
    	else{
    		echo "Fail";
    	}
    }

    
}
