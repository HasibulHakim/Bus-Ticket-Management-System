@extends('Dashboard.app')
@section('title')
Total Seat view
@endsection



@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Total Seat</th>
			      <th scope="col">Action</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($alltotal_seats as $total_seats)
			    <tr>
			    	
			      <th scope="row">{{ $total_seats->id }}</th>
			      <td>{{ $total_seats->total_seat }}</td>
			       <td>
			      	<a href="{{ url('/admin/total_seat/edit') }}\{{ $total_seats->id }}" class="btn btn-primary">Edit</a>
			      	<a href="{{ url('/admin/total_seat/delete') }}\{{ $total_seats->id }}" class="btn btn-danger">Delete</a>
			      </td>
			     
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection