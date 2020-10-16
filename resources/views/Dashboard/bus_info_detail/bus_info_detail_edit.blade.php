@extends('Dashboard.app')
@section('title')
Bus Information Detail
@endsection

@section('content')

<div class="container-fluid my-3">
    <div class="d-flex row">
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Create Bus Informations</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{ route('businfo_update') }}">

						@csrf
						<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">From</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option value="{{$single_businfo->terminal_name_id}}">{{ $single_businfo->relationbetweenForm->terminal_name }}</option>

					      	@foreach($all_forms as $forms)
					      	<option value="{{$forms->id}}" >{{$forms->terminal_name}}</option>
					      	@endforeach
					      </select>

					      <input type="hidden" name="id" value="{{ $single_businfo->id }}">
					    </div>
					</div>
					

					 <div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">To</label>
					    <div class="col-sm-10">
					      <select name="to_id" id="" class="form-control" required>
					      	<option value="{{ $single_businfo->district_name_id}}" >{{ $single_businfo->relationbetweenTo->district_name }}</option>

					      	@foreach($all_tos as $tos)
					      	<option value="{{$tos->id}}" >{{$tos->district_name}}</option>
					      	@endforeach
					      	
					      </select>
					    </div>
					</div>
					 
					 <div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Date</label>
					    <div class="col-sm-10">
					      <select name="date_id" id="" class="form-control" required>
					      	<option value="{{$single_businfo->date_id}}" >{{ $single_businfo->relationbetweenDate->date }}</option>
					      	@foreach($all_dates as $dates)
					      	<option value="{{$dates->id}}" >{{$dates->date}}</option>
					      	@endforeach
					      </select>
					    </div>
					</div>
					 <div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Time</label>
					    <div class="col-sm-10">
					      <select name="time_id" id="" class="form-control" required>
					      	<option value="{{$single_businfo->time_id}}">{{ $single_businfo->relationbetweenTime->time }}</option>
					      	@foreach($all_times as $times)
					      	<option value="{{$times->id}}" >{{$times->time}}</option>
					      	@endforeach
					      </select>
					    </div>
					</div>

					 <div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Bus Name</label>
					    <div class="col-sm-10">
					      <select name="bus_name_id" id="" class="form-control" required>
					      	<option value="{{$single_businfo->bus_name_id}}">{{ $single_businfo->relationbetweenBus->bus_name }}</option>
					      	@foreach($all_buses as $buses)
					      	<option value="{{$buses->id}}" >{{ $buses->bus_name }}</option>
					      	@endforeach
					      </select>
					    </div>
					</div>
					 
					 <div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Bus Type</label>
					    <div class="col-sm-10">
					      <select name="bus_type_id" id="" class="form-control" required>
					      	<option value="{{$single_businfo->bus_type_id}}">{{ $single_businfo->relationbetweenBusType->bus_type }}</option>
					      	@foreach($all_bus_types as $bus_types)
					      	<option value="{{ $bus_types->id }}" >{{ $bus_types->bus_type }}</option>
					      	@endforeach
					      </select>
					    </div>
					</div>
					  
					  <div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Price</label>
					    <div class="col-sm-10">
					      <select name="price_id" id="" class="form-control" required>
					      	<option value="{{$single_businfo->price_id}}">{{ $single_businfo->relationbetweenPrice->price }}</option>
					      	@foreach($all_prices as $prices)
					      	<option value="{{ $prices->id }}" >{{ $prices->price }}</option>
					      	@endforeach
					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Total Seat</label>
					    <div class="col-sm-10">
					      <select name="total_seat_id" id="" class="form-control" required>
					      	<option value="{{$single_businfo->total_seat_id}}">{{ $single_businfo->relationbetweenTotalSeat->total_seat }}</option>
					      	@foreach($all_total_seats as $total_seats)
					      	<option value="{{ $total_seats->id }}" >{{ $total_seats->total_seat }}</option>
					      	@endforeach
					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Chassis No</label>
					    <div class="col-sm-10">
					      <select name="chassis_no_id" id="" class="form-control" required>
					      	<option value="{{$single_businfo->chassis_no_id}}">{{ $single_businfo->relationbetweenChassisNo->chassis_no }}</option>
					      	@foreach($all_chassis_nos as $chassis_nos)
					      	<option value="{{ $chassis_nos->id }}" >{{ $chassis_nos->chassis_no }}</option>
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