@extends('layouts.master')
@section('title', 'Register user')
@section('content')

<form action="{{url('registerForm')}}" method="POST">
{{ csrf_field() }}
<h1>Register user</h1>
<div>
<label for="title">Enter name</label>
<input type="text" name="name" id="name">
</div>
	
	<div>
<label for="title">Enter email</label>
<input type="text" name="email" id="email">
</div>
	
<div>
<label for="title">Enter password</label>
<input type="text" name="password" id="password">
	
<label for="title">Enter date of birth</label>
<input type="text" name="dateofbirth"id="dateofbirth">
</div>
	
	
	
<input type="submit" name="submitBtn" value="Add User">
</form>
 @endcan
@endsection