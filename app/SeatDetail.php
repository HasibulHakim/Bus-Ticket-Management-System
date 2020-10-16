<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class SeatDetail extends Model
{
    protected $fillable = [
    	'bus_name_id','date_id','time_id','terminal_name_id','district_name_id','bus_type_id','price_id','total_seat_id','chassis_no_id',
    ];

    // Relation between SeatDetail and Bus

    function relationbetweenBus(){
    	return $this->hasOne('App\Bus','id','bus_name_id');
    }

    // Relation between SeatDetail and Date
    function relationbetweenDate(){
    	return $this->hasOne('App\Date','id','date_id');
    }
    //Relation between SeatDetail and Time
    function relationbetweenTime(){
    	return $this->hasOne('App\Time','id','time_id');
    }
    //Relation between SeatDetail and Form
    function relationbetweenForm(){
    	return $this->hasOne('App\Form','id','terminal_name_id');
    }
    //Relation between SeatDetail and To
    function relationbetweenTo(){
    	return $this->hasOne('App\To','id','district_name_id');
    }
    //Relation between SeatDetail and Bus Type
    function relationbetweenBusType(){
        return $this->hasOne('App\BusType','id','bus_type_id');
    }
    //Relation between SeatDetail and Price
    function relationbetweenPrice(){
        return $this->hasOne('App\Price','id','price_id');
    }
    //Relation between Seatdetail and TotalSeat
    function relationbetweenTotalSeat(){
        return $this->hasOne('App\TotalSeat','id','total_seat_id');
    }
    //Relation Between SeatDetail and ChassisNo
    function relationbetweenChassisNo(){
        return $this->hasOne('App\ChassisNo','id','chassis_no_id');
    }
}
