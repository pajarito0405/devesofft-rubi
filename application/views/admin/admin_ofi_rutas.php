<style>
       #map {
        height: 400px;
        width: 100%;
       }

        #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    
      #right-panel {
        margin: 20px;
        border-width: 2px;
        width: 20%;
        height: 400px;
        float: left;
        text-align: left;
        padding-top: 0;
      }
      #directions-panel {
        margin-top: 10px;
        background-color: #FFEE77;
        padding: 10px;
      }
</style>

<section id="main-content">
      <section class="wrapper">
        
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="col-lg-12" style="background-color:#B1b3b5;height:85px;margin-top:10px;margin-bottom:20px;"> 
                  <div class="col-lg-5"> </div>
                  <div class="follow-ava" style="margin-top:6px;margin-left:44px;">
                    <img class="img-responsive" src="<?=base_url().$coop->img_perfil;?>" alt="">
                  </div>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <!-- <h3 class="page-header"><i class="fa fa-user-md"></i>Perfil</h3> -->
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Dashboard</a></li>
              <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Crear rutas</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#crear-rutas"><i class="icon-envelope"></i> Crear rutas</a>
                  </li>

                  
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  
                  <!-- crear rutas -->
                  <div id="crear-rutas" class="tab-pane  active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Creación de rutas </h1>
                        <?php //var_dump($ofis);?>

                        <form class="form-horizontal" role="form">
                          
                           <!--<fieldset> -->
                              <!--legend></legend-->
                          <div class="form-group">
                              <label for="dtp_input1" class="col-md-2 control-label">Disponible desde</label>
                                  <div class="input-group date form_datetime col-md-4" data-date="2018-01-01T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                      <input class="form-control" size="16" type="text" value="" id="desde" readonly>
                                         <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </span>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </span>
                                  </div>
                                <input type="hidden" id="dtp_input1" value="" />
                                <br>
                                <label for="dtp_input1" class="col-md-2 control-label">Hasta</label>
                                  <div class="input-group date form_datetime col-md-4" data-date="2018-01-01T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input2">
                                      <input class="form-control" size="16" type="text" value="" id="hasta" readonly>
                                         <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </span>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </span>
                                  </div>
                                <input type="hidden" id="dtp_input2" value="" />
                                
                          </div>
     
                           <!-- </fieldset> -->
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Días de la semana</label>
                            <div class="col-lg-6">
                               <div class="btn-row">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary dia" data-dia="1"> <input type="checkbox" > Lunes </label>
                                    <label class="btn btn-primary active dia" data-dia="2"><input type="checkbox" > Martes </label>
                                    <label class="btn btn-primary dia" data-dia="3"> <input type="checkbox" > Miercoles </label>
                                    <label class="btn btn-primary dia" data-dia="4"> <input type="checkbox" > Jueves </label>
                                    <label class="btn btn-primary dia" data-dia="5"> <input type="checkbox" > Viernes </label>
                                    <label class="btn btn-primary dia" data-dia="6"> <input type="checkbox" > Sabado </label>
                                    <label class="btn btn-primary dia" data-dia="7"> <input type="checkbox" > Domingo </label>
                                </div>
                               </div>
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Horas al día</label>
                            <div class="col-lg-6">
                              <div class="input-group clock col-lg-8">
                                  <input type="text" id="reloj" class="form-control" value="" placeholder="Reloj">
                                      <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                      </span>
                              </div> <br>
                              <div class="tm-input"> </div>
                              
                            </div>
                            <div class="row"> </div>
                          </div>  
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Inicio</label>
                            <div class="col-lg-6">
                               <select class="form-control m-bot15" id="start">
                                   <?php foreach($ofis as $of){?>
                                     <option value="<?=$of->latitud;?>,<?=$of->longitud;?>_<?=$of->id_ubicacion_f_precio;?>" ><?=$of->nombre;?></option>
                                  <?php }?>
                                         
                               </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ruta intermedia</label>
                            <div class="col-lg-6">
                               <select class="selectpicker" data-live-search="true" multiple id="waypoints">
                                  <?php foreach($ofis as $of){?>
                                     <option value="<?=$of->latitud;?>,<?=$of->longitud;?>_<?=$of->id_ubicacion_f_precio;?>"><?=$of->nombre;?></option>
                                  <?php }?>
                                 
                               </select>
                                 
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Fin</label>
                            <div class="col-lg-6">
                             
                              <select class="form-control m-bot15" id="end">
                                      <?php foreach($ofis as $of){?>
                                     <option value="<?=$of->latitud;?>,<?=$of->longitud;?>_<?=$of->id_ubicacion_f_precio;?>"><?=$of->nombre;?></option>
                                  <?php }?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-12">
                              <button type="button" class="btn btn-primary" id="submit">Generar</button>
                              <a href="#myModal" data-toggle="modal" class="btn btn-primary">
                                  Precios
                              </a>
                              
                              <span id="done" style="color:#007aff;display:none;"> Modificación exitosa </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <div id="map" class="col-md-12"></div>
                              <div id="directions-panel"></div>
                            </div>
                          </div>
                        
                          
                        </form> 
                        
                       
                      </div>
                             
    
                    </section>
                  </div>
                
                </div>
                   
                    <!--</section>-->
              </div>
          </div>
        </div>
            <!--</section> -->
          <!--</div>
        </div> -->
        
      </section>
 </section>
  <div class="form-group"> 
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" >
                               <div class="modal-dialog" style="">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                     <h4 class="modal-title">Precios de la ruta</h4>
                                  </div>
                                  <div class="modal-body">

                                    <form role="form">
                                      <div id="precios">
                                       
                                       
                                      </div>
                                      
                                      <!--button type="submit" class="btn btn-primary">Listo</button-->
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfAVe6Sqhl9TJaVrYouNox_2tt9IbpHb8&callback=initMap">
    </script> 

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfAVe6Sqhl9TJaVrYouNox_2tt9IbpHb8&v=3.exp&sensor=false"></script> -->
<script>
var arr_horas = [];
$(document).ready(function() {
    var tags = $(".tm-input").tagsManager();
    var n = 0 ;
    $("#reloj").change(function(){ 
      var hora = $(this).val();
      arr_horas[n] = $(this).val(); n++;
      tags.tagsManager("pushTag", hora);
    });  
});

