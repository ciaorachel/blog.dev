@extends('layouts.master')

@section('title')
<title>Create A Blog Post</title>
@stop

@section('content')
	{{ Form::open(array('action' => 'PostsController@store')) }}
		<div class="form-group @if($errors->has('title')) has-error @endif">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group @if($errors->has('body')) has-error @endif">
			{{ Form::label('body', 'Body') }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group @if($errors->has('image')) has-error @endif">
			{{ Form::label('image', 'Upload image') }}
			{{ Form::file('image', null, ['class' => 'form-control']) }}
		</div>

		<div>
			{{ Form::button('Save <span class="glyphicon glyphicon-thumbs-up"></span>', array('class' => 'btn btn-success', 'type' => 'submit')) }}
		</div>

	{{ Form::close() }}

		<div>
			<a href="{{{ action('PostsController@index') }}}" class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-left"></span> Cancel, Go Back</a>
		</div>
@stop


