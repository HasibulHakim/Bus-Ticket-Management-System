<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\TicketBooking;

class AdminController extends Controller
{
    function __construct(){
        $this->middleware('auth');
        $this->middleware('restrict_user');

    }
    function index(){
    	return view('dashboard.index');
    }

    // View User
    function users(){
    	$users = User::all();
    	return view('dashboard.users', compact('users'));
    }

    // Edit Users
    function edit($id){
    	$single_user = User::find($id);
    	return view('dashboard.user_edit', compact('single_user'));
    }

// update user
    function update(Request $request){
    	User::find($request->id)->update([
    		'name' => $request->name,
    		'email' => $request->email,
    		'phone' => $request->phone,
    	]);
    	return redirect('/admin/users');
    }

    // delete user
    function delete($id){
    	User::findOrFail($id)->delete();
    	return back();
    }



    // Report Generate
    function report_form(){
        $all_booking = TicketBooking::all();
        return view('Dashboard.report_form',compact('all_booking'));
    }

    // Report View
    function report_view(Request $request){
        $bus_name='';
        $bus_type='';
        $chassis_no='';
        $stoppage='';
        $date='';
        $total_seat=0;
        $total_price=0;

        $detail = TicketBooking::where('chassis_no',$request->chassis_no)->get();

        foreach ($detail as $key => $value) {
            $bus_name=$value->bus_name;
            $bus_type=$value->bus_type;
            $chassis_no=$value->chassis_no;
            $stoppage=$value->stoppage;
            $date=$value->date;
            $total_seat+=$value->total_seat;
            $total_price+=$value->total_price;
        }

        return view('Dashboard.view_report',compact(
            'bus_name',
            'bus_type',
            'chassis_no',
            'stoppage',
            'date',
            'total_seat',
            'total_price'
        ));
    }


    //agent
    function agent_form(){
        
        return view('Dashboard.agent_form');
    }
    function agent_create(Request $request){
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|unique:users',
            'phone'=>'required|unique:users'
        ]);
        User::insert([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'user_id' =>$request->user_type,
            'password' =>Hash::make($request->password),
        ]);
        return back();
    }

}
