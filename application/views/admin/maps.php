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
              <li><i class="fa fa-user-md"></i>Ubicación de oficina</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <!-- <li class="active">
                    <a data-toggle="tab" href="#recent-activity"><i class="icon-home"></i>Daily Activity </a> 
                  </li> -->
                  <!-- <li>
                     <a data-toggle="tab" href="#profile"><i class="icon-user"></i>Profile</a> 
                  </li> -->
                  <li class="active">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Ubicación de oficina
                                      </a>
                  </li>
                  
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div id="recent-activity" class="tab-pane">
                    <div class="profile-activity">
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="<?=base_url();?>assets_admin/img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Jonatanh Doe</a> at 4:25pm, 30th Octmber 2014</p>
                            <p>It is a long established fact that a reader will be distracted layout</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="<?=base_url();?>assets_admin/img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Jhon Loves </a> at 5:25am, 30th Octmber 2014</p>
                            <p>Knowledge speaks, but wisdom listens.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="<?=base_url();?>assets_admin/img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Rose Crack</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="<?=base_url();?>assets_admin/img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Jimy Smith</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="<?=base_url();?>assets_admin/img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                              condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                              eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="<?=base_url();?>assets_admin/img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Sarah saw</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Knowledge speaks, but wisdom listens.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="<?=base_url();?>assets_admin/img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="<?=base_url();?>assets_admin/img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Andriana lee</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="<?=base_url();?>assets_admin/img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                              condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                              eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- profile -->
                  <div id="profile" class="tab-pane ">
                    <section class="panel">
                      <div class="bio-graph-heading">
                        Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                      </div>
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>First Name </span>: Jenifer </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Last Name </span>: Smith</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Birthday</span>: 27 August 1987</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Country </span>: United</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Occupation </span>: UI Designer</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Email </span>:jenifer@mailname.com</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Mobile </span>: (+6283) 456 789</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Phone </span>: (+021) 956 789123</p>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane  active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Maps </h1>
                        <?php //var_dump($ofis);?>

                         <form class="form-horizontal" role="form">
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Inicio</label>
                            <div class="col-lg-6">
                               <select class="form-control m-bot15" id="start">
                                   <?php foreach($ofis as $of){?>
                                     <option value="<?=$of->latitud;?>,<?=$of->longitud;?>"><?=$of->nombre;?></option>
                                  <?php }?>
                                         
                               </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ruta intermedia</label>
                            <div class="col-lg-6">
                              <!--<i>(Ctrl+Click or Cmd+Click for multiple selection)</i> --><br>
                              <!-- <select class="form-control m-bot15" multiple id="waypoints">
                                     <option value="Ecuador, Esmeraldas, Tonsupa">Esmeraldas, Tonsupa</option>
                                     <option value="Ecuador, Manta, playa murcielago">Manta, playa murcielago</option>
                                     <option value="Ecuador, Salinas, Yach club">Salinas, Yach club</option> 
                                     <option value="Ecuador, Guayaquil, 9 octubre">Guayaquil, 9 octubre</option> 
                                     <option value="Ecuador, Cuenca">Cuenca</option> 
                              </select> -->
                          
                                <select class="selectpicker" data-live-search="true" multiple id="waypoints">
                                  <?php foreach($ofis as $of){?>
                                     <option value="<?=$of->latitud;?>,<?=$of->longitud;?>"><?=$of->nombre;?></option>
                                  <?php }?>
                                    <!-- <option value="Ecuador, Machala, calle guayas">Machala, calle guayas</option>
                                     <option value="Ecuador, Santa Rosa, calle eloy alfaro">Santa Rosa, calle eloy alfaro</option>
                                     <option value="Ecuador, Arenillas, calle 24 mayo">Ecuador, Arenillas, calle 24 mayo</option> 
                                     <option value="Ecuador, Huaquillas, Av Santa Rosa"> Ecuador, Huaquillas, Av Santa Rosa </option> 
                                     <option value="Ecuador, Guayaquil, terminal terrestre ">Guayaquil, terminal terrestre</option> 
                                     <option value="Ecuador, Naranjal ">Naranjal</option> -->
                               </select>
                              <!--<?php foreach($ofis as $p){ ?>
                               <option data-id="<?=$p->id_propietario_conductor;?>">
                                 <?=$p->nombre;?> <?=$p->apellido;?> <?=$p->ci;?>
                                   
                               </option>
                               <?php } ?>
                              </select> -->
                        
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Fin</label>
                            <div class="col-lg-6">
                             
                              <select class="form-control m-bot15" id="end">
                                      <?php foreach($ofis as $of){?>
                                     <option value="<?=$of->latitud;?>,<?=$of->longitud;?>"><?=$of->nombre;?></option>
                                  <?php }?>
                              </select>
                            </div>
                          </div>
                          
                          
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-12">
                              <button type="button" class="btn btn-primary" id="submit">Crear</button>
                              
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
                             
    

                      </div>
                    </section>
                  </div>
                   
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        
        <!-- page end-->
      </section>
    </section>


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfAVe6Sqhl9TJaVrYouNox_2tt9IbpHb8&callback=initMap">
    </script> 

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfAVe6Sqhl9TJaVrYouNox_2tt9IbpHb8&v=3.exp&sensor=false"></script> -->
<script>
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

function calculateAndDisplayRoute(directionsService, directionsDisplay){

        var waypts = [];
        //var checkboxArray = document.getElementById('waypoints');
        var checkboxArray = $("#waypoints").val();
        console.log(checkboxArray);
        for (var i = 0; i < checkboxArray.length; i++) {
          //if (checkboxArray.options[i].selected) {
            waypts.push({
              location: checkboxArray[i],
              stopover: true
            });
          //} 
        }

        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
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
</script>

</script>

