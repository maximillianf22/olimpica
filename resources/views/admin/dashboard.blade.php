@extends('layouts.admin')

@section('content')

    <!-- Header -->
    <div class="header pb-6" style="background-image: linear-gradient(to right bottom, #df0008, #e20001, #c60002, #ab0002, #900000);">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Sistema</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Principal</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Reservas</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="fas fa-check"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.205</span>
                    <span class="text-nowrap">Realizadas hoy</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Clientes</h5>
                      <span class="h2 font-weight-bold mb-0">25,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 876</span>
                    <span class="text-nowrap">Registrados hoy</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sucursales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-archive-2"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 19</span>
                    <span class="text-nowrap">Registradas hoy</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Comercios</h5>
                      <span class="h2 font-weight-bold mb-0">850</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-shop"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10</span>
                    <span class="text-nowrap">Registrados hoy</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Vision General</h6>
                  <h5 class="h3 text-white mb-0">Reservas </h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="N" data-suffix="k">
                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Mes</span>
                        <span class="d-md-none">M</span>
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="N" data-suffix="k">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                        <span class="d-none d-md-block">Semana</span>
                        <span class="d-md-none">S</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Vision General</h6>
                  <h5 class="h3 mb-0">Reservas</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <canvas id="chart-bars" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Sucursales</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Ver Comercios</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Codigo Sucursal</th>
                    <th scope="col">Encargado</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Clientes</th>
                    <th scope="col">Reservas Activas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      695
                    </th>
                    <td>
                      Daniel Targaryen
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Calle Nº 156 Carrera 65 - 84
                    </td>
                    <td>
                      2.522
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 875
                    </td>
                  </tr>
                   <tr>
                    <th scope="row">
                      69596
                    </th>
                    <td>
                      Pedro Casas
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Calle Nº 156 Carrera 65 - 84
                    </td>
                    <td>
                      2.522
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 875
                    </td>
                  </tr>
                   <tr>
                    <th scope="row">
                      69596
                    </th>
                    <td>
                      Armando Perez
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Calle Nº 156 Carrera 65 - 84
                    </td>
                    <td>
                      2.522
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 875
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      69596
                    </th>
                    <td>
                      Annalise Bloom
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Calle Nº 156 Carrera 65 - 84
                    </td>
                    <td>
                      2.522
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 875
                    </td>
                  </tr>
                   <tr>
                    <th scope="row">
                      69596
                    </th>
                    <td>
                      Antonio Banderas
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Barranquilla
                    </td>
                    <td>
                      Calle Nº 156 Carrera 65 - 84
                    </td>
                    <td>
                      2.522
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 875
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endsection