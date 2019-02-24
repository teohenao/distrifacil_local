
@extends('store.template')
 <body class="hold-transition skin-blue sidebar-mini">
@section('content')
 <div class="wrapper">
     @if(Auth::check())
     <header class="main-header">
      <a href="{{route('home')}}" class="logo">
        <span class="logo-mini"><b>DF</b></span>
        <span class="logo-lg"><b>DISTRI FACIL</b></span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Navegación</span>
        </a>
      </form>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
           <li><a href="{{route('carrito-show')}}"><i class="fa fa-shopping-cart"></i></a></li>
          <li class="d">
            <a>
             {{ Auth::user()->nombre }}
           </a>
         </ul>
       </div>
     </nav>
   </header>
   @else
   <header class="main-header">
    <a href="{{route('home')}}" class="logo">
      <span class="logo-mini"><b>DF</b></span>
      <span class="logo-lg"><b>DISTRI FACIL</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
      </a>
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
         <li>
          <a href="{{ route('login-get') }}">
            <i class="fa fa"></i> <span>Iniciar Sesion</span>

          </a>
        </li>
      </ul>

    </div>
  </nav>
</header>
@endif
@if(Auth::check())
@if (auth()->user()->tipo == 'administrador')
<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <p></p><p><p></p>
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

@else
<aside class="main-sidebar">
  <section class="sidebar">

    <ul class="sidebar-menu">
      <li>
        <a href="#">
          <i class="fa fa"></i> <span>SOLICITAR VISITA</span>

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

@endif

@else

<aside class="main-sidebar">
  <section class="sidebar">
  </section>
</aside>


@endif
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
               Editar    <i class="fa fa-user"></i> {{ $user->nombre }} <small></small>
            </h2>
        </div>

        <div class="row">
             <div class="col-md-offset-3 col-md-6">
                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    {!! Form::model($user, array('route' => array('admin.user.update', $user))) !!}
                    <input type="hidden" name="_method" value="PUT">


                    <div class="form-group">
                        <label for="identificacion">identificacion:*</label>

                        {!!
                            Form::text(
                                'identificacion',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Ingresa identificacion ...',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                )
                            )
                        !!}
                    </div>
                        <div class="form-group">
                            <label for="nombre">Nombre completo:*</label>

                            {!!
                                Form::text(
                                    'nombre',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre  ...',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="telefonor">telefono residencia:*</label>

                            {!!
                                Form::text(
                                    'telefonor',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el telefono residencia ...',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="nombre_negocio">nombre negocio:*</label>

                            {!!
                                Form::text(
                                    'nombre_negocio',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el negocio ..',
                                        'autofocus' => 'autofocus',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="direccionr">Direccion:*</label>

                            {!!
                                Form::text(
                                    'direccionr',
                                    null,
                                    array(
                                      'class'=>'form-control',
                                      'placeholder' => 'Ingresa la direccion...',
                                      'autofocus' => 'autofocus',
                                      'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                          <div class="form-group">
                            <label for="email">Correo:*</label>

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
                            <label for="user">Usuario:*</label>

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
                            <label for="password">contraseña:</label>

                            {!!
                                Form::password(
                                    'password',
                                    array(
                                        'class'=>'form-control',

                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirmar contraseña:</label>

                            {!!
                                Form::password(
                                    'password_confirmation',
                                    array(
                                        'class'=>'form-control',

                                    )
                                )
                            !!}
                        </div>







                        <div class="form-group">
                            {!! Form::submit('Actualizar', array('class'=>'btn btn-success')) !!}
                            <a href="{{ route('admin.user.index') }}" class="btn btn-default">Cancelar</a>
                        </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>

    </div>

@endsection
