<h4>create user</h4>

@if(count($errors) > 0 )
	<ul>
	@foreach($errors->all() as $err)
		<li>{{ $err }}</li>

	@endforeach 
	</ul>
@endif

@if(Session::has('msg'))
	<div>{{ Session::get('msg') }}</div>
@endif

<p>
	<form action="/user/save" method="POST">
		{{ csrf_field() }}
		<input type="text" name="name" value="{{old('name')}}">
		<input type="text" name="email" value="{{old('email')}}">
		<button type="submit">add</button>
	</form>
</p>

