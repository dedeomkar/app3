@extends('layouts.main')
@section('content')

<script type="text/javascript">
	$(document).ready(function(){
		$('#T1').click(function(){
			$('#enqT1').css('display','block');$('#T1').css('background-color','#211');
			$('#enqT2').css('display','none');$('#T2').css('background-color','#333'); 
		})
		$('#T2').click(function(){
			$('#enqT1').css('display','none');$('#T1').css('background-color','#333');
			$('#enqT2').css('display','block');$('#T2').css('background-color','#211'); 
		}) 
	});
</script>

<table style="width: 100%">
<tr>
	<td>
		<p></p>
		<h4><span> </span> Create</h4>
	</td>
</tr>
<tr>
	<td>
		<button id="btnv" type="submit" class="btn btn-primary" style="margin-left: 4px;">Save</button>
		<button onclick="window.location='{{route('enq_show', ['enq'=>$x['id']])}}'" class="btn btn-primary">Cancel</button> 
	</td> 
</tr> 
<tr>
	<td> 
	<div class="navbar tab-bar" style="margin:2px;"> 
	<a id="T1"  style="background-color: #211" href="#">Basic</a> 
	<a id="T2"  href="#">Post Sales</a> </div> 
	</td>
</tr>
<tr>
	<td>
		<div class="pdiv"> 
		<form id="vis" action="" method="post"> 
			@csrf
			<div id="enqT1" style="display: block;">
				@include('includes.visT1')
			</div> 
			<div id="enqT2" style="display: none">
				@include('includes.enqT4')
			</div>
		</form>
		</div>
	</td>
</tr>
</table>
@endsection