
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












<div class="container text-center">
	<div class="page-header">
	  <h1>{{ $product->nombre}}</h1>
    <div class="ro">
      <div class="page"  style="text-align:center;">
        <div class="product-block">
          <img src="{{ $product->imagen }}"width="400">
            <h4>sabor {{ $product->sabor }}</h4>
            <h4>{{ $product->descripcion }}</h4>
        </div>
        <h1>
          <span class="label label-success"> Precio: ${{ number_format($product->precio,3) }}</span>
        </h1><hr>


          <a class="btn btn-info" href="{{ route('home') }}"> REGRESAR A LA DESPENSA</a>
    <a class="btn btn-danger" href="{{ route('carrito-add', $product->direccion) }}">COMPRAR
          </a>
      </div>


        </div>
	</div>

		</div>

	</div><hr>

@stop
