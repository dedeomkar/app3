@extends('layouts.main')
@section('content')

<div class="pdiv"><div class="pdiv">

<table style="width: 100%">
	<tbody style="text-align:left;"> 
		<tr>
			<td colspan="10">
			<p style="font-size: 25px;">Visit Details</p>
		</td>
		</tr>  
		<tr >  
				<th>VisitName</th><td > {{$vis['InvLocation']}} </td>
				<th>VisitStatus</th><td >{{$vis['VisitStatus']}}</td>
		</tr>
		<tr>
				<th>VisitDate</th><td >{{$vis['VisitDate']}}</td>
				<th>City</th><td >{{$vis['CityID']}}</td>
		</tr>
		<tr>
				<th>visitID</th><td >{{$vis['id']}}</td>
				<th> </th><td > </td> 
		</tr>
		<tr>
			<td colspan="10">
 
		</td>
		</tr>   
 
	</tbody>


</table> 
</div></div>
@endsection