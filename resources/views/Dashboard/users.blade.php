@extends('dashboard.app')
@section('title')
Users Information
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table" style="color: #000; width: 600px; margin-top: 20px; font-size: 14px;">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Phone</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($users as $user)
			    <tr>
			      <th scope="row">{{ $user->id }}</th>
			      <td>{{ $user->name }}</td>
			      <td>{{ $user->email }}</td>
			      <td>{{ $user->phone }}</td>
			      <td>
			      	<a href="{{ url('/admin/users/edit') }}\{{ $user->id }}" class="btn btn-primary">Edit</a>
		      		<a href="{{ url('/admin/users/delete') }}\{{ $user->id }}" class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
		</div>
	</div>
</div>

</table>
@endsection