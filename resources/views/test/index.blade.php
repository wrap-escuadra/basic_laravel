@extends('layout.template')

@section('content')
<h4>Users <i class="fas fa-camera-retro"></i></h4>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>User</th>
			<th>Email</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	
	@foreach($users as $user)
		<tr>
			<td>{{$user->name}}</td> 
			<td>{{$user->email}}</td> 
			<td><a href="/user/{{$user->id}}/edit"></a>Edit</td>
			<td><a href=""></a>Delete</td>
			<td><a href=""></a>Delete</td>			
		</tr>
		
		
	@endforeach
</table>
@endsection


