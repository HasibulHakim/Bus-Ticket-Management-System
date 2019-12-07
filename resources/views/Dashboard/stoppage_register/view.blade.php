@extends('Dashboard.app')
@section('title')
Register Stoppage view
@endsection



@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Bus Name</th>
			      <th scope="col">Stoppage</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($all_register_bus as $register_bus)
			    <tr>
			    	
			      <th scope="row">{{ $register_bus->id }}</th>
			      <td>{{ App\Bus::findOrFail($register_bus->bus_id)->bus_name }}</td>
			      <td>{{ App\Terminal::findOrFail($register_bus->stoppage_id)->stoppage }}</td>
			      <td>
			      	<td>
			      		<a href="#" class="btn btn-primary">Edit</a>
			      		<a href="#" class="btn btn-danger">Delete</a>
			      	</td>
			      </td>
			     
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection