<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP REQUIREMENTS ^ -->

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    <title>@yield('title') - Academic Computing Society</title>

    <!-- CSS STYLING -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

    <noscript>
      <style>
        .collapse {
          display: block;
        }
      </style>
    </noscript>
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
            <!--<li role="presentation"><a href="{{ url('/about') }}">About</a></li>-->
            <li role="presentation"><a href="{{ url('/members') }}">Members</a></li>
            <li role="presentation"><a href="{{ url('/projects') }}">Projects</a></li>
            <li role="presentation"><a href="{{ url('/meetings') }}">Meetings</a></li>
            <li role="presentation"><a href="{{ url('/schedule') }}">Schedule</a></li>
            @if (Auth::guest())
              <li role="presentation"><a href="{{ url('/login') }}">Login</a></li>
              <li role="presentation"><a href="{{ url('/register') }}">Register</a></li>
            @else
              <li role="presentation"><a href="{{ url('/logout') }}">Logout</a></li>
              <li role="presentation"><a href="{{ url('/manage') }}">Manage</a></li>
            @endif
          </ul>
        </nav>
      </div>

      <!-- CONTENT SECTION -->
      @yield('content')

      <div class="footer">
        <hr/>
        <p><small>Designed in 2016 by the Academic Computing Society <span class="glyphicon glyphicon-star"></span> <a href="https://github.com/acswmu/acs.cs.wmich.edu" alt="Check out this website's source">Under the Hood</a></small></p>
      </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
