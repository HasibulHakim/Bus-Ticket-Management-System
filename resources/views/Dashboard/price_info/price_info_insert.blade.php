@extends('Dashboard.app')
@section('title')
Price Insert
@endsection

@section('content')
<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Price Insert</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{ route('price_insert') }}">

						@csrf
					  <div class="form-group row">
					    <label for="price" class="col-sm-2 col-form-label">Price</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="price" id="price">
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