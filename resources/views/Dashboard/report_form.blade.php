@extends('Dashboard.app')
@section('title')
Generate Report
@endsecction

@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="{{ route('report_view') }}" method="post">
				@csrf
				<div class="form-group">
					<select name="chassis_no" id="" class="form-control">
						@php
						$id = null;
						@endphp

						@foreach($all_booking as $booking)
						@if ($id==null)
						@php
							$id=$booking->chassis_no;
						@endphp
						<option value="{{ $id }}">{{$id}} [{{$booking->bus_name}}]</option>
						@else
						@if($id!=$booking->chassis_no)
						@php
							$id=$booking->chassis_no;
						@endphp
						<option value="{{ $id }}">{{$id}} [{{$booking->bus_name}}]</option>
						@endif
						@endif

						@endforeach
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection