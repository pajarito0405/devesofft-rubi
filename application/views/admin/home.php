<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?=base_url();?>assets_admin/img/favicon.png">

  <title>Rubi | Admin </title>

  <!-- Bootstrap CSS -->
  <link href="<?=base_url();?>assets_admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?=base_url();?>assets_admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?=base_url();?>assets_admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets_admin/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?=base_url();?>assets_admin/css/style.css" rel="stylesheet">
  <link href="<?=base_url();?>assets_admin/css/style-responsive.css" rel="stylesheet" />

   <!-- container section end -->
  <!-- javascripts -->
  <script src="<?=base_url();?>assets_admin/js/jquery.js"></script>
  <script src="<?=base_url();?>assets_admin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?=base_url();?>assets_admin/js/jquery.scrollTo.min.js"></script>
  <script src="<?=base_url();?>assets_admin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="<?=base_url();?>assets_admin/assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="<?=base_url();?>assets_admin/js/scripts.js"></script>

 


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="index.html">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input id="email" type="text" class="form-control" placeholder="Usuario o email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input id="pass" type="password" class="form-control" placeholder="Clave">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Recordarme
                <span class="pull-right"> <a href="#"> Recordar contraseña?</a></span>
            </label>
        <button id="login-btn" class="btn btn-primary btn-lg btn-block" type="button">Login</button>
        <!--button class="btn btn-info btn-lg btn-block" type="submit">Signup</button-->
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <!--a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a-->
        </div>
    </div>
  </div>


</body>

</html>


 <script>

 $('#login-btn').click(function(){
    
    var url = "<?=site_url();?>Login/auth_admin"; 
 
    var data  = new Object();
    data["email"] = $("#email").val();
    data["pass"] = $("#pass").val();
    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
         var res = jQuery.parseJSON(newData); 
         if(res.error_msg != ""){ 
           $("#errlog").html(res.error_msg);
          //$("#error_msg").show();
          console.log("dio error");
         }else{
             if(res.redirect !=''){
              var url = "<?=site_url();?>"+res.redirect;
             }else{
              var url = $("#base_url").html();
         }
             $(location).attr('href',url);
        }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 });
});


 </script>