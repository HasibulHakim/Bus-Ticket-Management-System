<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketBooking extends Model
{
    protected $fillable = [
    	'name','phone','bus_name','date','time','from','to','bus_type','total_price','seat_no','stoppage','total_seat','payment_status',
    ];
}
