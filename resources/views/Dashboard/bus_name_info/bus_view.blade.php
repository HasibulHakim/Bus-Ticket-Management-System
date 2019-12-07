@extends('Dashboard.app')
@section('title')
Bus View
@endsecction



@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Bus Name</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($allbuses as $buses)
			    <tr>
			    	
			      <th scope="row">{{ $buses->id }}</th>
			      <td>{{ $buses->bus_name }}</td>
			      <td>
			      	<a href="{{ url('/admin/bus_name_info/edit') }}/{{ $buses->id }}" class="btn btn-primary">Edit</a>
			      	<a href="{{ url('/admin/bus_name_info/delete') }}\{{ $buses->id }}" class="btn btn-danger">Delete</a>
			      </td>
			     
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>


@endsection
