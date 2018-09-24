@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> VENTAS
            </h1>
        </div>

        <div class="page">

            <div class="table-responsive">
                @if(count($orders))
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Ver Detalle</th>

                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Subtotal</th>
                            <th>Pago</th>
                            <th>Total</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <a
                                        href="#"
                                        class="btn btn-primary btn-detalle-pedido"
                                        data-id="{{ $order->id }}"
                                        data-path="{{ route('admin.order.getItems') }}"
                                        data-toggle="modal"
                                        data-target="#myModal"
                                        data-token="{{ csrf_token() }}"
                                    >
                                        <i class="fa fa-external-link"></i>
                                    </a>
                                </td>

                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->user->name . " " . $order->user->nombre }}</td>
                                <td>${{ number_format($order->subtotal,2) }}</td>
                                <td>{{ $order->pago }}</td>
                                <td>${{ number_format($order->subtotal + $order->shipping,2) }}</td>
                                <td>
                                    {!! Form::open(['route' => ['admin.order.destroy', $order->id]]) !!}
                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
      <h3><span class="label label-warning">No hay reporte de ventas :(</span></h3><hr>
    @endif
            </div>
            <hr>

            <?php echo $orders->render(); ?>

        </div>
    </div>

    @include('admin.partials.modal-detalle-pedido')

@stop
