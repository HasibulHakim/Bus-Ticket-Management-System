<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeatDetail extends Model
{
    protected $fillable = [
    	'bus_name_id','date_id','time_id','terminal_name_id','district_name_id','bus_type_id',
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



}
