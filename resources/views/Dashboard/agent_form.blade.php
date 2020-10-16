@extends('Dashboard.app')
@section('title')
Add Agent
@endsection

@section('content')
<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>BASIC VALIDATION</h6>
                </div>
                <div class="card-body">
                	
                	@if($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				            <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div><br />
				    @endif

					<form method="post" action="{{ route('agent_create') }}">

						@csrf
					  <div class="form-group row">
					    <label for="" class="col-sm-2 col-form-label">Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="name" id="">
					    </div>

					  <label for="" class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" name="email" id="">
					    </div>

					   <label for="" class="col-sm-2 col-form-label">Phone</label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control" name="phone" id="">
					    </div>
					   <label for="" class="col-sm-2 col-form-label">User Type</label>
					    <div class="col-sm-10">
					      <select name="user_type" id="" class="form-control">
					      	<option value="3">Agent</option>
					      	<option value="2">Customer</option>
					      </select>
					    </div>

					    <label for="" class="col-sm-2 col-form-label">Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" name="password" id="">
					    </div>
					  <div class="form-group row">
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary">Submit</button>
					    </div>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>			



@endsection