@extends('Dashboard.app')
@section('title')
Terminal view
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
			      <th scope="col">Action</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($allterminals as $terminals)
			    <tr>
			    	
			      <th scope="row">{{ $terminals->id }}</th>
			      <td>{{ $terminals->stoppage }}</td>
			      <td>
			      	<a href="{{ url('/admin/terminal_info/edit') }}/{{ $terminals->id }}" class="btn btn-primary">Edit</a>
			      	<a href="{{ url('/admin/terminal_info/delete') }}\{{ $terminals->id }}" class="btn btn-danger">Delete</a>
			      </td>
			     
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection