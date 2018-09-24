@extends('store.template')


@section('content')

			<input type="hidden" name="_method" value="PUT">

	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Detalle del pedido</h1>
		</div>

		<div class="page">
			<div class="table-responsive">
				<h3>Datos del usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td>{{ Auth::user()->nombre }}</td></tr>
					<tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
					<tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td>Dirección:</td><td>{{ Auth::user()->direccionr }}</td></tr>

				</table>
			</div>
			<div class="table-responsive">
				<h3>Datos del pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>

						<th>Producto</th>
						<th>Cantidad solicitada</th>
						<th>Precio</th>

						<th>Subtotal</th>

					</tr>
					@foreach($carrito as $item)
						<tr>


							<td>{{ $item->nombre }}</td>
							<td>{{ $item->quantity }}</td>
							<td>${{ number_format($item->precio,2) }}</td>
							<td>${{ number_format($item->precio * $item->quantity,2) }}</td>

						</tr>
					@endforeach
				</table><hr>
				
				
					
						<h3>Total: ${{ number_format($total, 2) }}</h3>
			
				<hr>
				<p>
					<a href="{{ route('carrito-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>

					<a href="{{ route('save-order')}}" class="btn btn-success">
						pagar  <i class="fa fa-chevron-circle-right"></i>
					</a>
				</p>
			</div>
		</div>
	</div>

@stop
{{-- $users = A\userpp::all()   ;    esto va en ruta      --}}
{{-- return view('welcome', compact('users'));     --}}
