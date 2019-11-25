@extends('Dashboard.app')
@section('title')
Bus Type view
@endsection



@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Bus Type</th>
			      <th scope="col">Action</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($all_bus_types as $bus_types)
			    <tr>
			    	
			      <th scope="row">{{ $bus_types->id }}</th>
			      <td>{{ $bus_types->bus_type }}</td>
			     <td>
			      	<a href="{{ url('/admin/bus_type/edit') }}/{{ $bus_types->id }}" class="btn btn-primary">Edit</a>
			      	<a href="{{ url('/admin/bus_type/delete') }}\{{ $bus_types->id }}" class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection