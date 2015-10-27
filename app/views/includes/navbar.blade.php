<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{{ action('HomeController@showWelcome') }}}">ciao<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>rachel</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a class="linkNav" href="{{{ action('HomeController@showAbout') }}}">About</a></li>
				<li><a class="linkNav" href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
				<li><a class="linkNav" href="{{{ action('HomeController@showContact') }}}">Contact</a></li>
			</ul>	
		</div>
	</div>
</nav>