var $input = $('.clock').clockpicker({
    donetext:         'OK',
});

$input.clockpicker('hide');

var arr_dias = [];
$(".dia").click(function(){ 
  if (!$(this).hasClass('active')){
        arr_dias[$(this).data("dia")] = $(this).data("dia");
    }else{
        arr_dias[$(this).data("dia")] = '';
    }
  console.log(arr_dias);

});

var glat = -3.2525627; 
var glng = -79.9540662; 
 function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: glat, lng: glng}
        });
        directionsDisplay.setMap(map);

        document.getElementById('submit').addEventListener('click', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
}

function calculatePrecios(ini,wayubs,fin){

  var url = "<?=site_url();?>Rubi_admin/calcular_rutas_precios";
   var data  = new Object();
    data["ini"] = ini;
    data["wayubs"] = wayubs;
    data["fin"] = fin;
    
    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg != ""){ 
           $("#errlog").html(res.error_msg);
          //$("#error_msg").show();
          console.log("dio error");
         }else{
          console.log(res.data);
          $("#precios").html(res.data);
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 }); 

}

function calculateAndDisplayRoute(directionsService, directionsDisplay){
       var desde = $("#desde").val(); var hasta = $("#hasta").val();
       desde = desde.replace(/ /g,"/");  hasta = hasta.replace(/ /g,"/");
       /*console.log(desde);
       console.log(hasta);
       console.log(arr_dias); 
       console.log(arr_horas); */
       
        var waypts = []; wayubs = [];
        var  checkboxArray = $("#waypoints").val();
        for (var i = 0; i < checkboxArray.length; i++) {
        var st_ub = checkboxArray[i].split("_");
            wayubs.push({
              id_ub: st_ub[1],
            });
            waypts.push({
              location: st_ub[0],
              stopover: true
            });
        }
        
       
        var inicio = $("#start").val();
        var st_ini = inicio.split("_"); 
        var ini = st_ini[0]; var ini_ub = st_ini[1];

        var final = $("#end").val();
        var st_fin = final.split("_"); 
        var fin = st_fin[0]; var fin_ub = st_fin[1];

        console.log("inicio "+ini_ub);
        console.log(wayubs);
        console.log("fin "+fin_ub);

        calculatePrecios(ini_ub,wayubs,fin_ub);

        directionsService.route({
          origin: ini,
          destination: fin,
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            var summaryPanel = document.getElementById('directions-panel');
            summaryPanel.innerHTML = '';
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
              var routeSegment = i + 1;
              summaryPanel.innerHTML += '<b>Segmento de ruta: ' + routeSegment +
                  '</b><br>';
              summaryPanel.innerHTML += route.legs[i].start_address + ' de ';
              summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
              summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
            }
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });


}

$('.form_datetime').datetimepicker({
        language:  'ES',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        dateFormat: 'dd/mm/yy',
      timeFormat: 'hh:mm:ss',
});




</script>


