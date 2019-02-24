

@extends('store.template')
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
      <li><a href="{{route('carrito-show')}}"></a></li>
      <li class="d">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
         {{ Auth::user()->nombre }}
     </a>
 </ul>
</div>
</nav>
</header>


<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
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



<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">







        <div class="container text-center">


        </div>



    </div>

    <div class="page"  style="text-align:center;">

        <div class = "form-group">
            {!!Form::open(['route'=>'store.sea', 'method' => 'get', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
            {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'busqueda de usuario']) !!}

            <button type = "submit" class = "btn btn-info"><i class="fa fa-search"></i></button>
            {!! Form::close()!!}
            <p> <h2>
              <a href="{{ route('admin.user.create') }}" class="btn btn-info">
                <i class="fa fa-plus-circle"></i>   USUARIOS
            </a>

        </h2></p>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead align="text-center">
                    <tr>
                        <th>Nombre</th>
                        <th>negocio</th>
                        <th>direccion</th>
                        <th>celular</th>
                        <th>Editar</th>
                        <th>Eliminar</th>

                    </tr>
                </thead>
                <tbody body>
                    @foreach($users as $user)
                    <tr>
                    <td align="left">{{ $user->nombre }}</td>
                    <td align="left">{{ $user->nombre_negocio }}</td>
                    <td align="left">{{ $user->direccionr }}</td>
                    <td align="left">{{ $user->telefonor }}</td>
                    <td align="left">
                      <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-primary">
                          <i class="fa fa-pencil-square-o"></i>
                      </a>
                  </td>
                    <td align="left">
                        {!! Form::open(['route' => ['admin.user.destroy', $user]]) !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                         <i class="fa fa-trash-o"></i>
                     </button>
                     {!! Form::close() !!}
                 </td>

             </tr>
             @endforeach
         </tbody>
     </table>



     <hr>

     <?php echo $users->render(); ?>

 </div>

</div>
@endsection
