<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>CRM</title>  
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/gen.css')}}"> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{asset('js/reqshow.js')}}"></script> 
</head>
 

<body>

<header> 
<div class="navbar"> 
<div class="dropdown">
	<a href="/" class="drop-btn">Home</a>
		<div class="drop-con">
			<a href="">All Recent</a>
			<a href="">r1</a>
			<a href="">r2</a>
		</div>
</div>
@auth
<div class="dropdown">
	<a href="" class="drop-btn">Deals</a>
		<div class="drop-con">
			<a href="">Creat</a> 
			<a href="">View</a>  
		</div>
</div>
<div class="dropdown">
	<a href="{{route('enq_index')}}" class="drop-btn">Enquiries</a>
		<div class="drop-con">
			<a href="{{route('enq_create')}}">Create</a>
			<a href="">View</a>
			@if(Auth::check() && Auth::user()->role == 'admin')
			<a href="{{route('enq_imp')}}">Import</a>
			@endif
		</div>
</div>
<div class="dropdown">
	<a href="" class="drop-btn">Car selection</a>
		<div class="drop-con">
			<a href="">View</a>
			@if(Auth::check() && Auth::user()->role == 'admin')
			<a href="">Import</a> 
			@endif
		</div>
</div>  
@endauth

<div > 
	@guest
	<a href="{{route('login')}}" style="float: right;">Login</a>
	@else
	 <a  href="/logout" onclick="event.preventDefault();
  		document.getElementById('logout-form').submit();"style="float: right;">Log out</a>  
	<form id="logout-form" action="/logout" method="POST" style="display: none;">
	@csrf
    </form>
    @endguest
</div>
</div>
</header>  
 
	<div>  
	@yield('content') 
	</div>




<script type="text/javascript"> 
$(document).ready(function(){
	spans();
	allck();
	$('input')
	$('#btnx').click(function(){   
	rem();
	spans();
	show(); 
});
});
</script>
</body>
</html>