@extends('Dashboard.app')
@section('title')
To view
@endsection



@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark" style="margin-top: 50px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">To</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($alltos as $tos)
			    <tr>
			    	
			      <th scope="row">{{ $tos->id }}</th>
			      <td>{{ $tos->district_name }}</td>
			     <td><a href="{{ url('/admin/to_info/edit') }}/{{ $tos->id }}" class="btn btn-primary">Edit</a></td>
			     <td><a href="{{ url('/admin/to_info/delete') }}\{{ $tos->id }}" class="btn btn-primary">Delete</a></td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection