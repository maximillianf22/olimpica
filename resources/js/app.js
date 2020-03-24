require('./bootstrap');

$(document).ready(function () {

  var markers = [
    {
      id: 'suc1',
      position: new google.maps.LatLng(10.993808775099799, -74.80366105171515)
    },
    {
      id: 'suc2',
      position: new google.maps.LatLng(10.961979587982043, -74.77811056217163)
    },
    {
      id: 'suc3',
      position: new google.maps.LatLng(10.971296, -74.823062)
    },
    {
      id: 'suc4',
      position: new google.maps.LatLng(10.949556, -74.808213)
    },
    {
      id: 'suc5',
      position: new google.maps.LatLng(10.982587, -74.778945)
    },
    {
      id: 'barranquilla',
      position: new google.maps.LatLng(10.9878, -74.7889)
    },
    {
      id: 'baranoa',
      position: new google.maps.LatLng(10.7940798, -74.9163971)
    },
    {
      id: 'usiacuri',
      position: new google.maps.LatLng(10.75, -74.983)
    },
    {
      id: 'tubara',
      position: new google.maps.LatLng(10.883, -74.983)
    },
    {
      id: 'suan',
      position: new google.maps.LatLng(10.333, -74.883)
    },
    {
      id: 'soledad',
      position: new google.maps.LatLng(10.9166, -74.7501)
    },
    {
      id: 'santaLucia',
      position: new google.maps.LatLng(10.317, -74.95)
    },
    {
      id: 'baranoa',
      position: new google.maps.LatLng(10.7940798, -74.9163971)
    },
    {
      id: 'campoCruz',
      position: new google.maps.LatLng(10.3781, -74.8836)
    },
    {
      id: 'candelaria',
      position: new google.maps.LatLng(10.4585, -74.8806)
    },
    {
      id: 'luruaco',
      position: new google.maps.LatLng(10.617,  -75.15)
    },
    {
      id: 'malambo',
      position: new google.maps.LatLng(10.8595304, -74.7738571)
    },
    {
      id: 'piojo',
      position: new google.maps.LatLng(10.883, -74.983)
    },
    {
      id: 'Repelon',
      position: new google.maps.LatLng(10.5, -75.133)
    },
    {
      id: 'puertoColombia',
      position: new google.maps.LatLng(10.983, -74.95)
    },
    {
      id: 'polonuevo',
      position: new google.maps.LatLng(10.767, -74.85)
    },
    {
      id: 'sabanaGrande',
      position: new google.maps.LatLng(10.8, -74.75)
    },
    {
      id: 'ponedera',
      position: new google.maps.LatLng(10.633, -74.75)
    },
    {
      id: 'sabanaLarga',
      position: new google.maps.LatLng(10.6316, -74.9207)
    },
    {
      id: 'santoTomas',
      position: new google.maps.LatLng(10.75, -74.75)
    }

  ]
  var latlng = new google.maps.LatLng(10.6995397, -74.9713053);
  var mapOptions1 = {
    zoom: 9.8,
    center: latlng,
    mapTypeId: 'satellite',
    disableDefaultUI: true,
    zoomControl: true,
    streetViewControl: true

  }
  map = new google.maps.Map(document.getElementById('map'), mapOptions1);
  setMarkers(map, markers, true)

  function setMarkers(map, markers, info) {

    var infowindow

    markers.map(m => {
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: m.position,
        draggable: false,
        icon: 'assets/img/markers/shop.svg'
      });
      (function (marker) {
        google.maps.event.addListener(marker, 'click', function () {
          if (!infowindow) {
            infowindow = new google.maps.InfoWindow();
          }
          if (info) {
            var contentString = `
	          <div class="container-fluid">
	          <h4 class="m-0"> <small>Direccion: Calle 84 - Cra 20 - 158 </small></h4>
	          <div class="row justify-content-center align-items-center mt-4">
	              <div class="card-deck flex-row flex-nowrap mb-3">
	                <div class="card">
	                  <div class="card-body pb-1">
	                    <h5 class="card-title m-0 mb-2"><small>Codigo Sucursal: 025665 </small></h5>
	                    <p class="card-text m-0"><small><strong>Sucursal:</strong> Abierta </small> <i class="text-success fa fa-circle" aria-hidden="true"></i></p>
	                    <p class="card-text m-0"><small><strong>Encargado:</strong> John Jairo Snow  </small><i class="text-success fa fa-circle" aria-hidden="true"></i></p>
	                    <p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
	                    <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
	                    <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
	                    <a class="justify-content-center" href="sucursal">
	                    <button class="text-center btn btn-sm btn-primary btnDetail mt-3 mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> Detalles</button>
	                  	</a>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>`
            infowindow.setContent(contentString);
            infowindow.open(map, marker);
          }
        });

      })(marker);
    })
  }

  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  $('body').on('click', '.btnDetail', function () {
    $('#detail-tab').tab('show')
    $('#respuesta').html('Ventana de comandos. <br> Escribe "Help" para ver la lista de comandos disponibles.')
    $('#modalOptions').modal()
  })

  $('#commands-tab').on('shown.bs.tab', function () {
    $('.inputUser').focus()
  })

  $('.selectCity').on('change', function () {
    var latitud = $(this).children("option:selected").data("lat");
    var longitud = $(this).children("option:selected").data("long");
    // alert(latitud + ' - ' + longitud);
    var cityMap = new google.maps.LatLng(latitud, longitud);
    map.panTo(cityMap);
    map.setZoom(15);
  })
});