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
              <li><i class="fa fa-user-md"></i>Admin precios</li>
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
                    <a data-toggle="tab" href="#admin-precios">
                                          <i class="icon-envelope"></i>
                                          Admin precios
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
                  <!-- admin-precios -->
                  <div id="admin-precios" class="tab-pane  active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Aministrador de precios y rutas </h1>
                        <!--input type="button" id="but" value="crear"--> 
                        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Panel de relación rutas y precios
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Origen</th>
                    <th><i class="icon_calendar"></i> Destino</th>
                    <th><i class="icon_mail_alt"></i> Precio</th>
                    
                  </tr>
                  
                   <?php //var_dump($ofis); ?>
                        <?php //$datax = [];
                        $str = array(); $n = 0; $c=array(); $c[0]=''; $c[1]=''; $i=0;

                        foreach($ofis as $of){
                            
                            //echo "<br>".$i."<br>";

                            $cod = $of->id_ciudad_inicio."-".$of->id_ciudad_fin;
                            $c = explode("-",$cod);
                            //echo $cod."<br>";
                             /*if($of->cup_id == $of->id_ruta_precio){
                                   $precio = $of->cup_precio;
                                }else{
                                   $precio = $of->precio;
                                } */
                                 
                                $precio = ($of->cup_id == $of->id_ruta_precio) ? $of->cup_precio : $of->precio;
                             
                              if(in_array($c[0],$str) && (!in_array($c[1],$str)) ){
                                //echo '<div style="color:blue;"> Si => </div>  '.$c[0]."<br>";
                                //echo $c[0]."--".$c[1]."<br>";
                                //echo $of->c1." => ".$of->c2."<br>";
                                //echo "Precio => ".$of->precio; echo "<br>"; echo "<br>";
                               
                              
                                 echo '<tr> 
                                      
                                       <td>'.$of->c1.'</td>
                                       <td>'.$of->c2.'</td>
                                       <td class="col-lg-1" id="pr_'.$of->id_ruta_precio.'">$ &nbsp '.$precio.'</td>
                                       <td  id="updpr_'.$of->id_ruta_precio.'" style="display:none;"> 
                                          <input class="form-control col-lg-1" type="text" id="upr_'.$of->id_ruta_precio.'" value="'.$precio.'">
                                       </td>
                                         <td>
                                           <div class="btn-group">
                                           <a class="btn btn-primary uprt" data-id="'.$of->id_ruta_precio.'" href="#"><i class="icon_plus_alt2"></i></a>
                                           <a class="btn btn-success rt s" id="btn_'.$of->id_ruta_precio.'" data-id="'.$of->id_ruta_precio.'" href="#" disabled><i class="icon_check_alt2"></i></a>
                                       
                                          </div>
                                         </td>
                                       </tr>';

                              }else{
                                 if($n == 0){

                                    echo '<tr>
                                       
                                       <td>'.$of->c1.'</td>
                                       <td>'.$of->c2.'</td>
                                       <td class="col-lg-1" id="pr_'.$of->id_ruta_precio.'">$ &nbsp '.$precio.'</td>
                                       <td id="updpr_'.$of->id_ruta_precio.'" style="display:none;">
                                          <input class="form-control col-lg-1" type="text" id="upr_'.$of->id_ruta_precio.'" value="'.$precio.'">
                                       </td>
                    
                                         <td>
                                           <div class="btn-group">
                                           <a class="btn btn-primary uprt" data-id="'.$of->id_ruta_precio.'" href="#"><i class="icon_plus_alt2"></i></a>
                                           <a class="btn btn-success rt s" id="btn_'.$of->id_ruta_precio.'" data-id="'.$of->id_ruta_precio.'" href="#" disabled><i class="icon_check_alt2"></i></a>
                                    
                                          </div>
                                         </td>
                                       </tr>'; 

                                    //echo '<div style="color:blue;"> Si => </div>  '.$c[0]."<br>";
                                    //echo $c[0]."--".$c[1]."<br>";
                                    //echo $of->c1." a ".$of->c2."<br>";
                                    //echo "Precio => ".$of->precio; echo "<br>"; echo "<br>"; 
                                 } 
                                //echo '<div style="color:red;"> No => </div>  '.$c[0].'_'.$c[1]."<br><br>";
                              
                              }

                            array_push($str,$c[0]);
                           
                            $n=1; $i++;
                        }

                        //var_dump($str);
                        
                       ?>
                  
                </tbody>
              </table>
            </section>
          </div>
        </div>
                        
                        
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



<script>


var up = 0;
$(".uprt").click(function(e){ 
   e.preventDefault();

   var id =  $(this).data("id");
   //$("[id^='pr_']").hide();
    //$("[id^='updpr_']" ).hide(); 
    $(".s[id!='btn_"+id+"']" ).attr('disabled',true);

   $("#pr_"+id).toggle();
   $("#updpr_"+id).toggle().addClass('col-lg-1');
   $("#btn_"+id).attr('disabled',false);
   
});

$(".rt").click(function(e){ 
   e.preventDefault();
   var id = $(this).data("id");
   swal({
     title: "Seguro desea modificar el precio de esta ruta?",
     showCancelButton: true,
     closeOnConfirm: false,
    }, function (value) {

      //return false;
      //if(up == 0 ){return false;}
      var url = "<?=site_url();?>Rubi_admin/createup_precio_ruta";
      var data  = new Object();
      
       data["id_pr"] = id;
       data["precio"] = $("#upr_"+id).val(); 
    
       $.ajax({data:data, type: "POST", dataType: "json",url: url,})
       .done(function( data, textStatus, jqXHR ) {
            var newData = JSON.stringify(data) 
            var res = jQuery.parseJSON(newData); 
              if(res.error_msg != ""){ 
                $("#errlog").html(res.error_msg);
               //$("#error_msg").show();
                console.log("dio error");
              }else{
                $(".s[id='btn_"+id+"']" ).attr('disabled',true);
                $("#updpr_"+id).hide();
                $("#pr_"+id).text("$  "+$("#upr_"+id).val()).show();
          
              }
          
       })
      .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
            console.log( "La solicitud a fallado: " +  textStatus);
            }
       });
  
       swal("Modificación exitosa");
    });

   

});

$("#buts").click(function(){

   var url = "<?=site_url();?>Rubi_admin/crear_data_ciudades";
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
          console.log(res.data);
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 });

});

</script>


   

