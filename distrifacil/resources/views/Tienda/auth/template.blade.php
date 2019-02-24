<!DOCTYPE html>
<html lang = "es">
  <head>
    <meta charset="utf-8">
    <title>@yield('litle','Tienda Time Team')</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     <link rel = "stylesheet" href= "{{asset('css/main.css')}}">
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DistriFacil</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" href="img/favicon.ico">
    
  </head>
  <body>
    @if(\Session::has('message'))
    @include('store.partials.message')
  @endif
      @include('store.partials.nav')


    

    @yield('content')

    {{--@include('store.partials.footer')--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/pinterest_grid.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>