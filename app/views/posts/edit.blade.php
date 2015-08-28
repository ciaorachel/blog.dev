@extends('layouts.master')

@section('title')
<title>Edit Blog #{{{ $post->id }}}</title>
@stop

@section('content')
	
	<h1>Edit Post</h1>
	{{-- Form to edit the post --}}
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

		<div class="form-group @if($errors->has('title')) has-error @endif">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group @if($errors->has('body')) has-error @endif">
			{{ Form::label('body', 'Body') }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>

		<div class="btn-group btn-group-justified">
			<div class="btn">
				{{ Form::button('<span class="glyphicon glyphicon-pencil"></span> Save Edits', array('class' => 'btn btn-success pull-left', 'type' => 'submit')) }}
			</div>
	{{ Form::close() }}

			<div class="btn">
				<a href="{{{ action('PostsController@index') }}}"  class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> Cancel, Go Back</a>
			</div>

			<div class="btn">
				<button class="btn btn-danger pull-right" id="delete">
					<span class="glyphicon glyphicon-remove"></span> Delete</button>
					{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' =>'formDelete')) }}
					{{ Form::close() }}
			</div>

		</div>
		

@stop

@section('script')
	<script type="text/javascript">
		(function (){

			"use strict";

			$('#delete').on('click', function(){
				var onConfirm = confirm('Are you sure you want to delete this post?');

				if (onConfirm) {
					$('#formDelete').submit();
				}
			});

		}) ();
	</script>
@stop