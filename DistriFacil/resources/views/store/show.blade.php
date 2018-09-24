@extends('store.template')
@section('content')


<div class="container text-center">
	<div class="page-header">
	  <h1><i class="fa fa-shopping-cart"></i> Detalle del producto</h1>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $product->imagen }}"width="400">
			</div>
		</div>
		<div class="col-md-2">
			<div class="product-block">
        <h4>referencia:<h5>{{ $product->id }}</h5></h4>
			</div>
			</div>
			<div class="col-md-2">
			<div class="product-block">
        <h4>producto tipo: <h5>{{ $product->tipo}}</h5></h4>
			</div>
			</div>
			<div class="col-md-2">
			<div class="product-block">
        <h4>nombre: <h5>{{ $product->nombre}}</h5></h4>
			</div>
			</div>
			<h3>dimensiones del producto:</h3>
			<div class="col-md-2">
			<div class="product-block">
        <h4>alto:<h5>{{ $product->alto }}cm</h5></h4>
			</div>
			</div>
			<div class="col-md-2">
			<div class="product-block">
        <h4>ancho:<h5>{{ $product->ancho }}cm</h5></h4>
			</div>
			</div>
			<div class="col-md-2">
			<div class="product-block">
        <h4>profundidad:<h5>{{ $product->profundidad }}cm</h5></h4>
			</div>
			</div>
			<div class="col-md-2">
			<div class="product-block">
        <h4>color:<h5>{{ $product->color }}</h5></h4>
			</div>
			</div>
			<div class="col-md-2">
			<div class="product-block">
        <h4>peso:<h5>{{ $product->peso }}gr</h5></h4>
			</div>
			</div>
			<div class="col-md-2">
				<div class="product-block">
					<h4>material<h5>{{$product->material}}</h5></h4>
			</div>
			</div><hr>
			
			<h3><i descripcion del producto:</h3>
<h3>descripcion del producto:</h3>
			<div class="col-md-6">
			<div class="product-block panel">
				<h3> </h3>
				<h5>{{ $product->descripcion }}</h5>
			</div>
			</div>
				<h1>
					<span class="label label-success"> Precio: ${{ number_format($product->precio,2) }}</span>
				</h1><hr>

					
					<a class="btn btn-info" href="{{ route('home') }}"> Regresar A Catalogo De Productos</a>
<a class="btn btn-danger" href="{{ route('carrito-add', $product->direccion) }}">agregar<i class="fa fa-cart-plus"></i>
					</a>
			</div>
		</div>
	</div><hr>

@stop
