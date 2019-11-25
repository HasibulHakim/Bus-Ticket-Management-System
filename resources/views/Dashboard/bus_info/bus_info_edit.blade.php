@extends('Dashboard.app')
@section('title')
Bus Info Edit
@endsection

@section('content')
<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Edit Bus Info</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{ route('bus_info_update') }}">

						@csrf
					  <div class="form-group row">
					    <label for="bus_name" class="col-sm-2 col-form-label">Bus Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="bus_name" id="bus_name" value="{{ $single_bus_info->bus_name }}">
					      <input type="hidden" class="form-control" name="id" id="id" value="{{ $single_bus_info->id }}">
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