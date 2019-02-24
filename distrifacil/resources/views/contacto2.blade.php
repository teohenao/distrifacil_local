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
      <p class="login-box-msg">ENVIAR PROMOCION A CLIENTES</p>
    </h2>
    {!!Form::open(['route'=>'mail2.store','method'=>'POST'])!!}
   <div class="form-group">
         <label for="mensaje">Ingrese la promocion que desea enviar a todos sus clientes registrados</label><p>
          {!!Form::textarea('mensaje',null,['placeholder' => 'Promocion..........'])!!}</p>
       </div>
      {!! Form::submit('ENVIAR', array('class'=>'btn btn-primary')) !!}
      <a href="{{route('home')}}" class="btn btn-warning">Cancelar</a>
           {!!Form::close()!!}
    </form>
  </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@endsection



