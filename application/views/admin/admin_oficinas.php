<style>
       #map {
        height: 400px;
        width: 100%;
       }

       #map_up {
        height: 400px;
        width: 100%;
       }
</style>

<section id="main-content">
      <section class="wrapper">
        
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="col-lg-12" style="background-color:#dbdcdd;height:85px;margin-top:10px;margin-bottom:20px;"> 
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
              <li><i class="fa fa-user-md"></i>Perfil</li>
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
                    <a data-toggle="tab" href="#create-ofi" data-c="1" class="create"><i class="icon-home"></i>Crear oficina</a> 
                  </li> 
                  <li class="">
                    <a data-toggle="tab" href="#edit-oficina" data-c="0" class="create"><i class="icon-envelope"></i>Información de oficinas</a>
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
                  <div id="create-ofi" class="tab-pane  active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Crear oficina </h1>
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <input id="ofi" type="hidden" class="form-control" value="" placeholder=" ">
                            <div class="col-lg-6">
                              <input id="nm" type="text" class="form-control" value="" placeholder=" ">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Resumen</label>
                            <div class="col-lg-10">
                              <textarea name="" id="res" class="form-control" cols="30" rows="5">
                                
                              </textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input id="email" type="text" class="form-control" value="" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Contraseña</label>
                            <div class="col-lg-6">
                              <input id="pass_p" type="password" class="form-control" value="" placeholder="provisional">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Repetir contraseña</label>
                            <div class="col-lg-6">
                              <input id="rpass_p" type="password" class="form-control" value="" placeholder="provisional">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre admin</label>
                            <div class="col-lg-6">
                              <input id="nm_admin" type="text" class="form-control" value="" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Apellido admin</label>
                            <div class="col-lg-6">
                              <input id="ap_admin" type="text" class="form-control" value="" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Cedula admin</label>
                            <div class="col-lg-6">
                              <input id="ci_admin" type="text" class="form-control" value="" >
                            </div>
                          </div>
                          <div class="form-group">
                             <label class="col-lg-2 control-label">Crear rutas</label>
                             &nbsp;&nbsp;<input type="checkbox" id="crear" value="">
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Imagen de perfil</label>
                            <div class="col-lg-6">
                              <input name="img_perfil" type="file" id="img_perfil" />
                              <!--<img  id="src_img_perfil" src="<?=base_url();?>assets_admin/img/img_perfil_default.png" alt="..." class="img-thumbnail" style=""> -->
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ubicación en función al precio</label>
                            <div class="col-lg-6">
                               <select class="selectpicker" data-live-search="true" id="ubi_price">
                                  <?php foreach($ciudades as $c){?>
                                     <option value="<?=$c->id_ciudad_pueblo;?>"><?=$c->ciudad_pueblo;?></option>
                                  <?php }?>
                                    
                                </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ubicación</label>
                            <div class="col-lg-6">
                              <input id="ubi" type="text" class="form-control" placeholder=" " disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Latitud</label>
                            <div class="col-lg-6">
                              <input id="lat" type="text" class="form-control"  placeholder=" " disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Longitud</label>
                            <div class="col-lg-6">
                              <input id="long" type="text" class="form-control" placeholder=" " disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Busqueda</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="srch" placeholder=" " value="">
                            </div>
                          </div>
                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <button type="button" class="btn btn-primary btn_search_map" data-camp-srch="srch" id="">Buscar</button>
                              </div>
                          </div>
                          

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Posición geolicalizable</label>
                            <div class="col-lg-10">
                                <div id="map"></div>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="button" class="btn btn-primary" id="btn_create">Crear</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                              <span id="done" style="color:#007aff;display:none;"> Creación exitosa </span>
                            </div>
    
                          </div>
                            
                        </form>
                      </div>
                    </section>
                  </div>
                  <div id="edit-oficina" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Información de oficinas </h1>
                         <select class="form-control input-lg m-bot15" id="s_ofis">
                          <?php foreach($ofis as $of){?> 
                              <option class="osofis" value="<?=$of->id_oficina;?>"><?=$of->nombre;?></option>
                          <?php }?>
                         </select> <br> <br>
                                   
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="nm_q" value="<?=$coop->nombre;?>" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Resumen</label>
                            <div class="col-lg-10">
                              <textarea name="" id="res_q" class="form-control" cols="30" rows="5" value="<?=$coop->resumen;?>">
                                <?=$coop->resumen;?>
                              </textarea>
                            </div>
                          </div>

                          <div class="form-group ">
                             <label><input type="checkbox" id="crear_q" value=""> Crear rutas </label>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ubicacion</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="ubi_q" placeholder=" " value="<?=$coop->ubicacion;?>"  disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Latitud</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="lat_q" placeholder=" " value="<?=$coop->latitud;?>"  disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Longitud</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="long_q" placeholder=" " value="<?=$coop->longitud;?>"  disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Busqueda</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="srch_up" placeholder=" " value="">
                            </div>
                          </div>
                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <button type="button" data-map="" data-camp-srch="srch_up" class="btn btn-primary btn_search_map" id="btn_search_map">Buscar</button>
                              </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Posición geolicalizable</label>
                            <div class="col-lg-10">
                                <div id="map_up"></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Imagen de perfil</label>
                            <div class="col-lg-6">
                              <input name="img_upperfil" type="file" />
                            </div>
                          </div> 
                          

                          
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="button" class="btn btn-primary" id="btn_upd">Modificación</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                              <span id="done_mod" style="color:#007aff;display:none;"> Modificación exitosa </span>
                            </div>
    
                          </div>
                            
                        </form>
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

