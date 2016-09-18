@extends('layouts.base')

@section('title', 'Schedule')

@section('content')

<div class="row col-sm-12">
  <h3>Event Calendar</h3>
  <div class="embed-responsive embed-responsive-4by3">
    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;height=800&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=acswmu%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="1140" height="800" frameborder="0" scrolling="no"></iframe>
  </div>
</div>

@endsection
