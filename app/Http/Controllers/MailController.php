<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmailTest;
use Mail;

class MailController extends Controller
{
    public function index(){
    	if (session('check')) {
    		session('check');
    	}
    	echo "No Data";
    }
}
