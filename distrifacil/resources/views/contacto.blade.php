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

    <div class="login-box-body">
      <h2>
      <p class="login-box-msg">LLENE LOS SIGUIENTES DATOS PARA SOLICITAR EL SERVICIO</p>
    </h2>
    {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}

       <div class="form-group">
         <label for="email">Ingrese su nombre</label><P>
          {!!Form::text('name',null,['placeholder' => 'NombreCompleto'])!!}</P>
       </div>

       <div class="form-group">
         <label for="password">Numero telefonico</label><p>
          {!!Form::text('telefono',null,['placeholder' => 'telefono/celular'])!!}</p>
       </div>
       <div class="form-group">
         <label for="password">Direccion</label><p>
          {!!Form::text('direccion',null,['placeholder' => 'direccion'])!!}</p>
       </div>
   <div class="form-group">
         <label for="password">Por favor en este campo cuentenos los productos que desea adquirir y previamente sera comunicado por el encargado de ventas</label><p>
          {!!Form::textarea('mensaje',null,['placeholder' => 'Descripcion pedido'])!!}</p>
       </div>
      {!! Form::submit('ENVIAR', array('class'=>'btn btn-primary')) !!}
      <a href="{{route('home')}}" class="btn btn-warning">Cancelar</a>
           {!!Form::close()!!}
    </form>




  </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@endsection



