@extends('Dashboard.app')
@section('title')
Price view
@endsection



@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Price</th>
			      <th scope="col">Action</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($allprices as $prices)
			    <tr>
			    	
			      <th scope="row">{{ $prices->id }}</th>
			      <td>{{ $prices->price }}</td>
			       <td>
			      	<a href="{{ url('/admin/price_info/edit') }}/{{ $prices->id }}" class="btn btn-primary">Edit</a>
			      	<a href="{{ url('/admin/price_info/delete') }}\{{ $prices->id }}" class="btn btn-danger">Delete</a>
			      </td>
			     
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection