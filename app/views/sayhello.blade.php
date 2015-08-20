@extends('layouts.master')

@section('content')

	@if($name == '')
		<h1>You have a name, don't you?</h1>
	@else 
		<h1>Hello, {{{ $name }}}!</h1>
	@endif

@stop
