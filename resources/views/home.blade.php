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
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="center-block" src="{{ asset('images/1.jpg') }}" alt="Image of ACS">
      <div class="carousel-caption">
        ACS exists
      </div>
    </div>
    <div class="item">
      <img class="center-block" src="{{ asset('images/2.jpg') }}" alt="Image of ACS">
      <div class="carousel-caption">
        Academic Society Computing!
      </div>
    </div>
    <div class="item">
      <img class="center-block" src="{{ asset('images/3.jpg') }}" alt="Image of ACS">
      <div class="carousel-caption">
        An ACS Thing
      </div>
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
  <div class="text-center col-sm-12 col-md-6">
    <h3>Contact Us<br/><small>Bottom Text</small></h3>
    <p>Lorem Ipsum</p>
    <p>Lorem Ipsum</p>
    <p>Lorem Ipsum</p>
  </div>
  <div class="text-center col-sm-12 col-md-6">
    <h3>Find Us<br/><small>Meetings Every Other Wednesday at 7 PM</small></h3>
    <p>Room B-115</p>
    <p>College of Engineering and Applied Sciences</p>
    <p>Western Michigan University</p>
  </div>
</div>
@endsection
