@extends('layouts.master')

@section('title')
<title>About Rachel</title>
@stop

@section('content')
<h1>My name's Rachel</h1>
<img src="/img/headshot.jpg" class="img-circle img-responsive" id="headshot">
<h3>I'm a Web developer and editor based in San Antonio, TX.</h3> 
<p>My Web development and design skills include:</p>
	<ul>
		<li>HTML5 / CSS3</li>
		<li>Twitter Bootstrap design framework</li>
		<li>JavaScript / jQuery</li>
		<li>Exposure to MySQL, PHP and Laravel development framework</li>
	</ul>

<h3>A little about my communications background...</h3>
<p>While I'm a newbie to front-end Web design and back-end development, I have about a decade of experience as a writer and an editor. My editorial expertise covers:</p>
	<ul>
		<li>News writing and editing</li>
		<li>Content development for marketing and sales teams</li>
		<li>Business insights writing and editing</li>
		<li>Editing scholarly articles and producing online academic journals</li>
		<li>Expert on Associated Press and Chicago Manual of Style</li>
	</ul>

<p>See my full resume on <a href="https://www.linkedin.com/in/rachelpierce" target="blank">LinkedIn <span class="glyphicon glyphicon-share"></span></a>.</p>

<h3>Thanks for stopping by&mdash;I invite you to check out my <a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>.</h3>


@stop