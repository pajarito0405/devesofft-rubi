<style>
.exist{
    border-color:#99FF00;
    color:#99FF00;
}

.noexist{
    border-color:#c31e2ccf;
    color:#c31e2ccf;
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
                  <!--<li class="active">
                    <a data-toggle="tab" href="#create-ofi"><i class="icon-home"></i>Crear oficina </a> 
                  </li> 
                  <li class="">
                    <a data-toggle="tab" href="#edit-oficina"><i class="icon-envelope"></i>Información de oficinas</a>
                  </li> -->
                  <li class="active">
                    <a data-toggle="tab" href="#create-bus"><i class="icon-envelope"></i>Crear bus</a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-bus"><i class="icon-envelope"></i>Información buses</a>
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
                  <div id="create-ofi" class="tab-pane">
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
                            <label class="col-lg-2 control-label">Ubicacion</label>
                            <div class="col-lg-6">
                              <input id="ubi" type="text" class="form-control" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Latitud</label>
                            <div class="col-lg-6">
                              <input id="lat" type="text" class="form-control"  placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Longitud</label>
                            <div class="col-lg-6">
                              <input id="long" type="text" class="form-control" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Imagen de perfil</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="" placeholder=" ">
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
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ubicacion</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="ubi_q" placeholder=" " value="<?=$coop->ubicacion;?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Latitud</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="lat_q" placeholder=" " value="<?=$coop->latitud;?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Longitud</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="long_q" placeholder=" " value="<?=$coop->longitud;?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Imagen de oficina</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="" placeholder=" ">
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

                  <!-- Crear buses -->
     <div id="create-bus" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Crear bus </h1>
                        <section class="panel">
                             <header class="panel-heading tab-bg-primary " style="background-color:#dbdcdd;">
                             <ul class="nav nav-tabs" >
                                <li class="active">
                                     <a data-toggle="tab" href="#datos">Datos generales</a>
                                </li>
                                <li class="">
                                     <a data-toggle="tab" href="#plan">Planimetria de asientos</a>
                                </li>
                                <li class="">
                                     <a data-toggle="tab" href="#galeria">Foto galeria</a>
                                </li>
                                <!--<li class="">
                                     <a data-toggle="tab" href="#contact">Contact</a>
                                </li> -->
                            </ul>
                            </header>

            <div class="panel-body">
              <div class="tab-content">
                          <div id="datos" class="tab-pane active"> <br> <br>
                             <form class="form-horizontal" role="form">
                                 <div class="form-group">
                                     <label class="col-lg-2 control-label">N bus</label>
                                     <div class="col-lg-2">
                                         <input id="n_bus" type="text" class="form-control" value="" placeholder=" ">
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label class="col-lg-2 control-label">DNI Propietario</label>
                                     <div class="col-lg-2">
                                         <input id="prop" type="text" class="form-control" value="" placeholder=" "
                                         onkeyup="validate_prop(this.id,this.value)">
                                     </div>
                                     <div id="msg_prop" class="col-lg-2" style="padding:7px;"> </div>
                                 </div>
                                 <div class="form-group">
                                      <label class="col-lg-2 control-label">DNI Conductor 1</label>
                                       <div class="col-lg-2">
                                           <input id="c1" type="text" class="form-control" placeholder=" "
                                         onkeyup="validate_prop(this.id,this.value)">
                                       </div>
                                       <div id="msg_c1" class="col-lg-2" style="padding:7px;"></div>
                                 </div>
                                 <div class="form-group">
                                     <label class="col-lg-2 control-label">DNI Conductor 2</label>
                                     <div class="col-lg-2">
                                         <input id="c2" type="text" class="form-control"  placeholder=" "
                                         onkeyup="validate_prop(this.id,this.value)">
                                     </div>
                                     <div id="msg_c2" class="col-lg-2" style="padding:7px;"></div>
                                 </div>
                                 
                                 <div class="form-group">
                                      <label class="col-lg-2 control-label">Placa</label>
                                     <div class="col-lg-6">
                                         <input type="text" class="form-control" id="plc" placeholder=" ">
                                     </div>
                                 </div>
                                 
                         
                            </form>
                          </div>
                          <div id="plan" class="tab-pane" style="height:880px;padding:20px;">
                              <div class="form-group col-lg-3"> Marcas
                                 <select class="form-control m-bot15" id="s_marcas">
                                  <?php foreach($marcas as $m){?>
                                      <option value="<?=$m->id_marca;?>"><?=$m->marca;?></option>
                                  <?php }?>   
                                 </select>

                              </div>
                              <div class="form-group col-lg-3"> Modelos
                                 <select class="form-control m-bot15" id="s_mod">
                                     
                                      
                                 </select>
                              </div>
                              <div class="form-group col-lg-3"> Fabricantes
                                 <select class="form-control m-bot15" id="s_fab">
                                      
                                 </select>
                              </div> <br> <br>

                              <div class="form-group">
                                 <!--label class="col-lg-2 control-label">Planimetria de asientos</label-->
                                 
                                 <!--div class="col-lg-10"> </div-->     
                                 <div class="col-lg-10">
                                   <div class="btn-group">
                                      <a class="btn btn-primary click-planis" href="#" title="Bootstrap 3 themes generator">Planimetrias</a>
                                      <a class="btn btn-primary dropdown-toggle click-planis" data-toggle="dropdown" href="#" ><span class="caret"></span></a>
                                      <ul class="dropdown-menu" id="select_planis">
                                        <?php //foreach($planimetrias as $p){?>
                                         <!--<li><a class="planis" data-id="" onClick="get_pl(<?=$p->id_planimetria;?>)"><?=$p->planimetria;?></a></li> -->
                                        <?php //}?>
                                      </ul>
                                   </div>
                                 </div>
                              </div> <br> <br> 
                              <div id="planimetria" class="form-group col-lg-5"> <br> <br>
                              
                               <div class="col-lg-12"> <img id="plan_img" src="<?=base_url();?>assets_admin/img/planimetrias/planimetria-1.png" alt="" class="img-thumbnail img-responsive"></div>

                              </div>
                              <div class="form-group col-lg-6"><br> <br>
                                     
                                     <div class="col-lg-1">
                                      <label class="col-lg-2 control-label">Servicios</label> <br> <br>
                                       <div class="col-lg-1" style="font-size:3em;">
                                         <a href="#" class="serv" data-id="1" data-check='0'> <i class="fas fa-tv"></i> </a>
                                       </div>
                                       <div class="col-lg-1" style="font-size:3em;">
                                         <a href="#" class="serv" data-id="2" data-check='0'> <i class="fas fa-bed"></i></i> </a>
                                       </div>
                                       <div class="col-lg-1" style="font-size:3em;">
                                         <a href="#" class="serv" data-id="3" data-check='0'> <i class="fas fa-wifi"></i> </a>
                                       </div>
                                       <div class="col-lg-1" style="font-size:3em; ">
                                         <a href="#" class="serv" data-id="4" data-check='0'> <i class="fas fa-utensils"></i> </a>
                                       </div>
                                       <div class="col-lg-1" style="font-size:3em; ">
                                         <a href="#" class="serv" data-id="5" data-check='0'> <i class="fas fa-snowflake"></i> </a>
                                       </div>
                                       <div class="col-lg-1" id="icon_b" style="font-size:3em;display:none;">
                                         <a href="#" class="serv" data-id="6" data-check='0'> <i class="fas fa-bath"></i> </a>
                                       </div>
                                     </div> 
                                 </div>
                          </div>
                          
                          <div id="galeria" class="tab-pane" style="height:580px; padding:40px;">
                            
                            <form id="fileupload" class="fileupload" action=""  enctype="multipart/form-data">
                               
                            <!-- <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript> -->
                               
                                <div class="row fileupload-buttonbar">
                                  <div class="col-lg-7">
                                    
                                     <span class="btn btn-success fileinput-button">
                                       <i class="glyphicon glyphicon-plus"></i>
                                       <span>Agregar</span>
                                       <input type="file" name="files[]" id="imgs" multiple>
                                     </span>
                                     <!--<button type="submit" class="btn btn-primary start">
                                       <i class="glyphicon glyphicon-upload"></i>
                                       <span>Subir</span>
                                     </button> -->
                                     <button type="reset" class="btn btn-warning cancel">
                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                        <span>Cancelar</span>
                                     </button>
                                     <!--<button type="button" class="btn btn-danger delete">
                                        <i class="glyphicon glyphicon-trash"></i>
                                        <span>Eliminar</span>
                                     </button> -->
                                     <input type="checkbox" class="toggle">
               
                                     <span class="fileupload-process"></span>
                                  </div>
          
                                  <div class="col-lg-5 fileupload-progress fade">
              
                                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                      <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                    </div>
                
                                    <div class="progress-extended">&nbsp;</div>
                                  </div>
                                </div>
       
                                <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                              </form>
                          
                            </div>
                                  


                                 </div>
                            </div>
                      </section>
                      <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="button" class="btn btn-primary" id="btn_create_bus">Crear</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                              <span id="done_bus" style="color:#007aff;display:none;"> Creación exitosa </span>
                            </div>
    
                      </div>
                        
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

<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{%  arr = []; for (var i=0, file; file=o.files[i]; i++) { arr[i]=file.name; %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active " role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success prog" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <!--<button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button> -->
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>

<script>


$(document).ready(function() {
      $(".serv").css('color','#A4A4A4');
  });

var arr_servs = [];
$(".serv").click(function(e){
    e.preventDefault();
    var i = $(this).data('id');
    if($(this).data('check') == '1'){ 
      arr_servs[i]='';
      $(this).data('check','0'); 
      $(this).css('color','#A4A4A4');
    }else{
      arr_servs[i]= $(this).data('id');
      $(this).data('check','1');
      $(this).css('color','#58FA58');
    }
    
    console.log(files_img);
    console.log(arr_servs);
    
    //alert($(this).data('id'));
  });

var files_img='';
$(':file').change(function()
    {
        //obtenemos un array con los datos del archivo
        /*file = $("#imgs")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type; */
        //mensaje con la información del archivo
        
        //console.log(file);

        var fileInput = document.getElementById("imgs");
        files_img = fileInput.files;
        console.log(files_img);
         console.log(arr_servs);

    });

$("#btn_create_bus").click(function(){
 
         var formData = new FormData();

         for(var i=1; i<files_img.length; i++){
          formData.append("files[]", files_img[i], files_img[i].name);
         }
         formData.append('srv', arr_servs);

         formData.append('n_bus', $("#n_bus").val());
         formData.append('prop', $("#prop").val());
         formData.append('c1', $("#c1").val());
         formData.append('c2', $("#c2").val());
         formData.append('s_marcas', $("#s_marcas").val());
         formData.append('s_mod', $("#s_mod").val());
         formData.append('plc', $("#plc").val());
         formData.append('plani', id_plani);
      
        var message = ""; 
        //hacemos la petición ajax 
        $('#fileupload').addClass('fileupload-processing'); 
        $.ajax({
            url: '<?=site_url();?>Rubi_admin/file_up_buses',  
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
        
            beforeSend: function(){
                message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
            
               $(".prog")
              .css("width", "100%").attr("aria-valuenow", 100).text("100% Completado");
                //showMessage(message)        
            },
            success: function(data){

                $('#fileupload').removeClass('fileupload-processing'); 
                $('#done_bus').show();

                /*if(isImage(fileExtension))
                {
                    $(".showImage").html("<img src='files/"+data+"' />");
                } */
            },
            error: function(){
                message = $("<span class='error'>Ha ocurrido un error.</span>");
                //showMessage(message);
            }
        });
 });
 


$("#s_marcas").change(function(){ 
     
    var url = "<?=site_url();?>Rubi_admin/get_select_modelos";
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
          $("#s_mod").html(res.models);
          $("#s_fab").html('');
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
    });

  });

$("#s_mod").change(function(){ 
     
     var url = "<?=site_url();?>Rubi_admin/get_select_fab";
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
          $("#s_fab").html(res.fab);
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
    });

  });

  $("#np").change(function(){
  $("#nas").data('np',$(this).val());
});

