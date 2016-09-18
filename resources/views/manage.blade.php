@extends('layouts.base')

@section('title', 'Manage')

@section('content')
  <div class="row">
    <div class="col-lg-4" id="column-blog">
      <h3>
        Your Blog<br/>
        <small>Showcase your talents on the ACS site.</small>
      </h3>
    </div>
    <div class="col-lg-4" id="column-meetings">
      <h3>
        Meetings<br/>
        <small>Manage agenda topics here.</small>
      </h3>
    </div>

    @if (Auth::user()->admin)

    <div class="col-lg-4" id="column-administration">
      <h3>
        Administration<br/>
        <small>Manage membership and more.</small>
      </h3>
    </div>

    @endif

  </div>
@endsection
