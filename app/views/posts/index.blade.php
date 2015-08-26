@extends('layouts.master')

@section('title')
<title>Blog Index</title>
@stop

@section('content')
	
		@if (Auth::check())
		<div id="userDashBoard">
			<h2>Hello {{{ Auth::user()->first_name }}}!</h2>
			<h3>Manage Posts</h3>
			<div class="btn-group">
				<div class="btn">
					<a href="{{{ action('PostsController@create') }}}" class="btn btn-success"><p>Create Post</p></a>
				</div>

				<div class="btn">
					<a href="{{{ action('HomeController@doLogout') }}}" class="btn btn-danger"><p>Logout</p></a>
				</div>
			</div>
		</div>
		@endif

	

	<div>
		@foreach ($posts as $post)
				<h4>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h4>
				<h3><a href="/posts/{{{ $post->id }}}">{{{ $post->title }}}</a></h3>
				<p><strong>Posted by {{{ $post->user->first_name }}}</strong> | {{{ Str::words($post->body, 20) }}}
				| <a href="/posts/{{{ $post->id }}}"><strong>Read more</strong></a></p>
		@endforeach
	</div>

	<div>	
		<h5>{{ $posts->links() }}</h5>
	</div>
@stop