@extends('Tienda.store.template')
<body class="hold-transition skin-blue sidebar-collapse">

@section('content')
<div class="body">
 <header class="main-header">
  <a href="{{route('home')}}" class="logo">
    <span class="logo-mini"><b>DF</b></span>
    <span class="logo-lg"><b>DISTRI FACIL</b></span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <span class="sr-only">Navegación</span>
  </a>
</nav>
</header>

<div class="container text-center">

  <div class="login-box">
    <div class="login-box-body">
      <h3>
      <p class="login-box-msg">ingrese su usuario</p>
    </h3>

     <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
     {{ csrf_field() }}
       <div class="form-group">
         <label for="email">Correo electronico</label>
         <input class="form-control" type="email" name="email" value="{{ old('email') }}">
       </div>

       <div class="form-group">
         <label for="password">Contraseña</label>
         <input class="form-control" type="password" name="password" id="password">
       </div>


       <p>

        <button type="submit" style="text-align:right" class="btn btn-info"
        >Ingresar</button>
      </p>
     
    </form>




  </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@endsection




