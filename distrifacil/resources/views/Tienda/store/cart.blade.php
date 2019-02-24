
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
		  <h1>Productos solicitados</h1>
		</div>

		<div class="table-carrito">
      @if(count($carrito))


        <p>
      				<h1></i>DETALLES</h1><hr>
      			</p>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered ">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Producto</th>
							<th>sabor</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Disponibles</th>
							<th>Subtotal</th>
							<th>Quitar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($carrito as $item)
							<tr>
								<td><img src="{{ $item->imagen }}"></td>

								<td>{{ $item->nombre }}</td>
								<td>{{ $item->sabor }}</td>
								<td>${{ number_format($item->precio,3) }}</td>
								<td>
									<input
										type="number"
										min="1"
										max="{{ $item->cantidad }}"
										value="{{ $item->quantity }}"
										id="product_{{ $item->id }}"
									>
									<a
										href="#"
										class="btn btn-warning btn-update-item"
										data-href="{{ route('carrito-update', $item->direccion) }}"
										data-id = "{{ $item->id }}"
									>
										<i class="fa fa-refresh"> actualizar</i>
									</a>
								</td>
								  <td>{{number_format($item->cantidad - $item->quantity)}} pacas</td>
                <td>{{number_format($item->precio * $item->quantity,3)}}</td>
                <td>
                  <a href="{{route('carrito-delete', $item->direccion) }}" class = "btn btn-danger">
                    <i class = "fa fa-remove"> </i>
                  </a>
								</td>
							</tr>

						@endforeach
					</tbody>
				</table><hr>

				<h1>
					<span class="label label-success">
						Total Compra: ${{ number_format($total,3) }}
					</span>
				</h1><hr>


      </div>

    @else
      <h3><span class="label label-warning">No hay productos en el carrito :(</span></h3><hr>
    @endif


				<a href="{{ route('home') }}" class="btn btn-info">
					<i class="fa fa-chevron-circle-left"></i> Continuar compra
				</a>

				<a href="{{route('order-detail')}}" class="btn btn-success">
				 Efectuar compra <i class="fa fa-chevron-circle-right"></i>
				</a>

</div>
	</div>
@stop
