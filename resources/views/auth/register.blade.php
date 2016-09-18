@extends('layouts.base')

@section('title', 'Register')

@section('content')
<div class="row">
  <div class="col-md-8">
    <h3>Register</h3>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
      {!! csrf_field() !!}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Name</label>

        <div class="col-md-6">
          <input type="text" class="form-control" name="name" value="{{ old('name') }}">

          @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">WMU Email Address</label>

        <div class="col-md-6">
          <input type="email" class="form-control" name="email" value="{{ old('email') }}">

          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Password</label>

        <div class="col-md-6">
          <input type="password" class="form-control" name="password">

          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Confirm Password</label>

        <div class="col-md-6">
          <input type="password" class="form-control" name="password_confirmation">

          @if ($errors->has('password_confirmation'))
            <span class="help-block">
              <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Personal Website URL</label>

        <div class="col-md-6">
          <input type="text" class="form-control" name="website">

          @if ($errors->has('website'))
            <span class="help-block">
              <strong>{{ $errors->first('website') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Bio</label>

        <div class="col-md-6">
          <textarea name="bio" class="form-control" rows="4"></textarea>

          @if ($errors->has('website'))
            <span class="help-block">
              <strong>{{ $errors->first('website') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i>Register
          </button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-4">
    <h3><small>What an account gets you...</small></h3>
    <p>Description of registration</p>
  </div>
</div>
@endsection
