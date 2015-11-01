@extends('layouts.master')

@section('title')
<title>Events Planner</title>
@stop

@section('content')
	<div>
		<h5><a href="{{{ action('HomeController@showPortfolio') }}}"><span class="glyphicon glyphicon-menu-left"> Back to Portfolio</a></h5>
		
		<div id="container">
            <h1>Project: Events Planner</h1>
            <h3>Built with HTML, CSS, JavaScript, jQuery, PHP and Laravel</h3>

            <div class="screenshot">
	            <a href="">
		            <img src="/img/eventsplanner-preview-1.png">
	            </a>
	            <a href="">
		            <img src="/img/eventsplanner-preview-2.png">
		        </a>
	            <a href="">   
		            <img src="/img/eventsplanner-preview-3.png">
		        </a>
	            <a href="">
		            <img src="/img/eventsplanner-preview-4.png">
		        </a>
		    </div>
        </div>
        

	</div>
@stop