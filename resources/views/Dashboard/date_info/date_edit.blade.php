@extends('Dashboard.app')
@section('title')
Date Edit
@endsection

@section('content')

<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Edit Date</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{route('date_info_update')}}">

						@csrf
					  <div class="form-group row">
					    <label for="date" class="col-sm-2 col-form-label">Date</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" name="date" id="date" value="{{ $single_date_info->date }}" >
					      <input type="hidden" class="form-control" name="id" id="id" value="{{ $single_date_info->id }}">
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