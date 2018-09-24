@if(Auth::check())
	<li><a href="{{route('carrito-show')}}"><i class="fa fa-shopping-cart"></i></a></li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
		</a>
		@if (auth()->user()->tipo == 'administrador')
			<ul class="dropdown-menu" role="menu">
				<li><a href="{{ route('admin.user.edit', Auth::user()) }}"('class' =>editar perfil</a></li>
				<li><a href="{{ route('admin.product.index') }}"('class' => administrar productos</a></li>
				<li><a href="{{ route('admin.order.index') }}"('class' => reporte de ventas</a></li>
				<li><a href="{{ route('admin.user.index') }}"('class' => eliminar usuarios</a></li>
				<li><a href="{{ route('logout') }}">Finalizar sesion</a></li>
			</ul>
		@else
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ route('admin.user.edit', Auth::user()) }}"('class' =>editar perfil</a></li>
			<li><a href="{{ route('logout') }}">Finalizar sesion</a></li>
		</ul>
	</li>
		@endif
@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user">     ingresar</i> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ route('login-get') }}">Iniciar sesion</a></li>
			<li><a href="{{ route('register-get') }}">Registrarse</a></li>
		</ul>
	</li>
@endif
