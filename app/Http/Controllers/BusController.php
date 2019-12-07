<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\Date;
use App\Time;
use App\Form;
use App\To;
use App\SeatDetail;
use App\BusType;
use App\Terminal;
use App\Price;
use App\RegisterStoppage;
use App\TotalSeat;
use Carbon\Carbon;

class BusController extends Controller
{
    function bus(){
    	return view('Dashboard.bus_name_info.bus_insert');
    }

    // insert bus
    function insert_bus(Request $request){
    	Bus::insert([
    		'bus_name' =>$request->bus_name,
    	]);
    	return back();

    }

    //insert bus view
    function bus_view(){
    	$allbuses=Bus::all();

    return view('Dashboard.bus_name_info.bus_view',compact('allbuses'));
    }





	function journey_date(){	

		
		return view('Dashboard.date_info.date_insert');
	}


	function insert_date(Request $request){
		Date::insert([
			'date'=>$request->date
		     ]);
		return back();
		
	}

	function date_view(){
		$alldates=Date::all();
	
		return view('Dashboard.date_info.date_view',compact('alldates'));
	
	}

 	function time(){
 		
 		return view('Dashboard.time_info.time_index');
 	}

 	function time_insert(Request $request){
 		
 		Time::insert([
 			'time'=>$request->time
 		]);
 		return back();
 		//return view('Dashboard.time_info.time_index');
 	}

 	function time_view(){
 		$alltimes=Time::all();
 		return view('Dashboard.time_info.time_view',compact('alltimes'));
 	}
 	function form(){
 		
 		return view('Dashboard.form_info.form_index');
 	}
	function form_insert(Request $request){
 		
 		Form::insert([
 			'terminal_name'=>$request->terminal_name,
 		]);
 		return back();
 		
 	}
 	function form_view(){
 		$allforms=Form::all();
 		return view('Dashboard.form_info.form_view',compact('allforms'));
 	}
	function to(){
 		
 		return view('Dashboard.to_info.to_index');
 	}
	function to_insert(Request $request){
 		
 		To::insert([
 			'district_name'=>$request->district_name,
 		]);
 		return back();
 		
 	}
 	function to_view(){
 		$alltos=To::all();
 		return view('Dashboard.to_info.to_view',compact('alltos'));
 	}


 	function bus_type(){
 		return view('Dashboard.bus_type.bus_type_index');
 	}

 	function bus_type_insert(Request $request){

 		BusType::insert([
 			'bus_type'=>$request->bus_type,
 		]);
 		return back();
 	}

function bus_type_view(){
 		$all_bus_types=BusType::all();
 		return view('Dashboard.bus_type.bus_type_view',compact('all_bus_types'));
 	}
 	//terminal index
 	function terminal(){
 		
 		return view('Dashboard.terminal_info.terminal_info_index');
 	}
 	//terminal insert
 	function terminal_insert(Request $request){
 		
 		Terminal::insert([
 			'stoppage'=>$request->stoppage,
 		]);
 		return back();
 		
 	}
 	//terminal view
 	function terminal_view(){
 		$allterminals=Terminal::all();
 		return view('Dashboard.terminal_info.terminal_info_view',compact('allterminals'));
 	}
 	//Price
 	function price(){
 		
 		return view('Dashboard.price_info.price_info_index');
 	}
 	//Price Insert
 	function price_insert(Request $request){
 		
 		Price::insert([
 			'price'=>$request->price,
 		]);
 		return back();
 		
 	}
 	//Price View
 	function price_view(){
 		$allprices=Price::all();
 		return view('Dashboard.price_info.price_info_view',compact('allprices'));
 	}


 	function bus_info(){
 		$all_forms = Form::all();
		$all_tos   = To::all();
 		$all_dates = Date::all();
		$all_times = Time::all();
		$all_buses = Bus::all();
		$all_bus_types = BusType::all();
		$all_prices=Price::all();
		$all_total_seats=TotalSeat::all();
		

 		
 		return view('Dashboard.bus_info_detail.bus_info',compact('all_forms','all_tos','all_dates','all_times','all_buses','all_bus_types','all_prices','all_total_seats'));
	}
	function bus_info_insert(Request $request){
		// $request->validate([
		// 	'terminal_name_id'=>'required',
		// 	'district_name_id'=>'required',
		// 	'date_id'=>'required',
		// 	'time_id'=>'required',
		// 	'bus_name_id'=>'required',
		// 	'bus_type_id'=>'required',
		// 	'price_id'=>'required',
		//  'total_seat_id'=>'required',
		// ]);
		 		
 		SeatDetail::insert([
 			'bus_name_id'=>$request->bus_name_id,
 			'terminal_name_id'=>$request->form_id,
			'district_name_id'=>$request->to_id,
 			'date_id'=>$request->date_id,
			'time_id'=>$request->time_id,
			'bus_type_id'=>$request->bus_type_id,
			'price_id'=>$request->price_id,
			'total_seat_id'=>$request->total_seat_id,
			'created_at' => Carbon::now(),

 		]);
 		return back();
 		// print_r($request->all());
 		
 	}

