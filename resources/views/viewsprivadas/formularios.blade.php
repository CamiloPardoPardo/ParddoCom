@extends('layouts.app')

@section('content')

<section class="content">
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        Los cambios no se enviaron, verifique los campos.
    </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registros</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/Nuevo-Registro" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Area</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_Area" value="{{ old('id_Area')}}">
                                    @foreach($Areas as $Area)
                                    <option value="{{$Area->id}}">{{$Area->Area}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Valor</label>
                                <input type="number" class="form-control" id="exampleInputPassword1" name="Valor" autocomplete="off" placeholder="Valor" value="{{ old('Valor')}}">
                            </div>
                            <div class="form-group">
                                <label>Observación</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="Observacion" autocomplete="off" placeholder="Observacion" value="{{ old('Observacion')}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

                <!-- Form Element sizes -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registrar Area</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/Nueva-Area" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="card-body">
                            <div class="form-group">
                                <label>Nueva Area</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="Area" autocomplete="off" placeholder="Nombre de la nueva area" value="{{ old('Area')}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Different Width</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder=".col-3">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder=".col-4">
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" placeholder=".col-5">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Input addon -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Input Addon</h3>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <h4>With icons</h4>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-check"></i></span>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-dollar-sign"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="checkbox">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><input type="radio"></span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.col-lg-6 -->
                        </div>
                        <!-- /.row -->

                        <h5 class="mt-4 mb-2">With buttons</h5>

                        <p>Large: <code>.input-group.input-group-lg</code></p>

                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="#">Action</a></li>
                                    <li class="dropdown-item"><a href="#">Another action</a></li>
                                    <li class="dropdown-item"><a href="#">Something else here</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item"><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control">
                        </div>
                        <!-- /input-group -->

                        <p>Normal</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-danger">Action</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control">
                        </div>
                        <!-- /input-group -->

                        <p>Small <code>.input-group.input-group-sm</code></p>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat">Go!</button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Horizontal Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Sign in</button>
                            <button type="submit" class="btn btn-default float-right">Cancel</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
                <!-- general form elements disabled -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Nuevo pedido</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/Nuevo-Pedido" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Poducto</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_Producto" value="{{ old('id_Producto')}}">
                                        @foreach($Productos as $Producto)
                                        <option value="{{$Producto->id}}">{{$Producto->Referencia}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Proovedor</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_Proovedor" value="{{ old('id_Proovedor')}}">
                                        @foreach($Proovedores as $Proovedor)
                                        <option value="{{$Proovedor->id}}">{{$Proovedor->Proovedor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cantidad</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" name="Cantidad" autocomplete="off" placeholder="Cantidad" value="{{ old('Cantidad')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Valor</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" name="Valor" autocomplete="off" placeholder="Valor" value="{{ old('Valor')}}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Nuevo producto</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/Nuevo-Producto" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="card-body">
                                <div class="form-group">
                                    <label>Codigo id</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="Codigo_id" autocomplete="off" placeholder="Codigo de barras" value="{{ old('Codigo_id')}}">
                                </div>
                                <div class="form-group">
                                    <label>Referencia</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="Referencia" autocomplete="off" placeholder="Referencia" value="{{ old('Referencia')}}">
                                </div>
                                <div class="form-group">
                                    <label>Marca</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="Marca" autocomplete="off" placeholder="Marca" value="{{ old('Marca')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Descripción</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" name="Descripcion" autocomplete="off" placeholder="Descripcion" value="{{ old('Descripcion')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Proovedor</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_Proovedor" value="{{ old('id_Proovedor')}}">
                                        @foreach($Proovedores as $Proovedor)
                                        <option value="{{$Proovedor->id}}">{{$Proovedor->Proovedor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>

                <!-- /.card -->
                <!-- general form elements disabled -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Nuevo proovedor</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/Nuevo-Proovedor" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Proovedor</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="Proovedor" autocomplete="off" placeholder="Proovedor" value="{{ old('Proovedor')}}">
                                </div>
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="Ciudad" autocomplete="off" placeholder="Ciudad" value="{{ old('Ciudad')}}">
                                </div>
                                <div class="form-group">
                                    <label>Nombre de quien atiende</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="Nombre" autocomplete="off" placeholder="Nombre" value="{{ old('Nombre')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Telefono</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" name="Telefono" autocomplete="off" placeholder="Telefono" value="{{ old('Telefono')}}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection