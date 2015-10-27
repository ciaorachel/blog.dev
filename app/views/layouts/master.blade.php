<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Portfolio site of front-end Web designer and editor Rachel Pierce">
    <meta name="keywords" content="rachel pierce, san antonio, web designer, web developer, front end, html, css, javascript, content writing, content development, editor">
    <meta name="author" content="Rachel Pierce">
    <link rel="icon" href="../../favicon.ico">

    @yield('title')

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="/css/bootstrap-theme.min.css">

	<!-- Font Awesome icons! -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>

	<div class="container">

		<!-- Navbar -->
		@include('includes.navbar')

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
		</div> 

    	@include('includes.footer')

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	@yield('script')

	<script type="text/javascript">
	$(function() {
    	var url = window.location.href;
    	var home = window.location.origin + "/";

    	$('.navbar-default .navbar-brand')
    		.each(function(){
				if(url == home){
					$(this).closest('a').addClass('navbar-brandLink');
					$(this).on('click', false);
			}		
    	});
		

	    $('.navbar-default .navbar-nav>li a')
		    .each(function(){
		    	if(url == (this.href)){
		    		$(this).closest('li').addClass('activeNav');
		    		$(this).closest('a').addClass('activeLink');
		    		$(this).closest('li').removeClass('regularNav');
		    		$(this).on('click', false);
			    } else {
				    $(this).on('mouseover', function() {
				        $(this).addClass('hoverNav');
				        $(this).removeClass('linkNav');
				    })
				    $(this).on('mouseout', function() {
				        $(this).removeClass('hoverNav');
				        $(this).addClass('linkNav');
				    })	
			    }
		});

	});
	</script>
</body>
</html>