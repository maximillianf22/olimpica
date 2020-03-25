<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Olimpica</title>
      <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/moment/min/moment.min.js') }}"></script>

  <script src="{{ asset('assets/vendor/fullcalendar/dist/fullcalendar.min.js') }}"></script>

  <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/dist/fullcalendar.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" type="text/css">


</head>

<body>
  <!-- Sidenav -->
<nav class="navbar navbar-expand-lg navbar-light p-0 mb-2 d-block d-sm-block d-md-none">
<a class="navbar-brand p-0" href="#">
<div class="col-8 align-items-center text-center">
    <img src="{{asset('assets/img/brand/blue.png')}}" width="150px" class="navbar-brand-img p-1 mt-2" alt="...">
</div>
  </a>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarText">
      <ul class="navbar-nav ml-auto p-3 border-primary border-bottom">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard">
            <i class="ni ni-tv-2 text-primary"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link active" href="sucursal">
            <i class="fas fa-home text-success"></i>
            <span class="nav-link-text">Mi Sucursal</span>
          </a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link" href="sucursales">
            <i class="ni ni-archive-2 text-orange"></i>
            <span class="nav-link-text">Sucursales</span>
          </a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link" href="reservas">
            <i class="fas fa-check text-danger"></i>
            <span class="nav-link-text">Reservas</span>
          </a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link" href="clientes">
            <i class="ni ni-single-02 text-primary"></i>
            <span class="nav-link-text">Clientes</span>
          </a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link" href="agenda">
            <i class="ni ni-calendar-grid-58 text-default"></i>
            <span class="nav-link-text">Agenda</span>
          </a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link" href="horarios">
            <i class="ni ni-time-alarm text-info"></i>
            <span class="nav-link-text">Horarios</span>
          </a>
        </li>
      </ul>
  </div>
