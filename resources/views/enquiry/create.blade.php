@extends('layouts.main')
@section('content')

<script type="text/javascript">
	$(document).ready(function(){
		$('#T1').click(function(){
			$('#enqT1').css('display','block');$('#T1').css('background-color','#211');
			$('#enqT2').css('display','none');$('#T2').css('background-color','#333');
			$('#enqT3').css('display','none');$('#T3').css('background-color','#333');
			$('#enqT4').css('display','none');$('#T4').css('background-color','#333');
		})
		$('#T2').click(function(){
			$('#enqT1').css('display','none');$('#T1').css('background-color','#333');
			$('#enqT2').css('display','block');$('#T2').css('background-color','#211');
			$('#enqT3').css('display','none');$('#T3').css('background-color','#333');
			$('#enqT4').css('display','none');$('#T4').css('background-color','#333');
		})
		$('#T3').click(function(){
			$('#enqT1').css('display','none');$('#T1').css('background-color','#333');
			$('#enqT2').css('display','none');$('#T2').css('background-color','#333');
			$('#enqT3').css('display','block');$('#T3').css('background-color','#211');
			$('#enqT4').css('display','none');$('#T4').css('background-color','#333');
		})
		$('#T4').click(function(){
			$('#enqT1').css('display','none');$('#T1').css('background-color','#333');
			$('#enqT2').css('display','none');$('#T2').css('background-color','#333');
			$('#enqT3').css('display','none');$('#T3').css('background-color','#333');
			$('#enqT4').css('display','block');$('#T4').css('background-color','#211');
		})
	});
</script>

<table style="width: 100%">
<tr>
	<td>
		<p></p>
		<h4><span> </span>Create</h4>
	</td>
</tr>
<tr>
	<td> 
		<button id="btnx" type="submit" class="btn btn-primary" style="margin-left: 4px;">Save</button>
		<button onclick="window.location='{{route('enq_index')}}'" class="btn btn-primary">Cancel</button> 
	</td> 
</tr>
<tr>
	<td> 
	<div class="navbar tab-bar " style="margin:2px;"> 
	<a id="T1"  style="background-color: #211" href="#">Basic</a>
	<a id="T2" href="#">Process</a>
	<a id="T3"  href="#">Buyers Pref</a>
	<a id="T4"  href="#">Post Sales</a> </div> 
	</td>
</tr>
<tr>
	<td>
		<div class="pdiv">
		<form id="enq" action="" method="post"> 
			@csrf
			<div id="enqT1" style="display: block;">
				@include('includes.enqT1')
			</div>
			<div id="enqT2" style="display: none">
				@include('includes.enqT2')
			</div>
			<div id="enqT3" style="display: none">
				@include('includes.enqT3')
			</div>
			<div id="enqT4" style="display: none">
				@include('includes.enqT4')
			</div>
		</form>
		</div>
	</td>
</tr>
</table>
@endsection