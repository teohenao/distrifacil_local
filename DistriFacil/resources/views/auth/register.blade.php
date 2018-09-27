@extends('store.template')
<body class="hold-transition skin-blue sidebar-collapse">

@section('content')
<div class="body">
	<header class="main-header">
		<a href="{{route('home')}}" class="logo">
			<span class="logo-mini"><b>DF</b></span>
			<span class="logo-lg"><b>DISTRI FACIL</b></span>
		</a>
		<nav class="navbar navbar-static-top" role="navigation">
			<span class="sr-only">Navegación</span>
		</a>
	</nav>
</header>
<div class="container text-center">
	@include('store.partials.errors')
	<!-- /. -->

	<div class="login-box">
		<div class="login-box-body">
			<div class="page">


				<form method="POST" action="/auth/register">
					{!! csrf_field() !!}
					<div class="form-group">
						<label for="tipod">Tipo de documento:</label>

						{!! Form::radio('tipod', 'documento', true) !!} documento
						{!! Form::radio('tipod', 'NIT') !!} NIT
					</div>

					<div class="form-group">
						<label for="identificacion">Identificacion</label>
						<input class="form-control" type="text" name="identificacion" value="{{ old('identificacion') }}">
					</div>

					<div class="form-group">
						<label for="nombre">Nombre completo</label>
						<input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
					</div>
					<div class="form-group">
						<label for="telefonor">Numero telefonico</label>
						<input class="form-control" type="text" name="telefonor" value="{{ old('telefonor') }}">
					</div>

					<div class="form-group">
						<label for="direccionr">Direccion comercial</label>
						<input class="form-control" type="text" name="direccionr" value="{{ old('direccionr') }}">
					</div>
					<div class="form-group">
						<label for="nombre_negocio">Nombre del negocio</label>
						<input class="form-control" type="text" name="nombre_negocio" value="{{ old('nombre_negocio') }}">



					</div>

					<div class="page">
						<div class="form-group">
							<label for="email">Correo</label>
							<input class="form-control" type="email" name="email" value="{{ old('email') }}">
						</div>
						<div class="form-group">
							<label for="user">Usuario</label>
							<input class="form-control" type="text" name="user" value="{{ old('user') }}">
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input class="form-control" type="password" name="password">
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Crear cuenta</button>
						</div>
					</div>
				</div>


			</form>
		</div>

	</div>
</div>


@stop
