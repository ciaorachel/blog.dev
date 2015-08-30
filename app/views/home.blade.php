@extends('layouts.master')

@section('title')
<title>Rachel Pierce</title>
@stop

@section('content')
	<div class="homeStyle">
		<h1>Rachel Pierce</h1>
		<p>I'm a Web developer and editor based in San Antonio, Texas.</p>
		<a href="{{{ action('HomeController@showAbout') }}}" class="btn btn-about">Get to know me <span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
@stop