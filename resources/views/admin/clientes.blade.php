@extends('layouts.admin')

@section('content')
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
                  <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col"><h5 class="card-title text-uppercase text-muted mb-0">Total <br>Registrados</h5><span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto"><div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">  <i class="ni ni-single-02"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col"><h5 class="card-title text-uppercase text-muted mb-0">Total <br>Reservas</h5><span class="h2 font-weight-bold mb-0">25,356</span>
                    </div>
                    <div class="col-auto"><div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">  <i class="fas fa-check"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col"><h5 class="card-title text-uppercase text-muted mb-0">Total <br>No Reserva</h5><span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto"><div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">  <i class="fas fa-window-close"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Clientes</h3>
              <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-info">Filtrar</a>
            </div>
            </div>

            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                 <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Sucursal</th>
                    <th scope="col">¿Reserva?</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th>Alejandro Monsanto</th>
                    <td>32889565265</td>
                    <td>cliente@cliente.com</td>
                    <td>66289</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Si</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                   <tr>
                    <th>Alejandro Monsanto</th>
                    <td>32889565265</td>
                    <td>cliente@cliente.com</td>
                    <td>66289</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">No</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    <td>32889565265</td>
                    <td>cliente@cliente.com</td>
                    <td>66289</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Si</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    <td>32889565265</td>
                    <td>cliente@cliente.com</td>
                    <td>66289</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">No</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    <td>32889565265</td>
                    <td>cliente@cliente.com</td>
                    <td>66289</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Si</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    <td>32889565265</td>
                    <td>cliente@cliente.com</td>
                    <td>66289</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Si</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    <td>32889565265</td>
                    <td>cliente@cliente.com</td>
                    <td>66289</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Si</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    <td>32889565265</td>
                    <td>cliente@cliente.com</td>
                    <td>66289</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Si</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
     </div>

@endsection