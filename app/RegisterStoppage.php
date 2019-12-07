<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterStoppage extends Model
{
    protected $fillable = [
    	'stoppage_id','bus_id',
    ];



    // relationbetweenSeatDtail
    function relationbetweenSeatDetail(){

    	return $this->hasOne('App\SeatDetail','id','bus_id');
    }


    //realationbetweenTerminal
    function relationbetweenTerminal(){
    	return $this->hasOne('App\Terminal','id','stoppage_id');
    }

}
