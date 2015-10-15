@extends('layouts.master')

@section('title')
<title>Blog Post #{{{ $post->id }}}</title>
@stop

@section('content')
	<div>
		<h4>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h4>
		<h3>{{{ $post->title }}}</h3>
		<p><img src="/img/{{{ $post->image }}}"></p>
		<p><strong>Posted by {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</strong></p>
		{{ $post->body }}
	</div>
	
	<div class="btn-group btn-group-justified">
		<div class="btn">
			<a href="{{{ action('PostsController@index') }}}"  class="btn btn-info pull-left"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
		</div>

		{{-- Auth check runs, and only authorized users will see the Edit and Delete buttons --}}
		@if (Auth::check())
		<div class="btn">
			<a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
		</div>

		<div class="btn">
			<button class="btn btn-danger pull-left" id="delete">
			<span class="glyphicon glyphicon-remove"></span> Delete</button>
			{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
			{{ Form::close() }}
		</div>
		@endif
	</div>
@stop

@section('script')
	<script type="text/javascript">
		(function (){

			'use strict';

			$('#delete').on('click', function(){
				var onConfirm = confirm('Are you sure you want to delete this post?');

				if (onConfirm) {
					$('#formDelete').submit();
				}
			});

		}) ();
	</script>
@stop