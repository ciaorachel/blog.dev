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

		<div>
			<a href="{{{ action('PostsController@index') }}}"  class="btn btn-info pull-right">Cancel</a>
		</div>
		<div>
			{{ Form::button('<span class="glyphicon glyphicon-thumbs-up"></span> Save', array('class' => 'btn btn-success', 'type' => 'submit')) }}
		</div>

	{{ Form::close() }}
@stop


