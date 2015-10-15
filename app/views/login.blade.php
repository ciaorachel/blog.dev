@extends('layouts.master')

@section('title')
<title>Log In</title>
@stop

@section('content')

	{{ Form::open(array('action' => 'HomeController@doLogin')) }}
		<div class="form-group @if($errors->has('email')) has-error @endif">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group @if($errors->has('password')) has-error @endif">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array('class' => 'form-control')) }}
		</div>
		<div>
			{{ Form::button('Log In  <span class="glyphicon glyphicon-log-in"></span>', array('class' => 'btn btn-success', 'type' => 'submit')) }}
		</div>

	{{ Form::close() }}

@stop