 	// edit bus info
 	function edit_businfo($id){
 		$all_forms = Form::all();
		$all_tos   = To::all();
 		$all_dates = Date::all();
		$all_times = Time::all();
		$all_buses = Bus::all();
		$all_bus_types = BusType::all();
		$all_prices = Price::all();
		$all_total_seats = TotalSeat::all();
 		$single_businfo = SeatDetail::find($id);
 		return view('Dashboard.bus_info_detail.bus_info_detail_edit',compact('single_businfo','all_forms','all_tos','all_dates','all_times','all_buses','all_bus_types','all_prices','all_total_seats'));
 	}

 	// Update Bus info
 	function update_businfo(Request $request){
 		SeatDetail::findOrFail($request->id)->update([
 			'bus_name_id'=>$request->bus_name_id,
 			'terminal_name_id'=>$request->form_id,
			'district_name_id'=>$request->to_id,
 			'date_id'=>$request->date_id,
			'time_id'=>$request->time_id,
			'bus_type_id'=>$request->bus_type_id,	
			'price_id'=>$request->price_id,
			'total_seat_id'=>$request->total_seat_id,
 		]);
 		return back();
 		// return redirect(url('/admin/businfo/view'));
 	}
 	//Delete Bus Info
 	function delete_businfo($id){
 		SeatDetail::find($id)->delete();
 		return back();
 	}





	function bus_info_view(){
 		$all_bus_info=SeatDetail::all();
 		return view('Dashboard.bus_info_detail.bus_info_view',compact('all_bus_info'));
 	}


 	//Bus Info Index
 	function bus_info_index(){
 		return view('Dashboard.bus_name_info.bus_info_edit');
 	}

 	// Edit Bus Info
 	function edit_bus_name_info($id){
 		$single_bus_name_info = Bus::find($id);
 		return view('Dashboard.bus_name_info.bus_info_edit',compact('single_bus_info'));
 	}

 	// Bus info Update
 	function update_bus_name_info(Request $request){
 		Bus::find($request->id)->update([
 			'bus_name' =>$request->bus_name,
 		]);
 		return redirect(route('view_bus'));
 	}
 	//Date Index
 	function date_info_index(){
 		return view('Dashboard.date_info.date_edit');
 	}
 	//Edit Date
 	function edit_date_info($id){

 		$single_date_info = Date::find($id);
 		return view('Dashboard.date_info.date_edit',compact('single_date_info'));
 	}
 	//Update Date
 	function update_date_info(Request $request){
 		Date::find($request->id)->update([
 			'date' =>$request->date,
 		]);
 		return redirect(route('date_view'));
 	}
//Form Edit
 	function edit_form_info($id){
 		$single_form = Form::find($id);
 		return view('Dashboard.form_info.form_edit',compact('single_form'));
 	}


 	//Form Update
 	function update_form_info(Request $request){
 		Form::find($request->id)->update([
 			'terminal_name' =>$request->terminal_name,
 		]);
 		return redirect(route('form_view'));
 	}
 	//Time Edit
 	function edit_time_info($id){
 		$single_time = Time::find($id);
 		return view('Dashboard.time_info.time_edit',compact('single_time'));
 	}
 	//Time Update
 	function update_time_info(Request $request){
 		Time::find($request->id)->update([
 			'time' =>$request->time,
 		]);
 		return redirect(route('time_view'));
 	}
 	//To Edit
 	function edit_to_info($id){
 		$single_to = To::find($id);
 		return view('Dashboard.to_info.to_edit',compact('single_to'));
 	}
 	//To update
 	function update_to_info(Request $request){
 		To::find($request->id)->update([
 			'district_name' =>$request->district_name,
 		]);
 		return redirect(route('to_view'));
 	}
 	//Bus Type Edit
 	function edit_bus_type($id){
 		$single_bus_type = BusType::find($id);
 		return view('Dashboard.bus_type.bus_type_edit',compact('single_bus_type'));
 	}
 	//Bus Type Update
 	function update_bus_type(Request $request){
 		BusType::find($request->id)->update([
 			'bus_type' =>$request->bus_type,
 		]);
 		return redirect(route('bus_type_view'));
 	}
 	//Terminal Edit
 	function edit_terminal_info($id){
 		$single_terminal = Terminal::find($id);
 		return view('Dashboard.terminal_info.terminal_info_edit',compact('single_terminal'));
 	}
 	//Terminal Update
 	function update_terminal_info(Request $request){
 		Terminal::find($request->id)->update([
 			'stoppage' =>$request->stoppage,
 		]);
 		return redirect(route('terminal_view'));
 	}
 	//Price Edit
 	function edit_price_info($id){
 		$single_price = Price::find($id);
 		return view('Dashboard.price_info.price_info_edit',compact('single_price'));
 	}
 	//Price Update
 	function update_price_info(Request $request){
 		Price::find($request->id)->update([
 			'price' =>$request->price,
 		]);
 		return redirect(route('price_view'));
 	}


