<!DOCTYPE html>
<html lang = "es">
  <head>
    <meta charset="utf-8">
    <title>@yield('litle','Tienda Time Team')</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
  </head>
  <body>
    @if(\Session::has('message'))
		@include('admin.partials.message')
	@endif


    @include('admin.partials.nav')

    @yield('content')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="{{ asset('admin/js/main.js') }}"></script>
  </body>
</html>
