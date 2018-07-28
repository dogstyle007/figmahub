<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')Figmahub</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/mdb/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/mdb/mdb.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    

  </head>

  <body>

    @include('layouts.nav')


    <div class="container">

    @yield('content')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset('/js/mdb/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/mdb/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/mdb/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/mdb/js/mdb.min.js')}}"></script>
    
  </body>
</html>
