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
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h1>Listado de Proveedores </h1>
		@include('compras.proveedor.search')
	</div>
  <a href="proveedor/create"><button class="btn btn-success">Agregar Proveedor</button></a> <a href="{{url('reporteproveedores')}}" target="_blank"><button class="btn btn-info">Reporte De Proveedores</button></a>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Tipo Doc.</th>
					<th>NIC ó Cc</th>
					<th>Teléfono</th>
					<th>Email</th>
					<th>Editar</th>
          <th>Eliminar</th>
				</thead>
               @foreach ($personas as $per)
				<tr>
					<td>{{ $per->nombre}}</td>
					<td>{{ $per->tipo_documento}}</td>
					<td>{{ $per->num_documento}}</td>
					<td>{{ $per->telefono}}</td>
					<td>{{ $per->email}}</td>
					<td>
						<a href="{{URL::action('ProveedorController@edit',$per->idpersona)}}"><button class="btn btn-info">Editar</button></a></td><td>
                         <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('compras.proveedor.modal')
				@endforeach
			</table>
		</div>
		{{$personas->render()}}
	</div>
</div>
@push ('scripts')
<script>
$('#liCompras').addClass("treeview active");
$('#liProveedores').addClass("active");
</script>
@endpush
@endsection