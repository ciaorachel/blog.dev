<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    @yield('title')

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>

	<div class="container">

		<!-- Static navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">CIAO<span class="glyphicon glyphicon-flash"></span>RACHEL</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/about">About</a></li>
						<li><a href="/resume">Resume</a></li>
						<li><a href="/portfolio">Portfolio</a></li>
						<li><a href="/posts">Blog</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>	
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>

		<div class="row marketing">
	        <div>
	        	@if (Session::has('successMessage'))
				    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
				@endif
				@if (Session::has('errorMessage'))
				    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
				@endif

	        	@foreach($errors->all() as $error)
	        		<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-alert"></span> {{{ $error }}}</div>
	        	@endforeach
	        	@yield('content')

	        </div>
    	</div>

    	<footer class="footer">
    		@if(Request::path() !== 'posts' || Auth::check())
    			<p>&copy; Rachel Pierce, 2015</p>
    		@else 
				<p>&copy; Rachel Pierce, <a href="/login">2015</a></p>
			@endif
			
		</footer>

	</div> <!-- /container -->


    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	@yield('script')
</body>
</html>