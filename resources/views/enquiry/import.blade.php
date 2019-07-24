@extends  ('layouts.main')

@section('content')
<div class="pdiv"> 
<table style="width: 100%; text-align: center;">
	<tr><p></p></tr>
<tr>
	<th><h2>Import enquiry from file</h2></th>
</tr>
<tr>
	<td colspan="3" >
		<form enctype="multipart/form-data" method="post" action="/enq-imp">
			@csrf
			<p></p>
			<input type="file" name="enq_csv" id="enq_csv" class="btn btn-secondary"><br><br>
			Include Header  <input type="checkbox" name="header"><br><br>
			<button type="submit" class="btn btn-primary">Import</button>

		</form>
	</td> 
</tr>
</table>  
</div>
@endsection