@extends('layouts.master')

@section('title')
<title>Rachel's Portfolio</title>
@stop

@section('content')
<h1>Portfolio</h1>

<div>
	<h3>Blog</h3>
    <a href="{{{ action('PostsController@index') }}}"class="thumbnail">
      <img src="/img/blog.png" alt="...">
    </a>

	<h3>Instrument Exchange</h3>
    <a href="#" class="thumbnail">
      <img src="/img/adlister-snapshot.png" alt="...">
    </a>

	<h3>Simple Simon</h3>
	<a href="{{{ action('HomeController@showSimon')  }}}" class="thumbnail">
      <img src="/img/simon.png" alt="...">
    </a>

	<h3>Where's Waldo?</h3>
	<a href="#" class="thumbnail">
	    <img src="/img/waldo.png" alt="...">
    </a>

    
   
</div>

@stop