@extends('Dashboard.app')
@section('title')
Form view
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
			  	@foreach($allforms as $forms)
			    <tr>
			    	
			      <th scope="row">{{ $forms->id }}</th>
			      <td>{{ $forms->terminal_name }}</td>
			      <td>
			      	<a href="{{ url('/admin/form_info/edit') }}/{{ $forms->id }}" class="btn btn-primary">Edit</a>
			      	<a href="{{ url('/admin/form_info/delete') }}\{{ $forms->id }}" class="btn btn-danger">Delete</a>
			      </td>
			     
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>




@endsection