@extends ('layouts.main')


@section ('content')


<div class="pdiv">
	
	<table>
		<tr><td colspan=""><h3>Welcome {{Auth::user()->name}}</h3></td></tr>
	</table>
	<table style="width: 100%; text-align:center;">
		<tr><td colspan="10"><hr></td></tr>
		<tr>
			@if (Auth::user()->role == "admin")
			<td>
			<button class="btn btn-success dashEl" onclick="window.location='{{route('user_index')}}' ;   ">
			<div class="pdiv">
				<i class="fa fa-user"></i>
				<p>Manage</p>
				<h4>
					Users
				</h4>
			</div>	
			</button>
			</td>
			<td>
			<button class="btn btn-primary dashEl">
			<div class="pdiv">
				<i class="fa fa-user"></i>
				<p>Manage</p>
				<h4>
					Notifications
				</h4>
			</div>	
			</button>
			</td>
			@else 
			<td style="width: 30%"></td>
			@endif
			<td>
			<button class="btn btn-danger dashEl">
			<div class="pdiv">
				<i class="fa fa-user"></i>
				<p>Manage</p>
				<h4>
					Enquiry
				</h4>
			</div>	
			</button>
			</td>
			<td>
			<button class="btn btn-secondary dashEl">
			<div class="pdiv">
				<i class="fa fa-user"></i>
				<p>Manage</p>
				<h4>
					Visit
				</h4>
			</div>	
			</button>
			</td>
			<td>
			<button class="btn btn-dark dashEl">
			<div class="pdiv">
				<i class="fa fa-user"></i>
				<p>Manage</p>
				<h4>
					Profile
				</h4>
			</div>	
			</button>
			</td>
			<td style="width: 30%">
				<p></p>
			</td>
		</tr>
		<tr><td colspan="10"><hr></td></tr> 
	</table>


</div>



@endsection