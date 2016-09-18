@extends('layouts.base')

@section('title', 'Meetings')

@section('content')

<div class="row">
  <div class="col-sm-12 col-md-8">
    <h3>This Week's Agenda<br/>
      <small>Next Meeting: Wednesday, September 21st</small>
    </h3>
    <!-- In the future this will pull from somewhere that is easier to edit. -->
    <!-- For now, edit it on the page directly. -->
    <p>Coming Soon</p>
  </div>

  <div class="col-sm-12 col-md-4">
    <h3>Minutes</h3>
    <p><a href="https://drive.google.com/drive/folders/0B3hLpGeohevkdDJ4MzR4dkxyV1k?usp=sharing" title="Minutes Google Drive Folder"><img src="{{ asset('images/drive_tile-32.png') }}" height="24px" alt="Google Drive Tile"/> Academic Computing Society Minutes</a></p>
  </div>
</div>

<!--
  <div class="row">
  <div class="col-sm-12">
  <h3>Agendas</h3>
  <p>Links to agendas from meetings</p>
  </div>
  </div>
-->

@endsection
