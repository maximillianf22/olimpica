@extends('layouts.admin')

@section('content')
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
          <div id="map" class="map-canvas" data-lat="40.748817" data-lng="-73.985428" style="height: 700px;"></div><br>

  			<script src="{{ asset('js/app.js') }}"></script>

          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&callback=initMap"
		    async defer>
		  </script>
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
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Reservas</a>
                          <a class="dropdown-item" href="#">Horarios</a>
                          <a class="dropdown-item" href="#">Clientes</a>
                        </div>
                      </div>
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
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Reservas</a>
                          <a class="dropdown-item" href="#">Horarios</a>
                          <a class="dropdown-item" href="#">Clientes</a>
                        </div>
                      </div>
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
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Reservas</a>
                          <a class="dropdown-item" href="#">Horarios</a>
                          <a class="dropdown-item" href="#">Clientes</a>
                        </div>
                      </div>
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
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Reservas</a>
                          <a class="dropdown-item" href="#">Horarios</a>
                          <a class="dropdown-item" href="#">Clientes</a>
                        </div>
                      </div>
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
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Reservas</a>
                          <a class="dropdown-item" href="#">Horarios</a>
                          <a class="dropdown-item" href="#">Clientes</a>
                        </div>
                      </div>
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
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Reservas</a>
                          <a class="dropdown-item" href="#">Horarios</a>
                          <a class="dropdown-item" href="#">Clientes</a>
                        </div>
                      </div>
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
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Reservas</a>
                          <a class="dropdown-item" href="#">Horarios</a>
                          <a class="dropdown-item" href="#">Clientes</a>
                        </div>
                      </div>
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
                    	<div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">
                          <a class="dropdown-item" href="#">Reservas</a>
                          <a class="dropdown-item" href="#">Horarios</a>
                          <a class="dropdown-item" href="#">Clientes</a>
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
		<div class="col-md-9 p-0">
			<div id="page-content-wrapper">
				<!-- Map container -->
				<div class="mapContainer" style="height: 82vh; width:100%">
					<div id="map" style="height:100%"></div>
				</div>
			</div>
		</div>
@endsection