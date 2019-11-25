@extends('Dashboard.app')
@section('title')
Time view
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Time</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($alltimes as $times)
			    <tr>
			    	
			      <th scope="row">{{ $times->id }}</th>
			      <td>{{ $times->time }}</td>
			      <td><a href="{{ url('/admin/time_info/edit') }}/{{ $times->id }}" class="btn btn-primary">Edit</a></td>
			      <td><a href="{{ url('/admin/time_info/delete') }}\{{ $times->id }}" class="btn btn-danger">Delete</a></td>
			     
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection