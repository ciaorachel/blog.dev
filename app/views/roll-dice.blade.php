@extends('layouts.master')

@section('content')
	<h1>Rolling the dice...</h1>
	<h2>Your guess: {{{ $guess }}} </h2>
    <h2>The roll was: {{{ $randomRoll }}} </h2>
    <h2>{{{ $message }}} </h2>
@stop