<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
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
}
