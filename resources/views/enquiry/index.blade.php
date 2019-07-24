@extends('layouts.main')
@section('content')
<div class="pdiv"> 
<table style="width: 100%">
	<tbody> 
		<tr>
			<td colspan="10">
			<p ></p></td>
		</tr>
		<tr style="text-align-last: left;  ">
			<th>EnquiryName</th>
			<th>MobileNo</th>
			<th>City</th>
			<th>Source</th>
			<th>Status</th>
			<th>Is Potential</th>
		</tr> 
		<tr>
			<td colspan="10">
			<p style="border-bottom: 1px solid #333;"></p></td>
		</tr>
		
			@foreach($enq as $e) 
			<tr>
				<td><a href="{{route('enq_show',$e)}}">{{$e['EnquiryName']}}</a></td>
				<td>{{$e['MobileNo']}}</td>
				<td>{{$e['City']}}</td>
				<td>{{$e['Source']}}</td>
				<td>{{$e['Status']}}</td>
				<td>{{$e['Potential']}}</td></tr>
			@endforeach

	</tbody>


</table>
</div>

@endsection