@extends('home.app')
@section('title')
Bus Ticket Management System
@endsection

@section('content')






    <!-- =========== banner end =========== -->

<!-- ----------------------------------------------------------- -->

<div class="container">
	<div class="row">
		<div class=" col-12">
			<div class="table-responsive">
			@if(isset($details))
				{{ $query }}
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>ID</td>
							<td>From</td>
							<td>To</td>
							<td>Date</td>
							<td>Time</td>
							<td>Bus Name</td>
							<td>Bus Type</td>
							<td>Price</td>
							<td>Action</td>
						</tr>
					 </thead>
			 
			  <tbody>
			  	@foreach($details as $user)
			    <tr>
			    	
			      <th scope="row">{{ $user->id }}</th>
			      <th scope="row">{{ $user->relationbetweenForm->terminal_name }}</th>
			      <th scope="row">{{ $user->relationbetweenTo->district_name }}</th>
			      <th scope="row">{{ $user->relationbetweenDate->date }}</th>
			      <th scope="row">{{ $user->relationbetweenTime->time }}</th>
			      <th scope="row">{{ $user->relationbetweenBus->bus_name }}</th>
			      <th scope="row">{{ $user->relationbetweenBusType->bus_type }}</th>
			      <th scope="row">{{ $user->relationbetweenPrice->price }}</th>
			     
			      <th>
			    	
			    	<a href="{{url('/user/bus_seat/view')}}\{{ $user->id }}" class="btn btn-primary" onclick="">View Seat</a>
			      </th>
			      
			    </tr>
			    @endforeach
			  </tbody>
				</table>
			@endif
			</div>
		</div>
	</div>
</div>
@endsection