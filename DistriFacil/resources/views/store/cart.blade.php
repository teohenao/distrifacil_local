@extends('store.template')
@section('content')

	<div class="container text-center">
		<div class="page-header">
		  <h1><i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
		</div>

		<div class="table-carrito">
      @if(count($carrito))


        <p>
      				<h3></i> Detalle Productos Agregados</h3><hr>
      			</p>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered ">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Tipo</th>
							<th>Producto</th>
							<th>Color</th>
							<th>Material</th>
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
								<td>{{ $item->tipo }}</td>
								<td>{{ $item->nombre }}</td>
								<td>{{ $item->color }}</td>
								<td>{{ $item->material }}</td>
								<td>${{ number_format($item->precio,2) }}</td>
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
										<i class="fa fa-refresh"></i>
									</a>
								</td>
								  <td>{{number_format($item->cantidad - $item->quantity)}}</td>
                <td>{{number_format($item->precio * $item->quantity,2)}}</td>
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
						Total Compra: ${{ number_format($total,2) }}
					</span>
				</h1><hr>
				<h2><tr>elegir entidad de pago:</tr></h2>
				<div class="form-group">
						<label for="pago"></label>

						{!! Form::radio('pago', 'paypal', true) !!} paypal
						{!! Form::radio('pago', 'mastercard') !!} mastercard
						{!! Form::radio('pago', 'ahorros') !!} ahorros
						{!! Form::radio('pago', 'credito') !!} credito
				</div><hr>

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
