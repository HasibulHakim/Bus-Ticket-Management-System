@extends('Dashboard.seat_info.app')
@section('title')
Booked Information
@endsection

@section('content')
	<table class="table table-dark">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Name</th>
	      <th scope="col">Phone</th>
	      <th scope="col">Bus Name</th>
	      <th scope="col">Date</th>
	      <th scope="col">Time</th>
	      <th scope="col">Seat No.</th>
	      <th scope="col">Bus Type</th>
	      <th scope="col">Total Price</th>
	      <th scope="col">Cancel Ticket</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($booked_info as $info)
	  	@if(Auth::user()->phone==$info->phone)
	    <tr>
	    	
	      <th scope="row">{{ $info->id }}</th>
	      <td>{{ $info->name}}</td>
	      <td>{{ $info->phone}}</td>
	      <td>{{ $info->bus_name }}</td>
	      <td>{{ $info->date }}</td>
	      <td>{{ $info->time }}</td>
	      <td>{{ $info->seat_no }}</td>
	      <td>{{ $info->bus_type }}</td>
	      <td>{{ $info->total_price }}</td>
	      <td>
	      	<a href="{{url('/user/booked_info/delete')}}/{{$info->id}}" class="btn btn-danger">Cancel</a>
	      </td>
	    </tr>
	    @endif
	    @endforeach
	  </tbody>
	</table>

@endsection