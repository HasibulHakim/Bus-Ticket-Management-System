@extends('Dashboard.app')
@section('title')
Chassis No view
@endsection



@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Chassis No</th>
			      <th scope="col">Action</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($all_chassis_nos as $chassis_nos)
			    <tr>
			    	
			      <th scope="row">{{ $chassis_nos->id }}</th>
			      <td>{{ $chassis_nos->chassis_no }}</td>
			       <td>
			      	<a href="{{ url('/admin/chassis_no/edit') }}\{{ $chassis_nos->id }}" class="btn btn-primary">Edit</a>
			      	<a href="{{ url('/admin/chassis_no/delete') }}/{{ $chassis_nos->id }}" class="btn btn-danger">Delete</a>
			      </td>
			     
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection