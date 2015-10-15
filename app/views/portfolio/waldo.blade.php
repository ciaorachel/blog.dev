@extends('layouts.master')

<link rel="stylesheet" href="/css/waldo.css">

@section('title')
<title>Where's Waldo?</title>
@stop

@section('content')
<h5><a href="{{{ action('HomeController@showPortfolio') }}}"><span class="glyphicon glyphicon-menu-left"> Back to Portfolio</a></h5>

<div id="container">
	<h1>Project: Where's Waldo?</h1>
	<h3>Built with HTML, CSS, JavaScript and jQuery</h3>

	<div id="gameInstructions">
		<h2 style="color: ">FUN IN THE SUN</h2>
		<p>Can you find Waldo ... in just 10 seconds?</p>
		<button id="start" class="btn btn-success">Start</button>
		<p>Your Score: 
			<button id="counter" class="btn btn-default disabled"> </button>
			 / Time Left: 
			 {{-- Need to add time remaining here --}}
		</p>
	</div>

	<div id="rightSide">
		<div id="gameboard">
			<div class="square" id="0"></div>
			<div class="square" id="1"></div>
			<div class="square" id="2"></div>
			<div class="square" id="3"></div>
			<div class="square" id="4"></div>
			<div class="square" id="5"></div>
			<div class="square" id="6"></div>
			<div class="square" id="7"></div>
			<div class="square" id="8"></div>
		</div>
	</div>
</div>
		
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>
	"use strict";
    $(document).ready(function () {

    	var clicks = 0;
    	

    	// This is for the start button
    	$("#start").click(function() {
    		$(".square").removeClass("active");
    		clicks = [];
			animateMole();
			var timer = 10;
			
			setInterval(function() {
			    timer -=1;
			    if (timer > 0) {
			    	this.disabled = true;
			    	this.text(timer + " seconds");
			    }

			    if (timer == 0) {
			        alert("Time's up! You got " + clicks.length + " points!");
			        this.enabled = true;
			        clearInterval(countdown);
			    }
			}, 1000);
    	});

	    // This is to animate the mole square

	    if ( $(window).width() < 321) {     
			var selectRandomSquare = Math.floor(Math.random()*12);
		} elseif ( $(window).width() < 376) {
			var selectRandomSquare = Math.floor(Math.random()*16);
		}



    	function animateMole() {
    		var square = $(".square");
    		/*var selectRandomSquare = Math.floor(Math.random()*9);*/
    		var randomSquare = square[selectRandomSquare];
    		var id = randomSquare.getAttribute("id");
    		fadeInSquare(id);
    	}

    	// This is for the animation, adding class of active
    	function fadeInSquare(id) {
    		$("#" + id).addClass("active");
    	};

    	// This receives user click
    	$(".square").click(function(e) {
    		var clickedId = $(this).attr("id");
	    	var randomSquare = $(this).hasClass("active");
	    	if (randomSquare == true) {
	    		fadeOutSquare(clickedId);
	    		clicks += 1;
	    		$("#counter").text("Points: " + (clicks.length));
	    	}
	    });

    	function fadeOutSquare(id) {
    		$("#" + id).removeClass("active");
    		animateMole();
    	};

    });	
	</script>


@stop