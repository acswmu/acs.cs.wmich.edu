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
        <h3>Academic Computing Society</h3>
      </div>

      <!-- CONTENT SECTION -->
      @yield('content')
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