<script>

/*$("#btn_ord").click(function(){
  $("#alert").hide();
  var i = 0; var arr = [];
   $(".of").each(function(){

      if($(this).val() < $("#count").val()){
        arr[$(this).data('id')] = $(this).val();
      }else{
        $(this).css('color','red');
        $("#alert").show();
        return false;
      }
 
      console.log($(this).data('id'),arr[$(this).data('id')]);
   });
});  */
var img = 1;
$("#create-ofi").click(function(){ img ='img_perfil'; });
$("#edit-oficina").click(function(){ img ='img_upperfil';});

var img_perfil='';
$(':file').change(function(){
      if(create == 1){}
       var fileInput = document.getElementById(img);
        img_perfil = fileInput.files;
        console.log(img_perfil);
});

$(".create").click(function(){
  //alert($(this).data('c'));
  create = $(this).data('c');
   var map_id = create ==  0 ? 'map_up' : 'map';
   console.log(map_id);
   initMap2(map_id);
 
}); 

var create = false;

// Google maps api create.
var markers = [];
var glat = -0.19363366460991727; 
var glng = -78.46641540527344; 

var markers_up = [];
var glat_up = -0.19363366460991727; 
var glng_up = -78.46641540527344;

function initMap(){
       
        var uluru = {lat: glat, lng: glng};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru
        });
        add_event_list(map);
}

function initMap2(map_id='map'){

        var uluru = {lat: glat, lng: glng};
        var map = new google.maps.Map(document.getElementById(map_id),{
          zoom: 8,
          center: uluru
        });
        add_event_list(map);
}

var map_dvid ='map';
function add_event_list(map){
    map_dvid =  map.__gm.X.id;

    google.maps.event.addListener(map, "click", function(ele) {
          clearMarkers(map_dvid);
          marker = new google.maps.Marker({
          position: ele.latLng,
          map: map
          });
          

          //console.log(marker);
          if(map_dvid == 'map'){
            $("#lat").val(marker.position.lat());
            $("#long").val(marker.position.lng());
            glat = marker.position.lat();
            glng = marker.position.lng();
            markers[0] = marker;  
          }else{
            $("#lat_q").val(marker.position.lat());
            $("#long_q").val(marker.position.lng());
            glat_up = marker.position.lat();
            glng_up = marker.position.lng();
            markers_up[0] = marker;  
          }
         
          inverse_geocode(marker.position.lat(),marker.position.lng());

    });
}

function clearMarkers() {
   setMapOnAll(null);
}

function setMapOnAll(map){
   if(map_dvid == 'map'){
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
   }else{
        for (var i = 0; i < markers_up.length; i++) {
          markers_up[i].setMap(map);
        }
   }
}

function inverse_geocode(lat,long){
  
    var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+','+long+"&key=AIzaSyD7zJUjjovZuwdxyyzsJT2UXHnQZIhapDU";
      
    var data  = new Object();
 
    $.ajax({data:data, type: "GET", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ){
           var dir = data.results[0].formatted_address;
           if(map_dvid == 'map'){
              $("#ubi").val(dir);
           }else{
              $("#ubi_q").val(dir);
           }
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
      if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
      }
    }); 
 

}


