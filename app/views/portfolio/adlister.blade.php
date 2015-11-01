@extends('layouts.master')

@section('title')
<title>Adlister</title>
@stop

@section('content')
	<div>
		<h5><a href="{{{ action('HomeController@showPortfolio') }}}"><i class="fa fa-long-arrow-left"></i> Back to Portfolio</a></h5>
		
		<div id="container">
            <h1>Project: Adlister</h1>
            <h3>Built with HTML, CSS, JavaScript, jQuery and PHP</h3>

            <div class="screenshot">
            	<a href="">
		            <img src="/img/adlister-preview-1.png">
	            </a>
	            <a href="">
		            <img src="/img/adlister-preview-2.png">
		        </a>
	            <a href="">   
		            <img src="/img/adlister-preview-3.png">
		        </a>
	            <a href="">
		            <img src="/img/adlister-preview-4.png">
		        </a>
	            <a href="">
		            <img src="/img/adlister-preview-5.png">
		        </a>
            </div>
        </div>
	</div>
@stop