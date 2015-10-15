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
					<a href="{{{ action('PostsController@create') }}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Create A New Post</a>
				</div>

				<div class="btn">
					<a href="{{{ action('HomeController@doLogout') }}}" class="btn btn-danger">Logout <span class="glyphicon glyphicon-log-out"></span></a>
				</div>
			</div>
		</div>
	@endif

	<h5><a href="{{{ action('HomeController@showPortfolio') }}}"><span class="glyphicon glyphicon-menu-left"> Back to Portfolio</a></h5>
	<h1>My Personal Blog</h1>
	{{-- This is the search field --}}

	<div id="searchBox">
		{{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
			{{ Form::label('search', 'Search') }}
		<div class="input-group">
			{{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search the blog...']) }}
			<span class="input-group-btn">
				{{ Form::button('<span class="glyphicon glyphicon-search"></span> Search', array('class' => 'btn btn-warning', 'type' => 'submit')) }}
			</span>
		</div>
		{{ Form::close() }}
	</div>


	{{-- This is for the search results --}}
	<div>
		@foreach ($posts as $post)
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="/img/{{{ $post->image }}}" width="50px" height="50px">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h4>
					<h3 class="media-heading"><a href="/posts/{{{ $post->id }}}">{{{ $post->title }}}</a></h3>
					<p class="media-heading"><strong>Posted by {{{ $post->user->first_name }}}</strong> | {{ Str::words($post->body, 20) }}
					| <a href="/posts/{{{ $post->id }}}"><strong>Read more</strong></a></p>
				</div>
			</div>
		@endforeach
	</div>

	{{-- This is the pagination --}}
	<div>	
		<h5>{{ $posts->links() }}</h5>
	</div>
@stop