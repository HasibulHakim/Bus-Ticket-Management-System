@extends('dashboard.app')
@section('title')
Edit User Information
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form method="post" action="{{ route('update_user') }}">
				@csrf

			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" name="name" class="form-control" id="name" value="{{ $single_user->name }}"></small>
			    <input type="hidden" name = "id"class="form-control" id="name" value="{{ $single_user->id }}"></small>
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" name="email" class="form-control" id="email" value="{{ $single_user->email }}">
			  </div>
			  <div class="form-group">
			    <label for="phone">Phone</label>
			    <input type="number" name="phone" class="form-control" id="phone" value="{{ $single_user->phone }}">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>


@endsection