@extends('Dashboard.app')
@section('title')
Bus Type Edit
@endsection

@section('content')

<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Bus Type edit</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{route('update_bus_type')}}">

						@csrf
					  <div class="form-group row">
					    <label for="bus_type" class="col-sm-2 col-form-label">Bus Type</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="bus_type" id="bus_type" value="{{ $single_bus_type->bus_type }}"   >
					      <input type="hidden" class="form-control" name="id" id="bus_type" value="{{ $single_bus_type->id }}"   >
					    
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