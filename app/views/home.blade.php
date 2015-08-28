@extends('layouts.master')

@section('title')
<title>Rachel Pierce</title>
@stop

@section('content')
	<div class="homeStyle">
		<h1>Rachel Pierce</h1>
		<p>I'm a Web developer and editor based in San Antonio, TX.</p>
		<a href="{{{ action('HomeController@showAbout') }}}" class="btn btn-about">Get to know me</a>
	</div>
@stop