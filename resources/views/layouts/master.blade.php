<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Demo @yield('title')  </title>

    <!-- Bootstrap -->
    {!! Html::style('css/bootstrap.min.css')!!}

  </head>
  <body>
     @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::script('js/bootstrap.min.js')!!}
  </body>
  @yield('script') 
</html>
