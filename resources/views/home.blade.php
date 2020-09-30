@extends('layouts.app')

@section('content')

<section class="content">
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>$ {{ number_format($VentasPlataformaHoy, 0 ) }}</h3>

                <p>Ventas plataforma</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>$ 53.000<sup style="font-size: 20px"></sup></h3>

                <p>Ventas Negocio</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>$ 14.000</h3>

                <p>Mano de obra</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>$ 6.500</h3>

                <p>Gastos</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Negocio</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Area</th>
                      <th>Valor</th>
                      <th style="width: 40px">%</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Base caja</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">500</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Ventas</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Mano de obra</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Gastos</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Ganancias</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Total</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Plataforma</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Area</th>
                      <th>Valor</th>
                      <th style="width: 40px">%</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Superpagos</td>
                      <td>
                          <h4><b>$ </b>{{ number_format($Superpagos, 0 ) }}</h4>
                      </td>
                      <td><span class="badge bg-primary">{{ number_format($PorSuperpagos, 0 ) }} %</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Recargas</td>
                      <td>
                          <h4><b>$ </b>{{ number_format($Recargas, 0 ) }}</h4>
                      </td>
                      <td><span class="badge bg-primary">{{ number_format($PorRecargas, 0 ) }} %</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Efectivo</td>
                      <td>
                          <h4><b>$ </b>{{ number_format($EfectivoPlataforma, 0 ) }}</h4>
                      </td>
                      <td><span class="badge bg-primary">{{ number_format($PorEfectivoPlataforma, 0 ) }} %</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Ganancias</td>
                      <td>
                          <h4><b>$ </b>{{ number_format($GananciaPlataforma, 0 ) }}</h4>
                      </td>
                      <td><span class="badge bg-primary">{{ number_format($PorGananciaPlataforma, 0 ) }} %</span></td>              
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection
