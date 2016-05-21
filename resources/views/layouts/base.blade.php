<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP REQUIREMENTS ^ -->

    <title>@yield('title') - Academic Computing Society</title>

    <!-- CSS STYLING -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
  </head>
  <body>
    <div class="container">
      <!-- HEADER SECTION -->
      <div class="header">
        <img src="{{ asset('images/acslogo-compact.png') }}" alt="Compact ACS Logo" width="76px" class="img-responsive pull-left"/>
        <h3>Academic Computing Society</h3>
        <nav>
          <ul class="nav nav-tabs">
            <li role="presentation"><a href="{{ url('/') }}">Home</a></li>
            <li role="presentation"><a href="{{ url('/about') }}">About</a></li>
            <li role="presentation"><a href="{{ url('/members') }}">Members</a></li>
            <li role="presentation"><a href="{{ url('/projects') }}">Projects</a></li>
            <li role="presentation"><a href="{{ url('/schedule') }}">Schedule</a></li>
          </ul>
        </nav>
      </div>

      <!-- CONTENT SECTION -->
      @yield('content')
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
