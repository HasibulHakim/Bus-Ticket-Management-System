@extends('home.app')
@section('title')
Bus Ticket Management System
@endsection

@section('content')





<section id="breadcrumb">
        <div class="overly"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 text-center">
                    <div class="breadcrumbinfo">
                        <article>
                            <span class="b-title">Search your Bus Result</span>
            <form role="search" action="/search" method="post">
                @csrf
        <div class="form-row">
            <div class="col-12 col-md-3 col">
               <select name="from" class="form-control">

        				@foreach($all_forms as $forms)
					      	<option value="{{$forms->id}}" >{{$forms->terminal_name}}</option>
					      	@endforeach
                       

               </select>
            </div>
            <div class="col-12 col-md-3 col">
               
               <select name="to" class="form-control">
						@foreach($all_tos as $tos)
					      	<option value="{{$tos->id}}" >{{$tos->district_name}}</option>
					      	@endforeach

               </select>

            </div>

                     <div class="col-12 col-md-3 col">
               
               <select name="date" class="form-control">
					@foreach($all_dates as $dates)
					      	<option value="{{$dates->id}}" >{{$dates->date}}</option>
					      	@endforeach
                      
               </select>

            </div>

          

        </div>

            <div class="col-12 col-md-3 col">
                <button type="submit" class="form-control h-serch">SEARCH</button>
            </div>
        </div>
    </form>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== banner end =========== -->

<!-- ----------------------------------------------------------- -->

<div class="container">
	<div class="row">
		<div class=" col-12">
			<div class="table-responsive">
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
			  	@foreach($all_bus_info as $buses)
			    <tr>
			    	
			      <th scope="row">{{ $buses->id }}</th>
			      <th scope="row">{{ $buses->relationbetweenForm->terminal_name }}</th>
			      <th scope="row">{{ $buses->relationbetweenTo->district_name }}</th>
			      <th scope="row">{{ $buses->relationbetweenDate->date }}</th>
			      <th scope="row">{{ $buses->relationbetweenTime->time }}</th>
			      <th scope="row">{{ $buses->relationbetweenBus->bus_name }}</th>
			      <th scope="row">{{ $buses->relationbetweenBusType->bus_type }}</th>
			      <th scope="row">{{ $buses->relationbetweenPrice->price }}</th>
			     
			      <th>
			    	
			    	<a href="{{url('/user/bus_seat/view')}}\{{ $buses->id }}" class="btn btn-primary" onclick="">View Seat</a>
			      </th>
			    </tr>
			    @endforeach
			  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection