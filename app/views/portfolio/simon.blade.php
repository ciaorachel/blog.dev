@extends('layouts.master')

<link rel="stylesheet" href="/css/simon.css">

@section('title')
<title>Simple Simon</title>
@stop

@section('content')
	<div>
		<h5><a href="{{{ action('HomeController@showPortfolio') }}}"><span class="glyphicon glyphicon-menu-left"> Back to Portfolio</a></h5>
		<h1>Simple Simon</h1>
		<h2>Built with HTML, CSS, JavaScript and jQuery</h2>
		<div id="container">
		<div id="gameBoard">
			<div class="square" id="red"></div>
			<div class="square" id="blue"></div>
			<div class="square" id="green"></div>
			<div class="square" id="yellow"></div>
            <button id="counter">Start</button>         
		</div>

	</div>
	</div>
	

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<script>
	"use strict";
    $(document).ready(function () {

    	var simonSequence = [];
    	var userIndex = 0;  

    	// This function controls animation style only 
    	function animateSquare(id) {
    		$("#" + id).addClass("active");
    		setTimeout(function() {
    			$("#" + id).removeClass("active");
    		}, 500);
    	};

    	// This function controls the square(s) animated by Simon
    	function animateSimonSquare() {
    		var squares = $(".square");
    		var selectRandomSquare = Math.floor(Math.random()*4);
    		var randomSquare = squares[selectRandomSquare];
    		var id = randomSquare.getAttribute("id");
    		simonSequence.push(id);
    	};

    	// This listener attached to the START button
    	$("#counter").click(function() {
    		simonSequence = [];
    		animateSimonSquare();
    		simonSays();
    		$(this).text("Restart");
            $("#counter").text("Round 1");
    	})

    	// This is for user input, compares user input to simon sequence
    	$(".square").click(function(e) {
    		var squareClicked = $(this).attr("id");
    		animateSquare(squareClicked);
			if (squareClicked == simonSequence[userIndex]){
				userIndex += 1;
				if (userIndex == simonSequence.length) {
					copy();
					userIndex = 0;
				}
			} else {
				alert("Game Over");
				location.reload(true);
			}
    	});

    	// This function runs the game 
    	function simonSays() {
    		var i = 0;
    		var intervalId = setInterval(function() {
    			if (i >= simonSequence.length) {
    				clearInterval(intervalId);
    			}
    			animateSquare(simonSequence[i]);
    			i += 1;
    		}, 600);
    	}

    	//This function tells Simon to take new turn, updates round #
    	function copy() {
    		animateSimonSquare();
    		$("#counter").text("Round " + simonSequence.length);
    		simonSays();
    	}


    });	


	</script>
		


	</div>
@stop