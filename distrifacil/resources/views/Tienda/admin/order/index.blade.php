

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
                 VENTAS
            </h2>
        </div>

        <div class="page">

            <div class="table-responsive">
                @if(count($orders))
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Ver Detalle</th>

                            <th>Fecha</th>
                            <th>Cliente</th>

                            <th>Total</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <a
                                        href="#"
                                        class="btn btn-primary btn-detalle-pedido"
                                        data-id="{{ $order->id }}"
                                        data-path="{{ route('admin.order.getItems') }}"
                                        data-toggle="modal"
                                        data-target="#myModal"
                                        data-token="{{ csrf_token() }}"
                                    >
                                        <i class="fa fa-external-link"></i>
                                    </a>
                                </td>

                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->user->nombre }}</td>

                                <td>${{ number_format($order->subtotal + $order->shipping,3) }}</td>
                                <td>
                                    {!! Form::open(['route' => ['admin.order.destroy', $order->id]]) !!}
                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
      <h3><span class="label label-warning">No hay reporte de ventas :(</span></h3><hr>
    @endif
            </div>
            <hr>

            <?php echo $orders->render(); ?>

        </div>
    </div>

    @include('admin.partials.modal-detalle-pedido')

@stop
