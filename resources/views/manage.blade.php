@extends('layouts.base')

@section('title', 'Manage')

@section('content')
  <div class="row">
    <div class="col-lg-4" id="column-blog">
      <h3>
        Your Blog<br/>
        <small>Showcase your talents on the ACS site.</small>
      </h3>
      <p><em>Coming Soon</em></p>
    </div><!-- END COLUMN-BLOG -->

    <div class="col-lg-4" id="column-meetings">
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
          Current Topics
        </div>
        <ul class="list-group">

          @foreach ($agendaTopics as $agendaTopic)

            <li class="list-group-item">
              <p>

              @if ($agendaTopic->old_business)

              <span class="label label-warning">Old Business</span>

              @else

              <span class="label label-success">New Business</span>

              @endif

              @if ($agendaTopic->important)

              <span class="label label-danger">Important</span>

              @endif

              {{ $agendaTopic->topic }}</p>
            </li>

          @endforeach

        </ul>
      </div><!-- END PANEL -->

    </div><!-- END COLUMN-MEETINGS -->

    @if (Auth::user()->admin)

    <div class="col-lg-4" id="column-administration">
      <h3>
        Administration<br/>
        <small>Manage membership and site content.</small>
      </h3>
      <p><em>Coming Soon</em></p>
    </div><!-- END COLUMN-ADMINISTRATION -->

    @endif

  </div>
@endsection