</nav>
  <nav class="sidenav navbar navbar-vertical  fluid fixed-left  navbar-expand-xs d-none d-sm-none d-md-block navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <li class="nav-item">
              <a class="nav-link active" href="sucursal">
                <i class="fas fa-home text-success"></i>
                <span class="nav-link-text">Mi Sucursal</span>
              </a>
            </li>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
            <li class="nav-item">
              <a class="nav-link" href="sucursales">
                <i class="ni ni-archive-2 text-orange"></i>
                <span class="nav-link-text">Sucursales</span>
              </a>
            </li>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
            <li class="nav-item">
              <a class="nav-link" href="reservas">
                <i class="fas fa-check text-danger"></i>
                <span class="nav-link-text">Reservas</span>
              </a>
            </li>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
            <li class="nav-item">
              <a class="nav-link" href="clientes">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">Clientes</span>
              </a>
            </li>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Divider -->
            <li class="nav-item">
              <a class="nav-link" href="agenda">
                <i class="ni ni-calendar-grid-58 text-default"></i>
                <span class="nav-link-text">Agenda</span>
              </a>
            </li>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
            <li class="nav-item">
              <a class="nav-link" href="horarios">
                <i class="ni ni-time-alarm text-info"></i>
                <span class="nav-link-text">Horarios</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom" style="background-image: linear-gradient(to right bottom, #005cbb, #1600e2, #1d00c6, #2000aa, #1f0090);">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Buscar" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-toggle="collapse" data-target="#navbarText">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">13</strong> notificaciones.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-1.jpg')}}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Jairo Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 10 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Reserva en la Sucursal 351 a las 11:30am Cancelada</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-2.jpg')}}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Daniel Targaryen</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 40 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Reserva en la Sucursal 361 a las 9:30am Activa</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-3.jpg')}}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Jacke Snipper</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 50 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Reserva en la Sucursal 5119 a las 5:00pm Activa</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg')}}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Analisse Betania</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 8 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Reserva en la Sucursal 351 a las 1:30pm Caducada</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-5.jpg')}}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Santiago Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 18 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Reserva en la Sucursal 364654 a las 11:30am Caducada</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="notificaciones" class="dropdown-item text-center text-primary font-weight-bold py-3">Ver todas las Notificaciones</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="email" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="reportes" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reportes</small>
                  </a>
                  <a href="mapas" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-single-02"></i>
                    </span>
                    <small>Mapas</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg')}}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Bienvenido</h6>
                </div>
                <a href="perfil" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Mi perfil</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Mi Sucursal</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Soprte</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Cerrar Sesion</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<div class="header pb-6" style="background-image: linear-gradient(to right bottom, #df0008, #e20001, #c60002, #ab0002, #900000);">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-8 col-8">
              <h6 class="h2 text-white d-inline-block mb-0">Sistema</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sucursales</li>
                </ol>
              </nav>
            </div>
          </div>
          </div>
      <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body" style="background-image: linear-gradient(to right bottom, #005cbb, #1600e2, #1d00c6, #2000aa, #1f0090);">
              <ul class="nav justify-content-center">
            <li>
                <select class="form-control mr-2 selectCity" name="" id="">
                  <option selected disabled value="">Departamento</option>
                  <option data-lat="11.0041072" data-long="-74.8069813" value="">Atlantico</option>
              </select>
              </li>&nbsp;&nbsp;
            <li>
                <select class="form-control mr-2 selectCity" name="" id="">
                  <option selected disabled value="">Ciudad</option>
                  <option data-lat="11.0041072" data-long="-74.8069813" value="">Barranquilla</option>
                  <option data-lat="10.9171191" data-long="-74.7991506" value="">Soledad</option>
              </select>
              </li>&nbsp;&nbsp;
              <li >
                <select class="form-control mr-2 selectNeighborhood" name="" id="">
                  <option selected disabled value="">Barrio</option>
                  <option value="">Andalucia</option>
                  <option value="">Bellavista</option>
                  <option value="">Campo Alegre</option>
                  <option value="">La Floresta</option>
                  <option value="">Los Andes</option>
              </select>
              </li>
          </ul>
                </div>
              </div>
            <hr>
        </div>
      </div>
     <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Sucursales</h3>
              <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-info">Filtrar</a>
            </div>
            </div>

            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                 <tr>
                    <th scope="col">Cod. Suc.</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Munucipio</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Encargado</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th>516541</th>
                    <td>Atlantico</td>
                    <td>Barranquilla</td>
                    <td>Barranquilla</td>
                    <td>Carrera 18 calle 17 - 78</td>
                    <td>Daniel Targaryen</td>
                    <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                        Agenda
                      </button>
                    </td>
                  </tr>
                   <tr>
                    <th>516541</th>
                    <td>Atlantico</td>
                    <td>Barranquilla</td>
                    <td>Barranquilla</td>
                    <td>Carrera 18 calle 17 - 78</td>
                    <td>Daniel Targaryen</td>
                    <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                        Agenda
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th>516541</th>
                    <td>Atlantico</td>
                    <td>Barranquilla</td>
                    <td>Barranquilla</td>
                    <td>Carrera 18 calle 17 - 78</td>
                    <td>Daniel Targaryen</td>
                    <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                        Agenda
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th>516541</th>
                    <td>Atlantico</td>
                    <td>Barranquilla</td>
                    <td>Barranquilla</td>
                    <td>Carrera 18 calle 17 - 78</td>
                    <td>Daniel Targaryen</td>
                    <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                        Agenda
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th>516541</th>
                    <td>Atlantico</td>
                    <td>Barranquilla</td>
                    <td>Barranquilla</td>
                    <td>Carrera 18 calle 17 - 78</td>
                    <td>Daniel Targaryen</td>
                    <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                        Agenda
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th>516541</th>
                    <td>Atlantico</td>
                    <td>Barranquilla</td>
                    <td>Barranquilla</td>
                    <td>Carrera 18 calle 17 - 78</td>
                    <td>Daniel Targaryen</td>
                    <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                        Agenda
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th>516541</th>
                    <td>Atlantico</td>
                    <td>Barranquilla</td>
                    <td>Barranquilla</td>
                    <td>Carrera 18 calle 17 - 78</td>
                    <td>Daniel Targaryen</td>
                    <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                        Agenda
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th>516541</th>
                    <td>Atlantico</td>
                    <td>Barranquilla</td>
                    <td>Barranquilla</td>
                    <td>Carrera 18 calle 17 - 78</td>
                    <td>Daniel Targaryen</td>
                    <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                        Agenda
                      </button>
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














































































<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="row justify-content-center">
        <div class=" col ">
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
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <!-- Fullcalendar -->
          <div class="card card-calendar mt-7">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">Calendar</h5>
            </div>
            <!-- Card body -->
            <div class="">
              <div  id="calendar"></div>
            </div>
          </div>
          <!-- Modal - Add new event -->
          <!--* Modal header *-->
          <!--* Modal body *-->
          <!--* Modal footer *-->
          <!--* Modal init *-->
          <div class="modal fade" id="new-event" tabindex="-1" role="dialog" aria-labelledby="new-event-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
              <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                  <form class="new-event--form">
                    <div class="form-group">
                      <label class="form-control-label">Event title</label>
                      <input type="text" class="form-control form-control-alternative new-event--title" placeholder="Event Title">
                    </div>
                    <div class="form-group mb-0">
                      <label class="form-control-label d-block mb-3">Status color</label>
                      <div class="btn-group btn-group-toggle btn-group-colors event-tag" data-toggle="buttons">
                        <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked></label>
                        <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off"></label>
                        <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off"></label>
                        <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off"></label>
                        <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off"></label>
                        <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off"></label>
                      </div>
                    </div>
                    <input type="hidden" class="new-event--start" />
                    <input type="hidden" class="new-event--end" />
                  </form>

                </div>
                <hr>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary new-event--add">Add event</button>
                  <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal - Edit event -->
          <!--* Modal body *-->
          <!--* Modal footer *-->
          <!--* Modal init 
          <div class="modal fade" id="edit-event" tabindex="-1" role="dialog" aria-labelledby="edit-event-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
              <div class="modal-content">
                <!-- Modal body 
                <div class="modal-body">
                  <form class="edit-event--form">
                    <div class="form-group">
                      <label class="form-control-label">Event title</label>
                      <input type="text" class="form-control form-control-alternative edit-event--title" placeholder="Event Title">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label d-block mb-3">Status color</label>
                      <div class="btn-group btn-group-toggle btn-group-colors event-tag mb-0" data-toggle="buttons">
                        <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked></label>
                        <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off"></label>
                        <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off"></label>
                        <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off"></label>
                        <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off"></label>
                        <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off"></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-control-label">Description</label>
                      <textarea class="form-control form-control-alternative edit-event--description textarea-autosize" placeholder="Event Desctiption"></textarea>
                      <i class="form-group--bar"></i>
                    </div>
                    <input type="hidden" class="edit-event--id">
                  </form>
                </div>
                <!-- Modal footer
                <div class="modal-footer">
                  <button class="btn btn-primary" data-calendar="update">Update</button>
                  <button class="btn btn-danger" data-calendar="delete">Delete</button>
                  <button class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div> *-->
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

      <script type="text/javascript">
      $('#calendar').fullCalendar({
        header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: '2018-11-16',
        navLinks: true,
        eventLimit: true,
        events: [{
            title: 'Fumigacion',
            start: '2018-11-16',
            end: '2018-11-18'
        },
        {
            title: 'Toque de Queda',
            start: '2018-11-20',
            allDay: true
        },
        {
            title: 'Compras Activas',
            start: '2018-11-14T09:00:00',
            end: '2018-11-14T11:00:00'
        },
        {
            title: 'Revision de Inventario',
            start: '2018-11-21T19:00:00',
            end: '2018-11-21T22:00:00'
        },
        {
            title: 'Abastecimiento',
            start: '2018-11-15',
            allDay: true
        },
        {
            title: 'Toque de Queda',
            start: '2018-11-23',
            end: '2018-11-29'
        },
    ]
    });
      </script>
