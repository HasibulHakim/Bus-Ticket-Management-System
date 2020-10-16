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
            'chassis_no' =>$request->chassis_no,
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
            $name = $request->name;
            $phone = $request->phone;
            $bus_name = $request->bus_name;
            $from = $request->from;
            $to = $request->to;
            $terminal = $request->stoppage;
            $date = $request->date;
            $time = $request->time;
            $seat_no = $request->seat_no;
    		return view('stripe',compact('check','total_price','name','phone','bus_name','from','to','terminal','date','time','seat_no'));
    	}
    	else{
    		echo "Fail";
    	}
    }

    
}
