@extends ('layouts.main')


@section ('content')


<div class="pdiv">
	
	<table>
		<tr><td colspan=""><h3>All Users</h3></td> 
			<td style="width: 82.8%"></td>
			<th><a href="{{route('user_create')}}">Add</a></th>
		</tr>
	</table>
	<table style="width: 70%; text-align:center;">
		<tr><td colspan="10"><hr></td></tr>
		<tr>
			<th>Name</th>
			<th>Mobile no.</th>
			<th>Role</th>
			<th>Action</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->id}}</td>
			<td>{{$user->role}}</td>
			<td><a href="#" class="" onclick="$('#userDel').submit()">Delete</a> | 
				<a href="#" onclick="window.location = '{{route('user_edit',['uid'=>$user->id])}}'">
				Edit</a></td>
			<form id="userDel" action="{{route('user_delete',['uid'=>$user->id])}}" 
				method="post" hidden="true">
					@csrf
				</form> 
		</tr>
 		@endforeach
	</table>

</div>



@endsection
