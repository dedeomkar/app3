 @extends  ('layouts.main')

@section('content')

<div class="pdiv"> 
<table style="width: 100%">
<tr>
	<th colspan="2"><h4>Import enquiry from file</h4></th> 
</tr>
<tr><td><hr></td></tr>
<tr>
	<td>
		<form action="/enq-imp/show" method="post">
		<table style="width :100%;">
			@csrf	
			@foreach ($csv_data as $row)
			<tr>
				@foreach($row as $k=>$value)
					<td>{{$value}}</td>
				@endforeach
			</tr>
			@endforeach	
			<tr><td colspan="20"><hr></td></tr>
			<tr>
			@foreach ($csv_data[0] as $k=>$val) 
				<td><select name="{{$k}}" id="{{$k}}"> 
					@foreach($dbcol as $col=>$v )
						@if ($v == $header[$k])
						<option value="{{$v}}" selected="selected">{{$v}}</option>
						@else
						<option value="{{$v}}">{{$v}}</option>
						@endif
					@endforeach
				</select></td> 
			@endforeach
			</tr> 
			<tr><td ><p></p></td></tr>
		</table>
		<table>
			<tr><td >Mobile No (Primary) <input type="checkbox" name="Pri"></td></tr>
			<tr><td>Enquiry Name (Secondary)</td><td><input type="checkbox" name="Sec"></td></tr>
			<tr><input type="hidden" name="csvid" value="{{$csvid}}"></tr>
			<tr>
				<td ><button type="submit" class="btn btn-primary">Import</button></td>
			</tr>
		</table>
		</form>  
	</td> 
</tr>
</table>
</div>
@endsection