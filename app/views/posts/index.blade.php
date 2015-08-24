@extends('layouts.master')

@section('title')
<title>Blog Index</title>
@stop

@section('content')
	<div>
		<a href="{{{ action('PostsController@create') }}}" class="btn btn-success">Create Post</a>
	</div>
	
	<div>
		@foreach ($posts as $post)
				<h4>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h4>
				<h3>{{{ $post->title }}}</h3>
				<p>{{{ $post->body }}}</p>
				<a href="/posts/{{{ $post->id }}}">Read more</a>
		@endforeach
	</div>

	<div>	
		<h5>{{ $posts->links() }}</h5>
	</div>
@stop