$(".click-planis").click(function(e){
    e.preventDefault();
    
    var url = "<?=site_url();?>Rubi_admin/get_select_planimetrias";
    var data  = new Object();
    data["fab"] = $("#s_fab").val();
    data["mod"] = $("#s_mod").val();
    
    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg != ""){ 
           $("#errlog").html(res.error_msg);
          //$("#error_msg").show();
          console.log("dio error");
         }else{
          console.log(res.select);
           $("#select_planis").html(res.select);
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
    });

});
      
$("#chds").click(function(){

  //alert($('input:checkbox[id=chds]:checked').val());
  if($('input:checkbox[id=chds]:checked').val() == 'on'){
    $("#cpqp").prop('disabled', false);
    $("#cpqc").prop('disabled', false);
    val_cap =  true;
  }else{
    $("#cpqp").prop('disabled', true);
    $("#cpqc").prop('disabled', true);
    $("#cpqp").val(0); $("#cpqc").val(0);
    val_cap =  false;
  }

});


function validate_prop(id_camp,value){
  if(value.length >= 8){
    var p = '0';
    var val = $("#"+id_camp+"").val();
    if(id_camp == 'prop'){var p = '1';}
    console.log(val,p);
    var url = "<?=site_url();?>Rubi_admin/get_dc";
    var data  = new Object();
    data["dni"] = val;
    data["p"] = p;
    
    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg == 'Dni no existe'){ 
          $("#"+id_camp+"").removeClass("exist");
          $("#"+id_camp+"").addClass("noexist");
          $("#msg_"+id_camp+"").removeClass("exist");
          $("#msg_"+id_camp+"").html(res.error_msg).addClass("noexist");

         }else{

          $("#"+id_camp+"").removeClass("noexist");
          $("#"+id_camp+"").addClass("exist");
          $("#msg_"+id_camp+"").removeClass("noexist");
          $("#msg_"+id_camp+"").html(res.error_msg).addClass("exist");
         }
          
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
    }); 
  }

}


$(".fplanis").click(function(e){
    e.preventDefault();
       var url = "<?=site_url();?>Rubi_admin/get_planimetrias";
    var data  = new Object();
    data["id"] = $(this).data('id');
    
    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg != ""){ 
           $("#errlog").html(res.error_msg);
          //$("#error_msg").show();
          console.log("dio error");
         }else{

           $("#plan_img").attr('src',res.img);
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
    });
});

var id_plani='';
function get_pl(id){
 // preventDefault();
   var url = "<?=site_url();?>Rubi_admin/get_planimetrias";
    var data  = new Object();
    data["id"] = id;
    id_plani=id;
    
    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg != ""){ 
           $("#errlog").html(res.error_msg);
          //$("#error_msg").show();
          console.log("dio error");
         }else{
           //console.log();
           if(res.b != '1'){ $("#icon_b").hide();}else{ $("#icon_b").show();}
           $("#plan_img").attr('src',res.img);
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
    });
}


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