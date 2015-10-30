@extends('layouts.master')

@section('title')
<title>Adlister</title>
@stop

@section('content')
	<div>
		<h5><a href="{{{ action('HomeController@showPortfolio') }}}"><span class="glyphicon glyphicon-menu-left"> Back to Portfolio</a></h5>
		
		<div id="container">
            <h1>Project: Adlister</h1>
            <h3>Built with HTML, CSS, JavaScript and PHP</h3>

            <a href="">
	            <img src="/img/adlister-preview-1.png" class="screenshot">
            </a>
            <a href="">
	            <img src="/img/adlister-preview-2.png" class="screenshot">
	        </a>
            <a href="">   
	            <img src="/img/adlister-preview-3.png" class="screenshot">
	        </a>
            <a href="">
	            <img src="/img/adlister-preview-4.png" class="screenshot">
	        </a>
            <a href="">
	            <img src="/img/adlister-preview-5.png" class="screenshot">
	        </a>
        </div>
        

	</div>
@stop