$(".btn_search_map").click(function(){
    var cs = $(this).data('camp-srch'); 
    var search = $('#'+cs).val();
    //var search = $("#srch").val();
    search = search.replace(",",' '); 
    search = search.replace(" ",',');
    var url = "https://maps.googleapis.com/maps/api/geocode/json?address="+search+"&key=AIzaSyDfAVe6Sqhl9TJaVrYouNox_2tt9IbpHb8";
    var data  = new Object();
 
    $.ajax({data:data, type: "GET", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var lats = data.results[0].geometry.location.lat;
          var lngs = data.results[0].geometry.location.lng;
          var posi = {lat: lats, lng: lngs};
          var map = new google.maps.Map(document.getElementById(map_dvid), {
           zoom: 13,
           center: posi
          });

          clearMarkers();
          marker = new google.maps.Marker({
          position: posi,
          map: map
          });
          
        if(map_dvid == 'map'){

          $("#lat").val(lats);
          $("#long").val(lngs);
          glat = lats;
          glng = lngs;
          markers[0] = marker;
        }else{
          $("#lat_q").val(lats);
          $("#long_q").val(lngs);
          glat_up = lats;
          glng_up = lngs;
          markers_up[0] = marker;
        }
          inverse_geocode(lats,lngs);
          add_event_list(map);
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 }); 
});


// END google maps api create.


$("#btn_create").click(function(){
   
   if($("#pass_p").val() != $("#rpass_p").val()){ alert('las contraseñas no coinciden'); return false; }

    var url = "<?=site_url();?>Rubi_admin/create_ofi";

    var formData = new FormData();
    formData.append("img_perfil", img_perfil[0], img_perfil[0].name);
    formData.append("nm", $("#nm").val());
    formData.append("res",$("#res").val());
    formData.append("id_ubi_price", $("#ubi_price").val());
    formData.append("ubi", $("#ubi").val());
    formData.append("lat",  $("#lat").val());
    formData.append("long", $("#long").val());
    formData.append("email",$("#email").val());
    formData.append("pass_p", $("#pass_p").val());
    formData.append("rpass_p", $("#rpass_p").val());
    formData.append("nm_admin", $("#nm_admin").val());
    formData.append("ap_admin", $("#ap_admin").val());
    formData.append("ci_admin", $("#ci_admin").val());
    var cr = 0;
    if($('#crear').prop('checked')){ cr = 1;}
    formData.append("crear", cr);
    
    $.ajax({data:formData,
     type: "POST",dataType: "json",url: url,cache: false,contentType: false,processData: false})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg != ""){ 
           $("#errlog").html(res.error_msg);
          //$("#error_msg").show();
          console.log("dio error");
         }else{
           $("#done").show();
           $("#s_ofis").append(res.ofi);  
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 });
});

$("#s_ofis").change(function(){
    var url = "<?=site_url();?>Rubi_admin/get_data_ofi";
    var data  = new Object();
    data["id"] = $(this).val();
    
    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg != ""){ 
           $("#errlog").html(res.error_msg);
          //$("#error_msg").show();
          console.log("dio error");
         }else{
          console.log(res);
           $("#done_2").show();
           $("#ofi").val(res.ofi);
           $("#nm_q").val(res.nm_q);
           $("#res_q").val(res.res_q);
           $("#ubi_q").val(res.ubi_q);
           $("#lat_q").val(res.lat_q);
           $("#long_q").val(res.long_q);

           var l1 = Number(res.lat_q); var l2 = Number(res.long_q);
           var posi = {lat:l1 , lng: l2};
           var map = new google.maps.Map(document.getElementById('map_up'), {
           zoom: 13,
           center: posi
          });

          clearMarkers();
          marker = new google.maps.Marker({
          position: posi,
          map: map
          }); 

          glat_up = l1;
          glng_up = l2;
          markers_up[0] = marker;
          inverse_geocode(l1,l2);
          add_event_list(map);


         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 });
});

$("#btn_upd").click(function(){
    var url = "<?=site_url();?>Rubi_admin/update_data_ofi";
    var data  = new Object();
    data["id"] = $("#ofi").val();
    data["nm"] = $("#nm_q").val();
    data["res"] = $("#res_q").val();
    data["ubi"] = $("#ubi_q").val();
    data["lat"] = $("#lat_q").val();
    data["long"] = $("#long_q").val();
    data["crear"] = $("#crear_q").val();
    data["nm_admin"] = $("#nm_admin").val();
    data["ap_admin"] = $("#ap_admin").val();
    data["ci_admin"] = $("#ci_admin").val();

    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg != ""){ 
           $("#errlog").html(res.error_msg);
          //$("#error_msg").show();
          console.log("dio error");
         }else{
          console.log(res);
           $("#done_mod").show();
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 });
});

    
</script>  