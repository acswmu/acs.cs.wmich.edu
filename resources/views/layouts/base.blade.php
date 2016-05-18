<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- BOOTSTRAP REQUIREMENTS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Academic Computing Society</title>

    <!-- CSS STYLING -->
    <link rel="stylesheet" src="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" src="{{ asset('css/style.css') }}"/>
  </head>
  <body>
    <div class="container">
      <!-- HEADER SECTION -->
      <div class="header">
        <h3>Academic Computing Society</h3>
      </div>

      <!-- CONTENT SECTION -->
      @section('content')
      @endsection
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
