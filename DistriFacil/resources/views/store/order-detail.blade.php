
@extends('store.template')
<body class="hold-transition skin-blue sidebar-collapse">

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









			<input type="hidden" name="_method" value="PUT">

	<div class="container text-center">


		<div class="page">
			<div class="table-responsive">
				<h3>Datos del usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td>{{ Auth::user()->nombre }}</td></tr>
					<tr><td>Negocio:</td><td>{{ Auth::user()->nombre_negocio }}</td></tr>
					<tr><td>telefono:</td><td>{{ Auth::user()->telefonor }}</td></tr>
					<tr><td>Dirección:</td><td>{{ Auth::user()->direccionr }}</td></tr>

				</table>
			</div>
			<div class="table-responsive">
				<h3>Datos del pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>

						<th>Producto</th>
						<th>sabor</th>
						<th>Cantidad solicitada</th>
						<th>Precio</th>
						<th>Subtotal</th>

					</tr>
					@foreach($carrito as $item)
						<tr>


							<td>{{ $item->nombre }}</td>
							<td>{{ $item->sabor}}</td>
							<td>{{ $item->quantity }}</td>
							<td>${{ number_format($item->precio,3) }}</td>
							<td>${{ number_format($item->precio * $item->quantity,3) }}</td>

						</tr>
					@endforeach
				</table><hr>



						<h3>Total: ${{ number_format($total, 3) }}</h3>

				<hr>
				<p>
					<a href="{{ route('carrito-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> REGRESAR
					</a>

					<a href="{{ route('save-order')}}" class="btn btn-success">
						REALIZAR PEDIDO  <i class="fa fa-chevron-circle-right"></i>
					</a>
				</p>
			</div>
		</div>
	</div>

@stop
{{-- $users = A\userpp::all()   ;    esto va en ruta      --}}
{{-- return view('welcome', compact('users'));     --}}
