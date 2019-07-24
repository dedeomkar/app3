 @extends  ('layouts.main')

@section('content')
<div class="pdiv">  
<table style="width: 100%; text-align: center;">
	<tr><p></p></tr>
<tr>
	<th colspan="2"><h2>Imported successfully</h2></th>
</tr>
<tr>
	<td>
		<h5>{{$r}} Rows are Inserted, {{$u}} Rows are Updated </h5>
	</td> 
</tr>
</table>
</div>
@endsection