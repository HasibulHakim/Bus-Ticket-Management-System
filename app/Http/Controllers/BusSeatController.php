<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterStoppage;
use App\Terminal;
use App\User;
use Auth;
use App\SeatDetail;
use App\Bus;
use App\BusType;
use App\Date;
use App\Time;
use App\Form;
use App\To;
use App\Price;
use App\TotalSeat;

class BusSeatController extends Controller
{
    function bus_seat_view($id){
    	$stoppage = RegisterStoppage::where('bus_id',$id)->get();

    	$name = User::findOrFail(Auth::id())->name;
    	$phone = User::findOrFail(Auth::id())->phone;

    	$bus_name_id = SeatDetail::findOrFail($id)->bus_name_id;
    	$bus_name = Bus::findOrFail($bus_name_id)->bus_name;

    	$bus_type_id = SeatDetail::findOrFail($id)->bus_type_id;
    	$bus_type = BusType::findOrFail($bus_type_id)->bus_type;

    	$date_id = SeatDetail::findOrFail($id)->date_id;
    	$date = Date::findOrFail($date_id)->date;

    	$time_id = SeatDetail::findOrFail($id)->time_id;
    	$time = Time::findOrFail($time_id)->time;

    	$terminal_name_id = SeatDetail::findOrFail($id)->terminal_name_id;
    	$terminal_name = Form::findOrFail($terminal_name_id)->terminal_name;

    	$district_name_id = SeatDetail::findOrFail($id)->district_name_id;
    	$district_name = To::findOrFail($district_name_id)->district_name;

    	$price_id = SeatDetail::findOrFail($id)->price_id;
    	$price = Price::findOrFail($price_id)->price;

    	$total_seat_id = SeatDetail::findOrFail($id)->total_seat_id;
    	$total_seat = TotalSeat::findOrFail($total_seat_id)->total_seat;

    	return view('Dashboard.bus_seat.seat',compact('stoppage','name','phone','bus_name','bus_type','date','time','terminal_name','district_name','price','total_seat'));
    }
}
