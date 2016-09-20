@extends('layouts.base')

@section('title', 'Edit Agenda Topic')

@section('content')

  <div class="row">
    <div class="col-sm-12">
      <h3>Edit Agenda Topic</h3>
      <form role="form" action="{{ url('/manage/agenda_topic/' . $agendaTopic->id) }}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('PATCH') !!}

        <div class="form-group">
          <label for="topic">Topic</label>
          <input type="text" class="form-control" name="topic" id="topic" value="{{ $agendaTopic->topic }}"/>
        </div>

        <div class="form-group">
          <label for="topic">Description</label>
          <textarea name="description" class="form-control" id="description" rows="3">{{ $agendaTopic->description }}</textarea>
        </div>

        @if (Auth::user()->admin)
        <div class="checkbox">
          <label>
          <input type="checkbox" name="important" id="important" {{ $agendaTopic->important ? 'checked="checked"' : '' }}/>
            Important
          </label>
        </div>
        @endif

        <div class="checkbox">
          <label>
          <input type="checkbox" name="old_business" id="old_business" {{ $agendaTopic->old_business ? 'checked="checked"' : '' }}/>
            Old Business
          </label>
        </div>

        <div class="checkbox">
          <label>
          <input type="checkbox" name="resolved" id="resolved" {{ $agendaTopic->resolved ? 'checked="checked"' : '' }}/>
            Resolved
          </label>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-default">Update</button>
        </div>
      </form>
    </div>
  </div>

@endsection
