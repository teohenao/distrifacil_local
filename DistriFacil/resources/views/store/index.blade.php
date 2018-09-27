
@extends('store.template')
<body class="hold-transition skin-blue sidebar-collapse">
@section('content')
 <div class="wrapper">
     @if(Auth::check())
     <header class="main-header">
      <a href="{{route('home')}}" class="logo">
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
   <div class="body">
    <header class="main-header">
     <a href="{{route('home')}}" class="logo">
       <span class="logo-mini"><b>DF</b></span>
       <span class="logo-lg"><b>DISTRI FACIL</b></span>
     </a>
     <nav class="navbar navbar-static-top" role="navigation">
       <span class="sr-only">Navegación</span>
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

        <!--Contenido-->
<div class="container text-center">

	{!!Form::open(['route'=>'store.search', 'method' => 'get', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
  <div class = "form-group">
    {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'buscar en bodega']) !!}
     </div>
    <button type = "submit" class = "btn btn-info">buscar</button>
    {!! Form::close()!!}

    <div class="box-body">
     <div class="row">
      <div class="col-md-12">
       <div id="products">
        @foreach($products as $product)
        <div class="product white-panel"  >

          <h3>{{ $product->nombre }}</h3>
          <a href = "{{ route('product-detail', $product->direccion) }}"> <img src = "{{ $product->imagen }}" width="200"/> </a>
          <div class="product-info panel">

          </p>
        </div>
      </div>

      @endforeach
    </div>
    {!!$products->render()!!}
  </div>
</div>

@endsection
