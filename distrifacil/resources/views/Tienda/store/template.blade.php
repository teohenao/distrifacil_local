
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DistriFacil</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{asset('tienda/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('tienda/css/font-awesome.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('tienda/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="{{asset('tienda/css/_all-skins.min.css')}}">
     <link rel="apple-touch-icon" href="{{asset('tienda/img/apple-touch-icon.png')}}">
     <link rel="shortcut icon" href="{{asset('tienda/img/favicon.ico')}}">

     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     <link rel = "stylesheet" href= "{{asset('tienda/css/main.css')}}">
   </head>

        @yield('content')
        <!--Fin Contenido-->
      </div>
    </div>

  </div>
</div><!-- /.row -->
</div><!-- /.box-body -->
</div><!-- /.-->
</div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->


  <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    @stack('scripts')
<script src="{{ asset('tienda/js/pinterest_grid.js') }}"></script>

<script src="{{ asset('tienda/js/main.js') }}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('tienda/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('tienda/js/app.min.js')}}"></script>


</body>
</html>