 	//Price Delete
 	function delete_price_info($id){
 		Price::find($id)->delete();
 		return back();
 	}

 	//Terminal delete
 	function delete_terminal_info($id){
 		Terminal::find($id)->delete();
 		return back();
 	}

 	//Bus type delete
 	function delete_bus_type($id){
 		BusType::find($id)->delete();
 		return back();
 	}
 	//bus delete
 	function delete_bus($id){
 		Bus::find($id)->delete();
 		return back();
 	}
 	//date delete
 	function delete_date_info($id){
 		Date::find($id)->delete();
 		return back();
 	}
 	//form delete
 	function delete_form_info($id){
 		Form::find($id)->delete();
 		return back();
 	}
 	//time delete
 	function delete_time_info($id){
 		Time::find($id)->delete();
 		return back();
 	}
 	//To delete
 	function delete_to_info($id){
 		To::find($id)->delete();
 		return back();
 	}
 	
//bus list customer
 	function bus_list_view(){
 		$all_bus_info = SeatDetail::all();
 		$all_dates = Date::all();
		$all_forms = Form::all();
		$all_tos = To::all();

 		return view('Dashboard.seat_info.bus_list',compact('all_bus_info','all_dates','all_forms','all_tos'));
 	}

// end


 	//Bus List search
 	function bus_search(Request $request)
 	{
 		// return view('Dashboard.seat_info.bus_list_search');
 		$f = $request->from;
 		$t = $request->to;
 		$d = $request->date;
 		$search = SeatDetail::where('terminal_name_id','LIKE','%'.$f.'%')
 		->where('district_name_id','LIKE','%'.$t.'%')
 		->where('date_id','LIKE','%'.$d.'%')
 		->get();

 		if(count($search)>0)
 		{
 			return view('Dashboard.seat_info.bus_list_search')->withDetails($search)->withQuery($f,$t,$d);
 		}
 	}


		//Register Stoppage
		function register_stoppage_index(){
			$all_stoppage = Terminal::all();
			$all_bus = SeatDetail::all();
			return view('Dashboard.stoppage_register.index',compact('all_bus','all_stoppage'));
		}

		//Register Stoppage
		function register_stoppage_insert(Request $request){
			RegisterStoppage::insert([
				'stoppage_id' => $request->stoppage_id,
				'bus_id' => $request->bus_id,
			]);
			return back();
		}
		//Register Stoppage View
		function register_stoppage_view(){
			$all_register_bus=RegisterStoppage::all();
			return view('Dashboard.stoppage_register.view',compact('all_register_bus'));
		}
		//TotalSeat index
		function total_seat(){
 		
 		return view('Dashboard.total_seat.total_seat_index');
 	}
 	//TotalSeat Insert
 	function total_seat_insert(Request $request){
 		
 		TotalSeat::insert([
 			'total_seat'=>$request->total_seat,
 		]);
 		return back();
 		
 	}
 	//TotalSeat view
 	function total_seat_view(){
 		$alltotal_seats=TotalSeat::all();
 		return view('Dashboard.total_seat.total_seat_view',compact('alltotal_seats'));
 	}

 	//TotalSeat edit
 	function edit_total_seat($id){
 		$single_total_seat = TotalSeat::find($id);
 		return view('Dashboard.total_seat.total_seat_edit',compact('single_total_seat'));
 	}
 	//totalSeat update
 	function update_total_seat(Request $request){
 		TotalSeat::find($request->id)->update([
 			'total_seat' =>$request->total_seat,
 		]);
 		return redirect(route('total_seat_view'));
 	}
 	//Total Seat Delete
 	function delete_total_seat($id){
 		TotalSeat::find($id)->delete();
 		return back();
 	}
}