@extends('layouts.master')

@section('title')
<title>Blog Post #{{{ $post->id }}}</title>
@stop

@section('content')
	{{-- Auth check runs, and only authorized users will see the Edit button --}}
	@if (Auth::check())
	<div>
		<a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
	</div>
	@endif
	<div>
		<h4>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h4>
		<h3>{{{ $post->title }}}</h3>
		<p><strong>Posted by {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</strong></p>
		{{ $post->body }}
	</div>
	
	<div>
		<a href="{{{ action('PostsController@index') }}}"  class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
	</div>
@stop