<style>
       #map {
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
                  <!-- <li class="active">
                    <a data-toggle="tab" href="#recent-activity"><i class="icon-home"></i>Daily Activity </a> 
                  </li> -->
                  <!-- <li>
                     <a data-toggle="tab" href="#profile"><i class="icon-user"></i>Profile</a> 
                  </li> -->
                  <li class="active">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Información de perfil
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
                        <h1> Información de cooperativa </h1>

                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="nm" value="<?=$coop->nombre;?>" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Resumen</label>
                            <div class="col-lg-10">
                              <textarea name="" id="res" class="form-control" cols="30" rows="5" value="<?=$coop->resumen;?>">
                                <?=$coop->resumen;?>
                              </textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Descripción</label>
                            <div class="col-lg-10">
                              <textarea name="" id="desc" class="form-control" cols="30" rows="5" value="<?=$coop->descripcion;?>">
                                <?=$coop->descripcion;?>
                              </textarea>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Imagen de perfil</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ubicacion</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="ubi" placeholder=" " value="<?=$coop->ubicacion;?>">
                            </div>
                          </div>
                      
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Latitud</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="lat" placeholder=" " value="<?=$coop->latitud;?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Longitud</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="long" placeholder=" " value="<?=$coop->longitud;?>">
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
                              <button type="button" class="btn btn-primary" id="btn_search_map">Buscar</button>
                            </div></div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Posición geolicalizable</label>
                            <div class="col-lg-10">
                                <div id="map"></div>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="button" class="btn btn-primary" id="btn_save">Modificar</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                              <span id="done" style="color:#007aff;display:none;"> Modificación exitosa </span>
                            </div>
    
                          </div>
                            
                        </form>
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

<script>

$("#btn_search_map").click(function(){
    var search = $("#srch").val();
    search = search.replace(",",' '); 
    search = search.replace(" ",',');
    var url = "https://maps.googleapis.com/maps/api/geocode/json?address="+search+"&key=AIzaSyDfAVe6Sqhl9TJaVrYouNox_2tt9IbpHb8";
    var data  = new Object();
 
    $.ajax({data:data, type: "GET", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var lats = data.results[0].geometry.location.lat;
          var lngs = data.results[0].geometry.location.lng;

          var posi = {lat: lats, lng: lngs};
          var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 13,
           center: posi
          });

          clearMarkers();
          marker = new google.maps.Marker({
          position: posi,
          map: map
          });
          
          $("#lat").val(lats);
          $("#long").val(lngs);
          glat = lats;
          glng = lngs;
          markers[0] = marker;
          inverse_geocode(lats,lngs);
          add_event_list(map);
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 }); 
});

function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }

function clearMarkers() {
   setMapOnAll(null);
 }

function inverse_geocode(lat,long){
  
    var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+','+long+"&key=AIzaSyD7zJUjjovZuwdxyyzsJT2UXHnQZIhapDU";
      
    var data  = new Object();
 
    $.ajax({data:data, type: "GET", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ){
           var dir = data.results[0].formatted_address;
           $("#ubi").val(dir);
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
      if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
      }
    }); 
 

}

function add_event_list(map){

    google.maps.event.addListener(map, "click", function(ele) {
          clearMarkers();
          marker = new google.maps.Marker({
          position: ele.latLng,
          map: map
          });

          //console.log(marker);
          
          $("#lat").val(marker.position.lat());
          $("#long").val(marker.position.lng());
          glat = marker.position.lat();
          glng = marker.position.lng();
          markers[0] = marker;

          inverse_geocode(marker.position.lat(),marker.position.lng());

    });
} 


var markers = [];
var glat = -0.19363366460991727; 
var glng = -78.46641540527344; 
function initMap() {
        var uluru = {lat: glat, lng: glng};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru
        });
        add_event_list(map);
}





$("#btn_save").click(function(){

    var url = "<?=site_url();?>Rubi_admin/update_coop";
    var data  = new Object();
    data["nm"] = $("#nm").val();
    data["res"] = $("#res").val();
    data["desc"] = $("#desc").val();
    data["ubi"] = $("#ubi").val();
    data["lat"] = $("#lat").val();
    data["long"] = $("#long").val();
  
    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg != ""){ 
           $("#errlog").html(res.error_msg);
          //$("#error_msg").show();
          console.log("dio error");
         }else{
           $("#done").show();  
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 });
});

    
</script>  