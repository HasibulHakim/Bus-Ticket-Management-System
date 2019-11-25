@extends('Dashboard.app')
@section('title')
Bus Info Detail View
@endsection



@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Form</th>
			      <th scope="col">To</th>
			      <th scope="col">Date</th>
			      <th scope="col">Time</th>
			      <th scope="col">Bus Name</th>
			      <th scope="col">Bus Type</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			 
			  <tbody>
			  	@foreach($all_bus_info as $buses)
			    <tr>
			    	
			      <th scope="row">{{ $buses->id }}</th>
			      <th scope="row">{{ $buses->relationbetweenForm->terminal_name }}</th>
			      <th scope="row">{{ $buses->relationbetweenTo->district_name }}</th>
			      <th scope="row">{{ $buses->relationbetweenDate->date }}</th>
			      <th scope="row">{{ $buses->relationbetweenTime->time }}</th>
			      <th scope="row">{{ $buses->relationbetweenBus->bus_name }}</th>
			      <th scope="row">{{ $buses->relationbetweenBusType->bus_type }}</th>
			     
			      <th>
			    	<a href="{{ url('/admin/businfo/view/edit') }}\{{ $buses->id }}" class="btn btn-primary">Edit</a>
			    	<a href="{{ url('/admin/businfo/view/delete') }}\{{ $buses->id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
			      </th>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection