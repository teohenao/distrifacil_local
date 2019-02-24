
@extends('Tienda.store.template')
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
          <li class="d">
            <a>
             {{ Auth::user()->name }}
           </a>
         </ul>
       </div>
     </nav>
   </header>
   @else
   <div class="body">
    <header class="main-header">
     <a class="logo">
       <span class="logo-mini"><b>DF</b></span>
       <span class="logo-lg"><b>DISTRI FACIL</b></span>
     </a>
     <nav class="navbar navbar-static-top" role="navigation">
       <span class="sr-only">Navegación</span>
     </a>
     <div class="navbar-custom-menu">
       <ul class="nav navbar-nav">
        <li>
         <a href="{{url('login')}}">
           <i class="fa fa"></i> <span>Iniciar Sesion</span>
         </a>
       </li>
     </ul>
   </div>
   </nav>
   </header>
@endif
@if(Auth::check())
<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <p></p><p><p></p>
         <li>
        <a href="#">
          <i class="fa fa"></i> <span>ENVIAR OFERTA</span>
        </a>
      </li>
       <li>
        <a href="{{url('/dashboard')}}">
          <i class="fa fa"></i> <span>INVENTARIO</span>
        </a>
      </li>

        <li>
        <a href="{{url('almacen/articulo')}}">
          <i class="fa fa"></i> <span>PRODUCTOS</span>
        </a>
      </li>
          <li>
        <a href="{{url('almacen/categoria')}}">
          <i class="fa fa"></i> <span>CATEGORIAS</span>
        </a>
      </li>
         <li>
        <a href="{{url('compras/ingreso')}}">
          <i class="fa fa"></i> <span>INGRESOS</span>
        </a>
      </li>
        <li>
        <a href="{{url('compras/proveedor')}}">
          <i class="fa fa"></i> <span>PROVEEDORES</span>
        </a>
      </li>
        <li>
        <a href="{{url('ventas/venta')}}">
          <i class="fa fa"></i> <span>VENTAS</span>
        </a>
      </li>
      <li>
        <a href="{{url('ventas/cliente')}}">
          <i class="fa fa"></i> <span>CLIENTES</span>
        </a>
      </li>
      <li>
        <a href="{{url('seguridad/usuario')}}">
          <i class="fa fa"></i> <span>ADMINISTRADORES</span>
        </a>
      </li>
      <li>
        <a href="{{url('/logout')}}">
          <i class="fa fa"></i> <span>FINALIZAR SESION</span>
        </a>
      </li>
    </ul>
  </section>
</aside>
@else
@endif


<div class="content-wrapper">
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
<div class="container text-center">
 {!!Form::open(['route'=>'store.search', 'method' => 'get', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
 <div class="form-group " >
  <div class="input-group " >
    <input type="text" class="form-control" name="searchText" placeholder="Buscar producto" value="{{$searchText}}">
    <span class="input-group-btn">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </span>
  </div>
</div>

{{Form::close()}}
    <div class="box-body">
     <a href="mail"><button class="btn btn-success">Solicitar Visita</button></a>

     <div class="row">
      <div class="col-md-12">
       <div id="products">
        @foreach($articulos as $art)
        @if ($art->estado == 'Activo')
        <div class="product white-panel"  >

          <h3>{{ $art->nombre }}</h3>
          <img src = "{{asset('imagenes/articulos/'.$art->imagen)}}" width="200"/>
          <h3><span class="label label-success">{{$art->descripcion}}</span></h3>
          <div class="product-info panel">


          </p>
        </div>
      </div>
       @endif
      @endforeach
    </div>
   {!!$articulos->render()!!}
  </div>
</div>

@endsection
