@extends('layouts.master')

@section('title')
<title>Rachel's Portfolio</title>
@stop

@section('content')
<h1>Portfolio</h1>

<div class="portfolioImages">
  {{-- <p>Simple Simon</p> --}}
  <a href="{{{ action('HomeController@showSimon')  }}}">
    <div class="shade-overlay">
      <img src="/img/simon.png" alt="...">
      <div class="imgDescription">
        <p class="imgTitle">Simple Simon</p>
        <p class="imgCaption">Built with HTML, CSS, JavaScript and jQuery</p>
      </div>
      
    </div>
  </a>

  {{-- <p>Where's Waldo?</p> --}}
  <a href="{{{ action('HomeController@showWaldo')  }}}">
    <div class="shade-overlay">
        <img src="/img/waldo.png" alt="...">
        <div class="imgDescription">
          <p class="imgTitle">Project: Where's Waldo?</p>
          <p class="imgCaption">Built with HTML, CSS, JavaScript and jQuery</p>
        </div>
    </div>
  </a>


  {{-- <p>Blog</p> --}}
  <a href="{{{ action('PostsController@index') }}}">
    <div class="shade-overlay">
      <img src="/img/blog.png" alt="...">
      <div class="imgDescription">
        <p class="imgTitle">Project: Blog</p>
        <p class="imgCaption">Built with HTML, CSS, jQuery, PHP and Laravel</p>
      </div>
    </div>
  </a>


  {{-- <p>Instrument Exchange</p> --}}
  <a href="{{{ action('HomeController@showAdlister') }}}">
    <div class="shade-overlay">
      <img src="/img/adlister.png" alt="...">
      <div class="imgDescription">
        <p class="imgTitle">Project: Instrument Exchange</p>
        <p class="imgCaption">Built front-end with HTML, CSS, JavaScript and jQuery</p>
      </div>
    </div>
  </a>


  {{-- <p>Events Planner</p> --}}
  <a href="{{{ action('HomeController@showEventsPlanner') }}}">
    <div class="shade-overlay">
      <img src="/img/eventsplanner.png" alt="...">
      <div class="imgDescription">
        <p class="imgTitle">Project: Events Planner</p>
        <p class="imgCaption">Built front-end with HTML, CSS, jQuery and JS plug-ins</p>
      </div>
    </div>
  </a>


  {{-- <p>Wanna Play</p>--}}
  <a href="http://wannaplay.site/" target="blank">
    <div class="shade-overlay">
      <img src="/img/wanna-play.png">
      <div class="imgDescription">
        <p class="imgTitle">Capstone: Wanna Play</p>
        <p class="imgCaption">Built front-end with HTML, CSS, jQuery</p>
      </div>
    </div>
  </a>


</div>

@stop