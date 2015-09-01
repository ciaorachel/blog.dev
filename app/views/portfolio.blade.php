@extends('layouts.master')

@section('title')
<title>Rachel's Portfolio</title>
@stop

@section('content')
<h1>Portfolio</h1>

<div class="portfolioImages">
  {{-- <p>Simple Simon</p> --}}
  <a href="{{{ action('HomeController@showSimon')  }}}">
    <img src="/img/simon.png" alt="..." class="img-circle">
  </a>

  {{-- <p>Where's Waldo?</p> --}}
  <a href="#">
      <img src="/img/waldo.png" alt="..." class="img-circle">
  </a>
  
  {{-- <p>Instrument Exchange</p> --}}
  <a href="#">
    <img src="/img/adlister.png" alt="..." class="img-circle">
  </a>

  {{-- <p>Blog</p> --}}
  <a href="{{{ action('PostsController@index') }}}">
    <img src="/img/blog.png" alt="..." class="img-circle">
  </a>

  {{-- Something else here --}}
  <a href="#">
    <img alt="" class="img-circle">
  </a>

  {{-- Something else here --}}
  <a href="#">
    <img alt="" class="img-circle">
  </a>
</div>

@stop