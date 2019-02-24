@extends('store.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS
			</h1>
		</div>
		<div class="page">

			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>

							<th>mas informacion</th>
							<th>Nombre del producto</th>
							<th>Referencia</th>
              <nav class="navbar navbar-default">

  <div class ="container-fluid">
    <div class = "navbar-header">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

    <a class="navbar-brand main-title" href="{{route('home')}}">Regresar a inicio</a>


  </div>



  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <p class="navbar-text"></p>
    <ul class="nav navbar-nav navbar-right">




      </ul>
    </div>

  </div>
</nav>
              <th>Tipo</th>


						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
							<tr>

								<td>
        	<a class="btn btn-info" href="{{ route('product-detail', $product->direccion) }}"><i class="fa fa-chevron-circle-right"></i></a>
                                </td>

								<td>{{ $product->nombre }}</td>
									<td>{{ $product->id }}</td>

                <td>{{ $product->tipo}}</td>

							</tr>
						@endforeach
					</tbody>
				</table>

			</div>

  <?php echo $products->render(); ?>
		</div>

	</div>

@stop
