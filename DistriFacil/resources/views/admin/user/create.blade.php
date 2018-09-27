

@extends('store.template')
 <body class="hold-transition skin-blue sidebar-mini">
@section('content')

<div class="wrapper">
 <header class="main-header">
  <a href="{{route('home')}}" class="logo">
    <span class="logo-mini"><b>DF</b></span>
    <span class="logo-lg"><b>
        DISTRI FACIL
    </b></span>
</a>
<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Navegación</span>
  </a>
</form>
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li><a href="{{route('carrito-show')}}"></a></li>
      <li class="d">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
         {{ Auth::user()->nombre }}
     </a>
 </ul>
</div>
</nav>
</header>


<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li>
     <a href="{{ route('mail') }}">
       <i class="fa fa"></i> <span>ENVIAR OFERTA</span>

     </a>
   </li>
      <li>
        <a href="{{ route('admin.user.index') }}">
          <i class="fa fa"></i> <span>CLIENTES</span>
      </a>
  </li>
  <li>
    <a href="{{ route('admin.product.index') }}">
      <i class="fa fa"></i> <span>PRODUCTOS</span>
  </a>
</li>
<li>
    <a href="{{ route('admin.order.index') }}">
      <i class="fa fa"></i> <span>PEDIDOS</span>
  </a>
</li>
<li>
    <a href="{{ route('admin.user.edit', Auth::user()) }}">
      <i class="fa fa"></i> <span>EDITAR PERFIL</span>

  </a>
</li>
<li>
    <a href="{{ route('logout') }}">
      <i class="fa fa"></i> <span>FINALIZAR SESION</span>

  </a>
</li>

</ul>
</section>
</aside>


<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">






        <div class="container text-center">
            <div class="page-header">
                <h2>
                  Agregar nuevo usuario
              </h2>
          </div>
          <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="page">
                    {!! Form::open(['route'=>'admin.user.store']) !!}

                    <div class="form-group">
                        <label for="tipod">Tipo de usuario:</label>
                        {!! Form::radio('tipod', 'documento',true) !!} documento
                        {!! Form::radio('tipod', 'NIT') !!} NIT
                    </div>
                    <div class="form-group">
                        <label for="identificacion">identificacion:</label>
                        {!!
                            Form::text(
                                'identificacion',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Ingresa la indentificacion...',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                )
                            )
                            !!}
                        </div>


                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            {!!
                                Form::text(
                                    'nombre',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    )
                                )
                                !!}
                            </div>
                            <div class="form-group">
                                <label for="telefonor">telefono:</label>
                                {!!
                                    Form::text(
                                        'telefonor',
                                        null,
                                        array(
                                            'class'=>'form-control',
                                            'placeholder' => 'Ingresa el telefono...',
                                            'autofocus' => 'autofocus',
                                            'required' => 'required'
                                        )
                                    )
                                    !!}
                                </div>
                                <div class="form-group">
                                    <label for="direccionr">direccion:</label>
                                    {!!
                                        Form::text(
                                            'direccionr',
                                            null,
                                            array(
                                                'class'=>'form-control',
                                                'placeholder' => 'Ingresa la direccion..',
                                                'autofocus' => 'autofocus',
                                                'required' => 'required'
                                            )
                                        )
                                        !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre_negocio">nombre negocio:</label>
                                        {!!
                                            Form::text(
                                                'nombre_negocio',
                                                null,
                                                array(
                                                    'class'=>'form-control',
                                                    'placeholder' => 'Ingresa el cargo..',
                                                    'autofocus' => 'autofocus',
                                                    'required' => 'required'
                                                )
                                            )
                                            !!}
                                        </div>


                                        <div class="form-group">
                                            <label for="email">Correo:</label>

                                            {!!
                                                Form::text(
                                                    'email',
                                                    null,
                                                    array(
                                                        'class'=>'form-control',
                                                        'placeholder' => 'Ingresa el correo...',
                                                        'required' => 'required'
                                                    )
                                                )
                                                !!}
                                            </div>

                                            <div class="form-group">
                                                <label for="user">Usuario:</label>

                                                {!!
                                                    Form::text(
                                                        'user',
                                                        null,
                                                        array(
                                                            'class'=>'form-control',
                                                            'placeholder' => 'Ingresa el nombre de usuario...',
                                                            'required' => 'required'
                                                        )
                                                    )
                                                    !!}
                                                </div>

                                                <div class="form-group">
                                                    <label for="password">Contraseña:</label>

                                                    {!!
                                                        Form::password(
                                                            'password',
                                                            array(
                                                                'class'=>'form-control',
                                                                'required' => 'required'
                                                            )
                                                        )
                                                        !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tipo">Tipo de usuario:</label>
                                                        {!! Form::radio('tipo', 'administrador') !!} Administrador
                                                        {!! Form::radio('tipo', 'cliente',true) !!} CLiente
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::submit('Crear', array('class'=>'btn btn-primary')) !!}
                                                    </div>

                                                    {!! Form::close() !!}

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    @stop
