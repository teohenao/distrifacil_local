<nav class="navbar navbar-default">
  <div class ="container-fluid">
    <div class = "navbar-header">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

    <a class="navbar-brand main-title" href="{{route('home')}}">TiMe TeAm</a>




  </div>


  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <p class="navbar-text"></p>
    <ul class="nav navbar-nav navbar-right">

<li><a href="{{ route('admin.product.index') }}">Productos</a></li>
<li><a href="{{ route('admin.order.index') }}">Pedidos</a></li>
<li><a href="{{ route('admin.user.index') }}">Usuarios</a></li>

      @include('store.partials.menu-user')
      </ul>
    </div>

  </div>
</nav>
