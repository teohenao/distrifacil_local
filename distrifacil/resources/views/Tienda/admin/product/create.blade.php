

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
	   agregar nuevo producto
				 <small></small>
			</h2>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    {!! Form::open(['route'=>'admin.product.store']) !!}
										<div class="form-group">
												<label for="nombre">Nombre:</label>
												{!!
														Form::text(
																'nombre',
																null,
																array(
																		'class'=>'form-control',
																		'placeholder' => 'Ingresa el nombre...',
																		'autofocus' => 'autofocus'
																)
														)
												!!}
										</div>
										<div class="form-group">
												<label for="cantidad">Cantidad:</label>
												{!!
														Form::text(
																'cantidad',
																null,
																array(
																		'class'=>'form-control',
																		'placeholder' => 'Ingresa el nombre...',
																		'autofocus' => 'autofocus'
																)
														)
												!!}
										</div>
										<div class="form-group">
												<label for="tipo">Tipo:</label>
												{!!
														Form::text(
																'tipo',
																null,
																array(
																		'class'=>'form-control',
																		'placeholder' => 'Ingresa el nombre...',
																		'autofocus' => 'autofocus'
																)
														)
												!!}
										</div>

												<div class="form-group">
														<label for="sabor">sabor:</label>
														{!!
																Form::text(
																		'sabor',
																		null,
																		array(
																				'class'=>'form-control',
																				'placeholder' => 'Ingresa el sabor...',
																				'autofocus' => 'autofocus'
																		)
																)
														!!}
												</div>
												<div class="form-group">
														<label for="descripcion">descripcion:</label>
														{!!
																Form::text(
																		'descripcion',
																		null,
																		array(
																				'class'=>'form-control',
																				'placeholder' => 'Ingresa el nombre...',
																				'autofocus' => 'autofocus'
																		)
																)
														!!}
												</div>
									
												<div class="form-group">
														<label for="precio">precio paca:</label>
														{!!
																Form::text(
																		'precio',
																		null,
																		array(
																				'class'=>'form-control',
																				'placeholder' => 'Ingresa el nombre...',
																				'autofocus' => 'autofocus'
																		)
																)
														!!}
												</div>

                        <div class="form-group">
                            <label for="imagen">Imagen:</label>
                            {!!
                                Form::text(
                                    'imagen',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa la url de la imagen...',
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('admin.product.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>


	</div>

@endsection
