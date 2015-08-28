@extends('layouts.master')

@section('title')
<title>Blog Index</title>
@stop

@section('content')
	
	{{-- Auth check, so only authorized users will see a user dashboard to create posts and logout --}}
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

	<h5><a href="{{{ action('HomeController@showPortfolio') }}}"><span class="glyphicon glyphicon-menu-left"> Back to Portfolio</a></h5>
	<h1>Blog Posts</h1>
	{{-- This is the search field --}}
	<div id="searchBox">
	{{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
		{{ Form::label('search', 'Search') }}
		{{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search the blog by entering your search term and hitting "Enter"']) }}
	{{ Form::close() }}
	</div>

	{{-- This is for the search results --}}
	<div>
		@foreach ($posts as $post)
				<h4>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h4>
				<h3><a href="/posts/{{{ $post->id }}}">{{{ $post->title }}}</a></h3>
				<p><strong>Posted by {{{ $post->user->first_name }}}</strong> | {{ Str::words($post->body, 20) }}
				| <a href="/posts/{{{ $post->id }}}"><strong>Read more</strong></a></p>
		@endforeach
	</div>

	{{-- This is the pagination --}}
	<div>	
		<h5>{{ $posts->links() }}</h5>
	</div>
@stop