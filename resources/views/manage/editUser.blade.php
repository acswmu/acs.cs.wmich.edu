@extends('layouts.base')

@section('title', 'Edit User')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <h3>Edit User</h3>
    <p>Editing {{ $user->name }}</p>
    <form action="{{ url('manage/user/' . $user->id) }}" method="POST">
      {!! csrf_field() !!}
      {!! method_field('PATCH') !!}

      <div class="checkbox">
        <label>
          <input type="checkbox" name="confirmed" id="confirmed" {{ $user->confirmed ? 'checked="checked"' : '' }}/>
          Confirmed Member
        </label>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-default">Update</button>
      </div>
    </form>
  </div>
</div>

@endsection
