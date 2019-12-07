@extends('Dashboard.app')
@section('title')
Register Stoppage
@endsection

@section('content')

<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Stoppage Resiter</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{ route('register_stoppage_insert') }}">

						@csrf
					<div class="form-group row">
					    <label for="bus_name" class="col-sm-2 col-form-label">Bus Name</label>
					    <div class="col-sm-10">
					      <select name="bus_id" id="" class="form-control">
					      	@foreach($all_bus as $buses)
					      	<option value="{{ $buses->id }}">{{ $buses->relationbetweenBus->bus_name }}</option>
					      	@endforeach
					      </select>
					    </div>
					</div>
					<div class="form-group row">
					    <label for="bus_name" class="col-sm-2 col-form-label">Stoppage</label>
					    <div class="col-sm-10">
					      <select name="stoppage_id" id="" class="form-control">
					      	@foreach($all_stoppage as $stoppages)
					      	<option value="{{ $stoppages->id }}">{{ $stoppages->stoppage }}</option>
							@endforeach
					      </select>
					    </div>
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