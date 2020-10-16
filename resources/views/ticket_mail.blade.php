<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  @php
    $allData = explode("|",$catch)
  @endphp

<table>
  <tr>
    <th>Criteria</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Name</td>
    <td>{{$allData[1]}}</td>
  </tr>
  <tr>
    <td>Phone</td>
    <td>{{$allData[2]}}</td>
  </tr>
  <tr>
    <td>Bus Name</td>
    <td>{{$allData[3]}}</td>
  </tr>
  <tr>
    <td>Date</td>
    <td>{{$allData[7]}}</td>
  </tr>
  <tr>
    <td>Time</td>
    <td>{{$allData[8]}}</td>
  </tr>
  <tr>
    <td>From</td>
    <td>{{$allData[4]}}</td>
  </tr>
  <tr>
    <td>To</td>
    <td>{{$allData[5]}}</td>
  </tr>
  <tr>
    <td>Seat Nos</td>
    <td>{{$allData[9]}}</td>
  </tr>
  <tr>
    <td>Total Price</td>
    <td>{{$allData[0]}}</td>
  </tr>
  <tr>
    <td>Stoppage</td>
    <td>{{$allData[6]}}</td>
  </tr>
</table>

</body>
</html>