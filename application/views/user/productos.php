     <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 " style="padding-top:40px;">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix dropdown">
                <a href="">
                  <i class="fa fa-angle-right"></i>
                  Limpieza
                </a>

                <ul class="dropdown-menu">
                  <li><a href="" value="1" class="cat"><i class="fa fa-angle-right"></i> Aseo personal</a></li>
                  <li><a href="" value="2" class="cat"><i class="fa fa-angle-right"></i> Limpieza general </a></li>
                </ul> 
              </li>
              <li class="list-group-item clearfix dropdown">
                <a href="" value="3" class="cat">
                  <i class="fa fa-angle-right"></i>
                   Nutrición 
                </a>

               
              </li>
              <li class="list-group-item clearfix"><a href="" value="4" class="cat"><i class="fa fa-angle-right"></i> Línea blanca  </a></li>
              <li class="list-group-item clearfix"><a href="" value="5" class="cat"><i class="fa fa-angle-right"></i> Víveres en general </a></li>
              <li class="list-group-item clearfix"><a href="" value="6" class="cat"><i class="fa fa-angle-right"></i>  Omnilife </a></li>
            </ul>
          </div>
          
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <!-- <h2>Artículos en promoción</h2> -->
            <div class="owl-carousel owl-carousel3" id="content-products">
              <!-- Products ajax technology -->
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        
        <script src="<?=base_url();?>assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
        <script>

   $(document).ready(function(){
     cat_prod(1);
     if (!$('#product-pop-up').is(':visible')){
      console.log("visible");
     } 
  });
  function cat_prod(cat){
    
     var url = "<?=site_url();?>/Productos/get_by_category";
       var data  = new Object();
       data["cat"] = cat;
      
       $.ajax({
       data:data,
       type: "POST",
       dataType: "json",
       url: url
       
       })
      .done(function( data, textStatus, jqXHR ) {
          var newData = JSON.stringify(data) 
          var res = jQuery.parseJSON(newData);
          $("#content-products").html("");
          $("#content-products").append(res.html);
          //console.log("mensaje ");
       })
      .fail(function( jqXHR, textStatus, errorThrown ) {
        if (console && console.log) {
         console.log( "La solicitud a fallado: " +  textStatus);
        }
      });
      
  }

  $(".cat").click(function(e){
         e.preventDefault();
       var url = "<?=site_url();?>/Productos/get_by_category";
       var data  = new Object();
       var cat = $(this).attr("value");
       cat_prod(cat);
  });

 
  $('[id*=pop-infop_]').click(function(){
     console.log('hola don pepito');
  });
   
          

        </script> }
