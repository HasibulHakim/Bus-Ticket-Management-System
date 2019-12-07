@extends('Dashboard.app')
@section('title')
Total Seat Edit
@endsection

@section('content')

<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Total Seat Edit</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{route('total_seat_update')}}">

						@csrf
					  <div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Total Seat</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="total_seat" id="total_seat" 
						value="{{ $single_total_seat->total_seat }}"   >
						<input type="hidden" class="form-control" name="id" id="total_seat" 
						value="{{ $single_total_seat->id }}"   >

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