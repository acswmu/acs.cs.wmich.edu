@extends('layouts.base')

@section('title', 'Home')

@section('content')
<!-- FROM BOOTSTRAP DOCUMENTATION: http://getbootstrap.com/javascript/#carousel --> 
<div id="home-carousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#home-carousel" data-slide-to="1"></li>
    <li data-target="#home-carousel" data-slide-to="2"></li>
    <li data-target="#home-carousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="center-block" src="{{ asset('images/1.jpg') }}" alt="Image of ACS">
    </div>
    <div class="item">
      <img class="center-block" src="{{ asset('images/2.jpg') }}" alt="Image of ACS">
    </div>
    <div class="item">
      <img class="center-block" src="{{ asset('images/3.jpg') }}" alt="Image of ACS">
    </div>
    <div class="item">
      <img class="center-block" src="{{ asset('images/4.jpg') }}" alt="Image of ACS">
    </div>
  </div>

  <!-- Controls -->
  <!--
  <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  -->
</div>

<!-- ACS INFORMATION -->
<div class="row">
  <div class="text-center col-sm-12">
    <h3>Who We Are</h3>
    <p class="lead"><em>The Academic Computing Society is a student organization dedicated to the promotion of academic growth, the encouragement of networking, and the exploration of new ideas in the field of computer science.</em></p>
  </div>
  <div class="text-center col-sm-12 col-md-6">
    <h3>Contact Us<br/><small>Join us on Slack or Facebook</small></h3>
    <p><a href="https://wmu-acs.slack.com" title="ACS Slack"><img src="{{ asset('images/Slack App Icon.png') }}" alt="Slack App Icon" height="24px"/> wmu-acs</a></p>
    <p><a href="https://www.facebook.com/AcademicComputingSociety/" title="ACS Facebook Page"><img src="{{ asset('images/FB-f-Logo__blue_50.png') }}" height="24px"/> /AcademicComputingSociety</a></p>
    <p><a href="https://github.com/acswmu" title="ACS Github Organization"><img src="{{ asset('images/GitHub-Mark-32px.png') }}" height="24px"/> /acswmu</a></p>
  </div>
  <div class="text-center col-sm-12 col-md-6">
    <h3>Find Us<br/>
      <small>Meetings Every Wednesday at 5 PM</small>
    </h3>
    <p>Room B-115<br/>
    College of Engineering and Applied Sciences<br/>
    Western Michigan University
    </p>
    <p><a href="http://wmich.collegiatelink.net/organization/ACS">Join our RSO page!</a></p>
  </div>
</div>
@endsection
