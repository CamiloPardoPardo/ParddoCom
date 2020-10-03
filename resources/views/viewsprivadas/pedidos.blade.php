@extends('layouts.app')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de pedidos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Provedor</th>
                                <th>Valor y cantidad</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Pedidos as $Pedido)
                            <tr>
                                <td>{{$Pedido->Producto->Referencia}}</td>
                                <td>{{$Pedido->Proovedor->Proovedor}}</td>
                                <td><b>Cantidad:</b>{{$Pedido->Cantidad}} <br> <b>Valor $</b>{{$Pedido->Valor}}</td>
                                <td>
                                    <h4>{{$Pedido->Estado}}</h4>
                                    <div>
                                        <a href="/Pedido-Confirmado/{{$Pedido->id}}"><button type="button" class="btn btn-primary"><i class="fas fa-dollar-sign"></i></button></a>
                                        <a href="/Pedido-Enviado/{{$Pedido->id}}"><button type="button" class="btn btn-info"><i class="fas fa-truck"></i></button></a>
                                        <a href=""><button type="button" class="btn btn-success" data-toggle="modal" data-target="#Recibir-{{$Pedido->id}}"><i class="fas fa-check-circle"></i></button></a>
                                        <a href="/Pedido-Eliminado/{{$Pedido->id}}"><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<!-- Button trigger modal -->

<!-- Modal -->
@foreach($Pedidos as $Pedido)
<div class="modal fade" id="Recibir-{{$Pedido->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/Pedido-Recibido/{{$Pedido->id}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Precio de venta por unidad:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="PrecioVenta" autocomplete="off" placeholder="Precio de venta" value="{{ old('PrecioVenta')}}">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>@endforeach

@endsection