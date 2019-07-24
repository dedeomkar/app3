@extends('layouts.main')
@section('content')
<div class="pdiv">
<div class="pdiv"> 
<table style="width: 100%">
	<tbody style="text-align:left;"> 
		<tr>
			<td colspan="10">
			<p style="font-size: 25px;">Enquiry Details</p>
		</td>
		</tr>  
		<tr >  
				<th>EnquiryName</th><td > {{$enq['EnquiryName']}} </td>
				<th>Source</th><td >{{$enq['Source']}}</td>
		</tr>
		<tr>
				<th>MobileNo</th><td >{{$enq['MobileNo']}}</td>
				<th>Status</th><td >{{$enq['Status']}}</td>
		</tr>
		<tr>
				<th>City</th><td >{{$enq['City']}}</td>
				<th>Is Potential</th><td >{{$enq['Potential']}}</td> 
		</tr>
		<tr><td><p></p></td></tr>
		<tr>
			<td colspan="4"><p style="border-bottom: #ccc solid 0.5px;"></p></td>
		</tr>
		<tr>
			<td colspan="4">
			<span style="font-size: 20px;"> Visit</span><br> 
			@foreach ($enq->visits as $v)
			<a href="{{route('vis_show',['vis'=>$v['id']])}}">{{$v->CityID}}</a><br>
			@endforeach
			<p></p>
			<button onclick=" window.location=' {{route('vis_create1', ['enq' => $enq->id])}}' "
				class="btn btn-primary">Create</button> 
				<button class="btn btn-primary">View</button>
		</td>
		</tr>   
 
	</tbody>


</table>
</div>
</div>
@endsection