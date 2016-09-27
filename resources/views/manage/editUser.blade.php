@extends('layouts.base')

@section('title', 'Edit User')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <h3>Edit User</h3>
    <form action="{{ url('manage/user/' . $user->id) }}" method="POST">
      {!! csrf_field() !!}
      {!! method_field('PATCH') !!}
      
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}"/>
      </div>

      <div class="form-group">
        <label for="bio">Name</label>
        <textarea type="text" name="bio" id="bio" class="form-control">{{ $user->bio }}</textarea>
      </div>

      @if(Auth::user()->admin)
      <div class="checkbox">
        <label>
          <input type="checkbox" name="confirmed" id="confirmed" {{ $user->confirmed ? 'checked="checked"' : '' }}/>
          Confirmed Member
        </label>
      </div>

      <div class="checkbox">
        <label>
          <input type="checkbox" name="admin" id="admin" {{ $user->admin ? 'checked="checked"' : '' }}/>
          Admin
        </label>
      </div>
      @endif

      <div class="form-group">
        <button type="submit" class="btn btn-default">Update</button>
      </div>
    </form>
  </div>
</div>

@endsection
