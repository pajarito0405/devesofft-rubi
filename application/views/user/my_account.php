
<style>
.header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}

.errr{
    background-color:#EFD8D8;
}

</style>
 <?php $d=''; 
  switch ($data_user->is_active) 
  {
   	case 0:$d='Inactivo';break;
    case 1:$d='Activo';break;
    case 2:$d='En espera por aprobación';break;
  }

   ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <div class="form-horizontal" style="padding-top:60px;">
                    <fieldset>
                        <div class="col-md-2"></div><legend class="text-center header col-md-8">Mis datos personales</legend><div class="col-md-2"></div>

                        <div class="form-group">
                         <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Nombre</span>
                         <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control" value="<?=$data_user->nombre;?>" disabled>
                             </div>

                         </div>

                        <div class="form-group">
                         <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Apellido</span>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control" value="<?=$data_user->apellido;?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                         <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Cédula</span>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="ci" name="ci" type="text" placeholder="Cedula" class="form-control" value="<?=$data_user->cedula;?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                         <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Email</span>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control" value="<?=$data_user->email;?>">
                            </div>
                        </div>
                       
                        <div class="form-group">
                         <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Saldo</span>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-money bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="saldo" name="saldo" type="text" placeholder="Saldo" class="form-control" value="<?=$data_user->saldo;?>" disabled>
                            </div>
                        </div>
                        <!--div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="img_ini" name="img_ini" type="text" placeholder="Imagen de recibo de iniciación" class="form-control" value="<?=$data_user->imgr_ini;?>">
                            </div>
                        </div-->

                        <div class="form-group">
                        <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Imagen de perfil</span>
                        <div class="col-md-3"> </div>
                            <div class="col-md-9"> <img src="<?=base_url().$data_user->img_perfil;?>" alt="" class="img-thumbnail img-responsive col-md-2" style="height:110px;"></div><br>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-picture-o bigicon"></i></span>
                            <button id="chng" type="button" style="margin-left:15px; width:90px;" class="btn col-md-2">Cambiar</button>
                            <div id="dfimg" class="col-md-7" style="display:none;">
                                <form enctype="multipart/form-data" id="form_img" method="post">
                                 <br/><input  type="file" id="img_prfl" name="img_prfl"/>
                                </form>
                            </div>
                        </div>
                        
                        <div class="form-group">
                         <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Fecha de afiliación</span>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar-o bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="fecha_af" name="fecha_af" type="text" placeholder="Fecha de afiliación" class="form-control" value="<?=$data_user->fecha_afi;?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                         <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Ciudad</span>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-globe bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="ciudad" name="ciudad" type="text" placeholder="Ciudad" class="form-control" value="<?=$data_user->ciudad;?>">
                            </div>
                        </div>
                         <div class="form-group">
                          <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Dirección</span>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-map-marker bigicon"></i></span>
                            <div class="col-md-7">
                                <div class="col-md-12">
                                <textarea class="form-control col-md-12" id="dir" name="dir" placeholder="Por favor introduzca su dirección" rows="8" value="<?=$data_user->direccion;?>"></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                         <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Status</span>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-7">

                                <input id="status" name="status" type="text" placeholder="Status" class="form-control" value="<?=$d;?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                         <div class="col-md-3"> </div> <span class="col-md-9" style="color:grey;">Telefono</span>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="telf" name="telf" type="text" placeholder="Telefono" class="form-control" value="<?=$data_user->telefono;?>"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button id="send" type="button" class="btn btn-primary btn-lg">Enviar</button>

                            </div>
                            <br> <br> 
                        <span id="mresult" class="col-md-12 text-center" style="color:#36A0FF;font-size:17px;padding:10px;display:none;"> Actualización satisfactoria </span>

                        </div>

                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url();?>assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

function clean(){
 $(":input").each(function(){ 
    if($(this).hasClass('errr') && $(this).val() != "")
       {
         $('#errlog').html('');
         $(":input").removeClass('errr');
       }
  }); 
}

$(":input").click(function(){
  clean();
});

function validate(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){return true;}
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

 $("#send").click(function(e){
 	clean();
     if($("#email").val() == ""){
       $(":input").removeClass('errr');
       $("#errlog").text("Campos vacios"); 
       $("#email").addClass('errr');  return false; 
     }
     if($("#ciudad").val() == ""){
       $(":input").removeClass('errr');
       $("#errlog").text("Campos vacios"); 
       $("#ciudad").addClass('errr');  return false; 
     }
     if($("#dir").val() == ""){
       $(":input").removeClass('errr');
       $("#errlog").text("Campos vacios"); 
       $("#dir").addClass('errr');  return false; 
     }
     if($("#telf").val() == ""){
       $(":input").removeClass('errr');
       $("#errlog").text("Campos vacios"); 
       $("#telf").addClass('errr');  return false; 
     }
     
         e.preventDefault();
       var f = $("#form_img");
       var url = "<?=site_url();?>/Front/update";
       var formData = new FormData(document.getElementById("form_img"));
       formData.append("dato", "valor");
       // formData.append(f.attr("name"), $(this)[0].files[1]);
       formData.append("nombre",$("#fname").attr("value"));
       formData.append("ap",$("#lname").attr("value"));
       formData.append("telf",$("#telf").attr("value"));
       formData.append("email",$("#email").attr("value")); 
       formData.append("dir",$("#dir").attr("value"));
       formData.append("ciudad",$("#ciudad").attr("value"));

       $.ajax({
       data:formData,
       type: "POST",
       //dataType: "json",
       url: url,
       cache: false,
       contentType: false,
       processData: false
       })
      .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data); 
          var res = jQuery.parseJSON(newData);
          $("#mresult").css("display","block");
       })
      .fail(function( jqXHR, textStatus, errorThrown ) {
        if (console && console.log) {
         console.log( "La solicitud a fallado: " +  textStatus);
        }
      });
  });

 $("#chng").click(function(){
 	$(this).hide();
   $("#dfimg").css("display","block");
 });
 

</script>        