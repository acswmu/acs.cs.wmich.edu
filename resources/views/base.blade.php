<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- BOOTSTRAP REQUIREMENTS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Academic Computing Society</title>

    <!-- CSS STYLING -->
    <link rel="stylesheet" src="bower_components/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" src="{{ asset('css/style.css') }}"/>
  </head>
  <body>
    <div class="container">
      @section('content')
      @endsection
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
