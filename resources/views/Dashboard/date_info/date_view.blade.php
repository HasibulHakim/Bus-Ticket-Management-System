@extends('Dashboard.app')
@section('title')
Date view
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Date</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($alldates as $dates)
			    <tr>
			    	
			      <th scope="row">{{ $dates->id }}</th>
			      <td>{{ $dates->date }}</td>
			      <td>
			      	<a href="{{ url('/admin/date_info/edit') }}/{{ $dates->id }}" class="btn btn-primary">Edit</a>
			      	<a href="{{ url('/admin/date_info/delete') }}\{{ $dates->id }}" class="btn btn-danger">Delete</a>
			      </td>
			     
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection