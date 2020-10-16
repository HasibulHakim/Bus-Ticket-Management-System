@extends('Dashboard.app')
@section('title')
Chassis No Insert
@endsection

@section('content')
<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Chassis No Insert</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{route('chassis_no_insert')}}">

						@csrf
					  <div class="form-group row">
					    <label for="chassis_no" class="col-sm-2 col-form-label">Chassis No</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="chassis_no" id="chassis_no">
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