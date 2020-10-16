<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function about()
    {
    	return view('home.about');
    }
    function contact()
    {
    	return view('home.contact');
    }
}
