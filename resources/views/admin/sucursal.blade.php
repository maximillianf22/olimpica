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
                  <li class="breadcrumb-item"><a href="#">Mi Sucursal</a></li>
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
                    <div class="col"><h5 class="card-title text-uppercase text-muted mb-0">Total <br> Clientes</h5><span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">  <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.205</span>
                    <span class="text-nowrap">Rehistrados hoy</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col"><h5 class="card-title text-uppercase text-muted mb-0">Total <br>Activas</h5><span class="h2 font-weight-bold mb-0">25,356</span>
                    </div>
                    <div class="col-auto"><div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">  <i class="fas fa-check"></i></div>
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
                    <div class="col"><h5 class="card-title text-uppercase text-muted mb-0">Total <br>Canceladas</h5><span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto"><div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">  <i class="fas fa-window-close"></i></div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 19</span>
                    <span class="text-nowrap">Canceladas hoy</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col"><h5 class="card-title text-uppercase text-muted mb-0">Total <br>Caducadas</h5><span class="h2 font-weight-bold mb-0">850</span>
                    </div>
                    <div class="col-auto"><div class="icon icon-shape bg-gradient-gray text-white rounded-circle shadow">  <i class="fas fa-clock"></i></div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10</span>
                    <span class="text-nowrap">Caducadas hoy</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-md-8">
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
                    <th scope="col">Correo</th>
                    <th scope="col">Estado de Reserva</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th>Alejandro Monsanto</th>
                    
                    <td>cliente@cliente.com</td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Activa</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Cambio de Estado</a>
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    
                    <td>cliente@cliente.com</td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Activa</span>
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Cambio de Estado</a>
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                   <tr>
                    <th>Alejandro Monsanto</th>
                    
                    <td>cliente@cliente.com</td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-dark"></i>
                        <span class="status">Caducada</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Cambio de Estado</a>
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    
                    <td>cliente@cliente.com</td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Activa</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Cambio de Estado</a>
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    
                    <td>cliente@cliente.com</td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">Cancelada</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Cambio de Estado</a>
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    
                    <td>cliente@cliente.com</td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Activa</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Cambio de Estado</a>
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    
                    <td>cliente@cliente.com</td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Activa</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Cambio de Estado</a>
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    
                    <td>cliente@cliente.com</td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Activa</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Cambio de Estado</a>
                          <a class="dropdown-item" href="#">Eliminar</a>
                          <a class="dropdown-item" href="#">Enviar Mensaje</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alejandro Monsanto</th>
                    
                    <td>cliente@cliente.com</td>
                    
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Activa</span>
                      </span>
                    </td>
                    <td>
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Cambio de Estado</a>
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
        <div class="col-md-4">
            <div id="map_p" class="map-canvas bg-white" data-lat="40.748817" data-lng="-73.985428" style="height: 300px;"></div><br>

            <script src="{{ asset('js/app.js') }}"></script>

              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&callback=initMap"
            async defer>
      </script>
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
 </div>
<div class="container">
  <div class="row justify-content-center">
      <div class="card">
        <div class="card-header bg-transparent">
          <h3 class="mb-0">Bloques de Horas</h3>
        </div>
        <div class="card-body">
          <div class="row icon-examples">
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>8:00am - 9:00am</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>9:00am - 10:00am</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>10:00am - 11:00am</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>11:00am - 12:00am</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>12:00am - 1:00pm</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>1:00pm - 2:00pm</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>2:00pm - 3:00pm</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>3:00pm - 4:00pm</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>4:00pm - 5:00pm</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>5:00pm - 6:00pm</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>6:00pm - 7:00pm</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 border">
              <button class="btn-icon-clipboard" type="button"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <div>
                  <i class="fas fa-clock"></i>
                  <span>7:00pm - 8:00pm</span>
                </div>
              </button>
              <div class="card container"><p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                  <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                  </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>


@endsection