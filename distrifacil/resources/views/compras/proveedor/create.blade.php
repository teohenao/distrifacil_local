@extends('Tienda.store.template')
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
      <li><a href="#"></a></li>
      <li class="d">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
         {{ Auth::user()->name }}
     </a>
 </ul>
</div>
</nav>
</header>
<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li>
        <a href="#">
          <i class="fa fa"></i> <span>ENVIAR OFERTA</span>
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



<div class="content-wrapper">
  <div class="box-body">
    <div class="page"  style="text-align:center;">

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h1>Crear Nuevo Proveedor</h1>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
			{!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
    <div class="row">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
            </div>
    	</div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Dirección...">
            </div>
        </div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
    			<label>Documento</label>
    			<select name="tipo_documento" class="form-control">
                       <option value="NIT">NIT</option>
                       <option value="CC">CC</option>
    			</select>
    		</div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="num_documento">Número documento</label>
            	<input type="text" name="num_documento" value="{{old('num_documento')}}" class="form-control" placeholder="Número de Documento...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input type="text" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="Teléfono...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="descripcion">Email</label>
            	<input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email...">
            </div>
    	</div>

    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
    	</div>
    </div>   
			{!!Form::close()!!}		

@push ('scripts')
<script>
$('#liCompras').addClass("treeview active");
$('#liProveedores').addClass("active");
</script>
@endpush
@endsection