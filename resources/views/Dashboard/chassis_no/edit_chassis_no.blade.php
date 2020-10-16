@extends('Dashboard.app')
@section('title')
Chassis No Edit
@endsection

@section('content')

<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Chassis No Edit</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{route('chassis_no_update')}}">

						@csrf
					  <div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Chassis No</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="chassis_no" id="chassis_no" 
						value="{{ $single_chassis_no->chassis_no }}"   >
						<input type="hidden" class="form-control" name="id" id="chassis_no" 
						value="{{ $single_chassis_no->id }}"   >

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