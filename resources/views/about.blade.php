@extends('layouts.base')

@section('title', 'About Us')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object" width="128px" src="{{ asset('images/acslogo.png') }}" alt="ACS Logo">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">We're the Academic Computing Society at Western Michigan University</h4>
        <p>Some paragraphs about what we do and stuff</p>
        <p>Some paragraphs about what we do and stuff</p>
        ...
      </div>
    </div>
  </div>
</div>

@endsection
