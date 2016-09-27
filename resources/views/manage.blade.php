@extends('layouts.base')

@section('title', 'Manage')

@section('content')
  <div class="row">

    @if (Auth::user()->confirmed || Auth::user()->admin)
    <div class="@if(Auth::user()->admin) col-lg-4 @else col-lg-6 @endif" id="column-profile">
      <h3>
        Your Profile<br/>
        <small>Showcase your talents on the ACS site.</small>
      </h3>
      <p><em>Coming Soon</em></p>
    </div><!-- END COLUMN-PROFILE -->

    <div class="@if(Auth::user()->admin) col-lg-4 @else col-lg-6 @endif" id="column-meetings">
      <h3>
        Meetings<br/>
        <small>Manage agenda topics here.</small>
      </h3>
      <div class="panel panel-default">
        <div class="panel-heading">
          Add Topic
        </div>
        <div class="panel-body">
          <form role="form" action="{{ url('/manage/agenda_topic') }}" method="POST">
            {!! csrf_field() !!}

            <div class="form-group">
              <label for="topic">Topic</label>
              <input type="text" name="topic" placeholder="A short description of the agenda topic." id="topic" class="form-control"/>

              @if ($errors->has('topic'))
                <span class="help-block">
                  <strong>{{ $errors->first('topic') }}</strong>
                </span>
              @endif
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea rows="2" name="description" placeholder="A longer detailing of the agenda topic, if necessary." id="description" class="form-control"></textarea>
              @if ($errors->has('description'))
                <span class="help-block">
                  <strong>{{ $errors->first('description') }}</strong>
                </span>
              @endif
            </div>

            @if (Auth::user()->admin)

            <div class="checkbox">
              <label>
                <input type="checkbox" name="important" id="important"/> Important
              </label>
            </div>

            @endif

            <div class="form-group">
              <button id="add_agenda_topic" type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i>Add
              </button>
            </div>
          </form>
        </div>
      </div><!-- END PANEL -->

      <div class="panel panel-default">
        <div class="panel-heading">
          Your Topics
        </div>
        <table class="table">

          @foreach ($agendaTopics as $agendaTopic)

            <tr>
              <td>

                @if ($agendaTopic->resolved)
                <span class="label label-default">Resolved</span>
                @elseif ($agendaTopic->old_business)
                <span class="label label-warning">Old Business</span>
                @else
                <span class="label label-success">New Business</span>
                @endif

                @if ($agendaTopic->important && ! $agendaTopic->resolved)
                <span class="label label-danger">Important</span>
                @endif

                @if ($agendaTopic->resolved)
                <del>
                @endif

                {{ $agendaTopic->topic }}

                @if ($agendaTopic->resolved)
                </del>
                @endif
              </td>

              <td>
                <form action="{{ url('manage/agenda_topic/' . $agendaTopic->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}

                  <button type="submit" id="delete_agenda_topic_{{ $agendaTopic->id }}" class="btn btn-danger">Delete</button>
                </form>
              </td>

              <td>
                <a role="button" href="{{ url('manage/agenda_topic/' . $agendaTopic->id . '/edit') }}" class="btn btn-info" id="edit_agenda_topic_{{ $agendaTopic->id }}">Edit</a>
              </td>
            </tr>

          @endforeach

        </table>
      </div><!-- END PANEL -->

    </div><!-- END COLUMN-MEETINGS -->
    @endif

    @if (Auth::user()->admin)
    <div class="col-lg-4" id="column-administration">
      <h3>
        Administration<br/>
        <small>Manage membership and site content.</small>
      </h3>

      <div class="panel panel-default">
        <div class="panel-heading">
          Users
        </div>
        <table class="table">
          @foreach ($users as $user)
            <tr>
              <td>
                @if ($user->admin)
                  <span class="label label-primary">Admin</span>
                @elseif ($user->confirmed)
                  <span class="label label-success">Member</span>
                @endif
                {{ $user->name }}
              </td>
              <td>
                <a href="{{ url('manage/user/' . $user->id . '/edit') }}" id="edit_user_{{ $user->id }}" class="btn btn-info" role="button">Edit</a>
              </td>
            </tr>
          @endforeach
        </table>
      </div>
    </div><!-- END COLUMN-ADMINISTRATION -->
    @endif

  </div>
@endsection
