@extends('Dashboard.app')
@section('title')
Report
@endsection

@section('content')
<br>
<br>
<p>Bus Report...</p>
	<table class="table table-dark">
	  <thead>
	    <tr>
	      <th scope="col">Bus Info</th>
	      <th scope="col">Report</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	    	<td>Bus Name</td>
	      <td>{{ $bus_name }}</td>
	  	</tr>
	  	<tr>
	  		<td>Bus Type</td>
	      <td>{{ $bus_type }}</td>
      	</tr>
      	<tr>
      		<td>Chassis No</td>
	      <td>{{ $chassis_no }}</td>
	    </tr>
	    <tr>
	    	<td>Stoppages</td>
	      <td>{{ $stoppage }}</td>
	    </tr>
	    <tr>
	    	<td>Date</td>
	      <td>{{ $date }}</td>
	    </tr>
	    <tr>
	    	<td>Total Seat</td>
	      <td>{{ $total_seat }}</td>
	    </tr>
	    <tr>
	    	<td>Total Price</td>
	      <td>{{ $total_price }}</td>
	    </tr>
	    </tr>
	  </tbody>
	</table>
@endsection