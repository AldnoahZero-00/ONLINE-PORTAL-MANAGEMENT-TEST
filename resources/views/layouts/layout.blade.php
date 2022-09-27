<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FCPC ONLINE PORTAL</title>

        <!-- Styles -->
 
        <link href="/css/main.css" rel="stylesheet">
        <link href="/tool/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="/tool/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/tool/jquery-3.6.0.min.js"></script>
        <link rel="icon" href="img/fcpc_logo_2.ico">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>

      @yield('content')

      <footer>
        <p>Copyright 2022@FCPC</p>
      </footer>
    </body>
</html>