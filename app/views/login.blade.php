@extends('layouts.main')

@section('content')
	{{ Form::open() }}
		<input type="text" name="username" placeholder="Username" />
		<input type="password" name="password" placeholder="Password" />
		<input type="submit" value="Sign In" />
	{{ Form::close() }}
@stop
