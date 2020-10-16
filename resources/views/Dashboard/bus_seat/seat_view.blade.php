@extends('Dashboard.app')
@section('title')
Seat View
@endsection

@section('content')
<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Seat View</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{ route('ticket_book') }}">

						@csrf
						<div class="form-group row">
						    <label for="name" class="col-sm-2 col-form-label">Name</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="name" id="name" value="{{ $all_ticket_booking->name }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="phone" id="phone" value="{{ $all_ticket_booking->phone }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="bus_name" class="col-sm-2 col-form-label">Bus Name</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="bus_name" id="bus_name" value="{{ $all_ticket_booking->bus_name }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="bus_name" class="col-sm-2 col-form-label">Chassis No</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="chassis_no" id="bus_name" value="{{ $all_ticket_booking->chassis_no }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="form" class="col-sm-2 col-form-label">From</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="from" id="from" value="{{ $all_ticket_booking->terminal_name }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="to" class="col-sm-2 col-form-label">To</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="to" id="to" value="{{ $all_ticket_booking->district_name }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="terminal" class="col-sm-2 col-form-label">Terminal</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="stoppage" id="stoppage" value="{{ App\Terminal::findOrFail($all_ticket_booking->stoppage)->stoppage }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="date" class="col-sm-2 col-form-label">Date</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="date" id="date" value="{{ $all_ticket_booking->date }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="time" class="col-sm-2 col-form-label">Time</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="time" id="time" value="{{ $all_ticket_booking->time }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="bus_type" class="col-sm-2 col-form-label">Bus Type</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="bus_type" id="bus_type" value="{{ $all_ticket_booking->bus_type }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="seat_no" class="col-sm-2 col-form-label">Seat No</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="seat_no" id="seat_no" value="{{ $all_ticket_booking->seat_number }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="total_price" class="col-sm-2 col-form-label">Total Price</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="total_price" id="price" value="{{ $all_ticket_booking->total_price }}">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="total_seat" class="col-sm-2 col-form-label">Total Seat</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="total_seat" id="total_seat" value="{{ $all_ticket_booking->total_seat }}">
						    </div>
						</div>

						<div class="form-group row">
						    <label for="chassis_no" class="col-sm-2 col-form-label">Chassis No</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="chassis_no" id="chassis_no" value="{{ $all_ticket_booking->chassis_no }}">
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