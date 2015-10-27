@extends('layouts.master')

<link rel="stylesheet" href="/css/waldo.css">

@section('title')
<title>Where's Waldo?</title>
@stop

@section('content')
<h5><a href="{{{ action('HomeController@showPortfolio') }}}"><span class="glyphicon glyphicon-menu-left"> Back to Portfolio</a></h5>

	<div class="container">
	<h1>Project: Where's Waldo?</h1>
	<h3>Built with HTML, CSS, JavaScript and jQuery</h3>

		<div class="row">
			<div id="gameBackground">
				<div class="container" id="instructions">
					<h2 style="color: ">FUN IN THE SUN</h2>
					<p>Can you find Waldo ... in just <button id="timer">10</button> seconds?</p>
					<button id="start" class="btn">START</button>
					<p>Your score: <button id="counter">0</button> points</p>

				</div>
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
			    	$("#timer").text(timer);
			    }

			    if (timer == 0) {
			    	$("#timer").text(timer);
			        alert("Time's up! You got " + clicks.length + " points!");
			        this.enabled = true;
			        clearInterval(timer);
			        $(".square").removeClass("active");
			    }
			}, 1000);
    	});

	    // This is to animate the mole square
    	function animateMole() {
    		var square = $(".square");
    		var selectRandomSquare = Math.floor(Math.random()*9);
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
	    		$("#counter").text(clicks.length);
	    	}
	    });

    	function fadeOutSquare(id) {
    		$("#" + id).removeClass("active");
    		animateMole();
    	};

    });	
	</script>


@stop