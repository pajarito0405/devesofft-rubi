<div class="container breadcrub">
    <div>
        <a class="homebtn left" href="#"></a>
        <div class="left">
            <ul class="bcrumbs">
                <li>/</li>
                <li><a href="#">Hotels</a></li>
                <li>/</li>
                <li><a href="#">U.S.A.</a></li>
                <li>/</li>
                <li><a href="#" class="active">New York</a></li>
            </ul>
        </div>
        <a class="backbtn right" href="#"></a>
    </div>
    <div class="clearfix"></div>
    <div class="brlines"></div>
</div>

<!-- CONTENT -->
<div class="container">
    <div class="container pagecontainer offset-0">

        <!-- FILTERS -->
        <div class="col-md-3 filters offset-0">
            <!-- TOP TIP -->
            <div class="filtertip">
                <div class="padding20">
                    <p class="size13"><span class="size18 bold counthotel">53</span> Hotels starting at</p>
                    <p class="size30 bold">$<span class="countprice"></span></p>
                    <p class="size13">Narrow results or <a href="#">view all</a></p>
                </div>
                <div class="tip-arrow"></div>
            </div>


            <div class="bookfilters hpadding20">

                <div class="bs-example bs-example-tabs">

                    <ul class="nav nav-tabs font_black" id="myTab">
                        <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#air2"><span class="icon-icono_bus"></span>  <span class="hidetext">Rutas</span>&nbsp;</a></li>
                    </ul>

                    <div class="" id="myTabContent">
                        <div id="air22" class="tab-pane fade active in">

                            <div class="col-md-12 padding5">
                                <div class="wh100percent textleft">
                                    <span class="font_black size13"><b>Origen</b></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Ciudad o terminal de origen" id="origen">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default btn-direccion red" type="submit">
                                                <span class="icon-icon-direccion-02 size20">
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 padding5">
                                <div class="wh100percent textleft">
                                    <span class="font_black size13"><b>Destino</b></span>
                                    <input type="text" class="form-control" placeholder="Ciudad o terminal de destino" id="destino">
                                </div>
                            </div>

                            <div class="col-md-12 padding5">
                                <div class="row">
                                    <div class="col-xs-8 col-md-8 ">
                                        <div class="wh100percent textleft">
                                            <span class="font_black size13"><b>F. Salida</b></span>
                                            <div class="input-group">
                                                <span class="input-group-addon span-fecha background_fecha"><i class="fal fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-md-4 ">
                                        <div class="radio radio-danger font_black">
                                            <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                            <label for="radio1">
                                                        Escalas&nbsp;&nbsp;&nbsp;
                                                    </label>
                                        </div>
                                        <div class="radio radio-danger font_black">
                                            <input type="radio" name="radio1" id="radio2" value="option2">
                                            <label for="radio2">
                                                        Express&nbsp;&nbsp;&nbsp;
                                                    </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12 padding5">
                                <div class="row">
                                    <div class="col-xs-8 col-md-8 ">
                                        <div class="wh100percent textleft">
                                            <span class="font_black size13"><b>F. Retorno</b></span>
                                            <div class="btn-group btn-group-vertical btn-g-check" data-toggle="buttons">
                                                <label class="btn label-check-fecha">
                                              <input type="checkbox" name='email1'>
                                              <i class="fa fa-2x fal fa-check-square"></i>
                                              <i class="fa fa-2x fas fa-check-square"></i> 
                                            </label>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon span-fecha background_fecha"><i class="fal fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker4" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-md-4 ">
                                        <div class="radio radio-danger font_black">
                                            <input type="radio" name="radior1" id="radio1r" value="option1" checked="">
                                            <label for="radio1">
                                                        Escalas&nbsp;&nbsp;&nbsp;
                                                    </label>
                                        </div>
                                        <div class="radio radio-danger font_black">
                                            <input type="radio" name="radio1r" id="radio2r" value="option2">
                                            <label for="radio2">
                                                        Express&nbsp;&nbsp;&nbsp;
                                                    </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 padding5">
                                <div class="wh100percent textleft">
                                    <span class="font_black size13"><b>Pasajeros</b></span>
                                    <input type="text" class="form-control mySelectCalendar" placeholder="Adultos">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="wh100percent text-center">
                                    <button type="submit" class="btn-search font_bold_quantify caps" id="btn_listar" >Viajar</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END OF BOOK FILTERS -->

            <div class="line2"></div>

            <div class="padding20title text-center hidden-xs">
                <div class="content_filtro text-center">
                    <img src="../assets/images/nuevo/icono_bus.svg" alt="" class="img_filtro img_h3_inline_block" />
                    <h3 class="font_black img_h3_inline_block h3_filtro font_black"> Filtros Avanzados</h3>
                </div>

            </div>
            <div class="line2 hidden-xs"></div>

            <div class="padding20title text-center hidden-xs">
                <h3>Rating</h3>
                <i class="fas fa-star yellow"></i>
                <i class="fas fa-star yellow"></i>
                <i class="fas fa-star yellow"></i>
                <i class="fas fa-star white"></i>
                <i class="fas fa-star white"></i>
            </div>




        </div>
        <!-- END OF FILTERS -->

        <!-- LIST CONTENT-->
        <div class="rightcontent col-md-9 offset-0">

            <div class="hpadding20">
                <!-- Top filters -->
                <div class="topsortby">
                    <div class="col-xs-12 col-md-2 padding5 red">

                        <!--                        <div class="left mt7 red">-->
                        <div class="row">
                            <div class="col-xs-6 col-md-3 text-right padding0">
                                <i class="fas fa-filter filtro_icon_font"></i>
                            </div>
                            <div class="col-xs-6 col-md-9 text-left padding0 font_black">
                                <b>Filtros Avanzados:</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 padding5">
                        <div class="wh90percent">
                            <select class="form-control mySelectBoxClass ">
                              <option selected>Cooperativas</option>
                              <option>Ascending Ascending Descending Ascending Ascending </option>
                              <option>Descending</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 padding5">
                        <div class="wh90percent">
                            <select class="form-control mySelectBoxClass ">
                              <option selected>Fecha de Salida</option>
                              <option>Ascending</option>
                              <option>Descending</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-2 padding5">
                        <div class="wh90percent">
                            <select class="form-control mySelectBoxClass ">
                              <option selected>Precios</option>
                              <option>Ascending</option>
                              <option>Descending</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-2 padding5">
                        <div class="wh90percent">
                            <select class="form-control mySelectBoxClass">
                              <option selected>Asientos</option>
                              <option>Ascending</option>
                              <option>Descending</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End of topfilters-->
            </div>
            <!-- End of padding -->

            <br/><br/>
            <div class="clearfix"></div>


            <div class="itemscontainer offset-1">

                <ul class="list-group" id="lista_boletos">
                    <!-- <li class="list-group-item item_cooperativas font_black">
                        <a href="<?=base_url().'booking/detalle_rutas'?>">
                            <div class="row">
                                <div class="col-xs-2 col-md-2 text-center padding2">
                                    <div class="listitem2 height_item centrar_verticalmente">
                                        <img src="http://intecap.edu.gt/galardon/wp-content/uploads/2016/11/masesa.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="hidden-xs hidden-sm text-center col-md-2 padding0">
                                    <div class="labelrightleft height_item">
                                        <span class="grey size13 text-left caps"><b>Cooperativa Costa Azul CICA</b></span><br/>
                                        <span class="size11 grey">TIPO</span><br/>
                                        <img src="../assets/images/nuevo/icon_tipo_asiento-01.svg" width="60" alt="" /><br/><br/><br/>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-md-1 text-center padding2">
                                    <div class="labelrightleft height_item ">
                                        <span class="size11 grey"><b>ASIENTOS</b></span><br/><br/>
                                        <span class="white background_asiento"><b>15</b></span><br/>

                                    </div>
                                </div>
                                <div class="col-xs-4 col-md-2 text-center padding2 line_heigth_item">
                                    <div class="labelrightleft height_item">
                                        <span class="size11 grey"><b>SALIDA</b></span><br/>
                                        <span class="grey bold size18"><b>07:30 AM</b></span><br/><br/>
                                        <span class="size11 grey">LLEGADA</span><br/>
                                        <span class="size11 grey">07:25 PM</span><br/>
                                    </div>
                                </div>
                                <div class="hidden-xs col-md-1 text-center padding2">
                                    <div class="labelrightleft height_item">
                                        <span class="size11 grey"><b>RATING</b></span><br/><br/>
                                        <div>
                                            <i class="fas fa-star yellow size10"></i>
                                            <i class="fas fa-star yellow size10"></i>
                                            <i class="fas fa-star yellow size10"></i>
                                            <i class="fas fa-star white size10"></i>
                                            <i class="fas fa-star white size10"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-md-2 text-center padding2">
                                    <div class="labelrightleft height_item ">
                                        <span class="size11 grey"><b>PRECIO</b></span><br/>
                                        <div class="background_precio line_heigth_item">
                                            <span class="red valor_lealtad font_bold_quantify"><b>36.00</b></span>
                                            <span class="size11 grey">USD</span>
                                        </div>
                                        <span class="size8 grey">OFERTA</span>
                                        <span class="size14 red bold">-10%</span><br/>
                                    </div>



                                </div>
                                <div class="hidden-xs col-md-2 text-center padding2">
                                    <div class="labelrightleft height_item">
                                        <span class="size11 grey"><b>COMPARTIR</b></span><br/><br/>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6 text-right padding0">
                                                <i class="fal fa-trophy-alt red filtro_icon_font"></i>
                                            </div>
                                            <div class="col-xs-6 col-md-6 text-left padding0 line_heigth_item">

                                                <span class="red size18 font_bold_quantify"><b>0.25</b></span><br/>
                                                <span class="size11 grey"><b>LEALTAD</b></span><br/>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9 col-md-10 text-left padding5">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination ">
                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-wifi-01 size22 "></i></li>
                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-corriente-01 size22"></i></li>
                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-snaks-01 size22"></i></li>
                                            <li class="page-item padding5 lgrey"><i class="fas icon-icon-rubi-serv-asafata-01 size22"></i></li>
                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-clima-01 size22"></i></li>
                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-equipaje-01 size22"></i></li>

                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-wifi-01 size22 "></i></li>
                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-corriente-01 size22"></i></li>
                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-snaks-01 size22"></i></li>
                                            <li class="page-item padding5 lgrey"><i class="fas icon-icon-rubi-serv-asafata-01 size22"></i></li>
                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-clima-01 size22"></i></li>
                                            <li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-equipaje-01 size22"></i></li>

                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-xs-3 col-md-2 text-right padding0">
                                    <form action="details.html">
                                        <button class="bookbtn mt1 caps font_bold_quantify" type="submit"><span class="icon-icono_bus"></span> Viajar</button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </li> -->

                </ul>

                <div class="clearfix"></div>
                <div class="offset-2">
                    <hr class="featurette-divider3">
                </div>


            </div>
            <!-- End of offset1-->

            <div class="hpadding20">

                <ul class="pagination right paddingbtm20">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>

            </div>

        </div>
        <!-- END OF LIST CONTENT-->



    </div>
    <!-- END OF container-->

</div>
<!-- END OF CONTENT -->
<script>
    $("#btn_listar").click(function(){
    var url = "<?=site_url();?>booking/get_data_bus";
    var data  = new Object();
    data = '';
    
    $.ajax({data:data, type: "POST", dataType: "json",url: url,})
    .done(function( data, textStatus, jqXHR ) {
        var newData = JSON.stringify(data) ;
         var res = jQuery.parseJSON(newData); 
         var item ='';
         console.log("data error_msg: "+ res.error_msg);
         if(res.error_msg != ""){ 
          // $("#errlog").html(res.error_msg);
          console.log("dio error aca : ");
         }else{
            console.log("datos : "+ res.datos.length);
           // for(i=0; i<data.datos.length; i++){
            $.each(res.datos, function(i,v) {
                console.log(v.nombre)
                item += '<li class="list-group-item item_cooperativas font_black">'+
                        '<a href="">'+
                            '<div class="row">'+
                                '<div class="col-xs-2 col-md-2 text-center padding2">'+
                                   '<div class="listitem2 height_item centrar_verticalmente">'+
                                        '<img src="'+v.img_perfil+'" alt="" />'+
                                    '</div>'+
                                '</div>'+
                                '<div class="hidden-xs hidden-sm text-center col-md-2 padding0">'+
                                    '<div class="labelrightleft height_item">'+
                                        '<span class="grey size13 text-left caps"><b>'+v.nombre+'</b></span><br/>'+
                                        '<span class="size11 grey">TIPO</span><br/>'+
                                        '<img src="../assets/images/nuevo/icon_tipo_asiento-01.svg" width="60" alt="" /><br/><br/><br/>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-xs-3 col-md-1 text-center padding2">'+
                                    '<div class="labelrightleft height_item ">'+
                                        '<span class="size11 grey"><b>ASIENTOS</b></span><br/><br/>'+
                                        '<span class="white background_asiento"><b>15</b></span><br/>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-xs-4 col-md-2 text-center padding2 line_heigth_item">'+
                                    '<div class="labelrightleft height_item">'+
                                        '<span class="size11 grey"><b>SALIDA</b></span><br/>'+
                                        '<span class="grey bold size18"><b>07:30 AM</b></span><br/><br/>'+
                                        '<span class="size11 grey">LLEGADA</span><br/>'+
                                        '<span class="size11 grey">07:25 PM</span><br/>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="hidden-xs col-md-1 text-center padding2">'+
                                    '<div class="labelrightleft height_item">'+
                                        '<span class="size11 grey"><b>RATING</b></span><br/><br/>'+
                                        '<div>'+
                                            '<i class="fas fa-star yellow size10"></i>'+
                                            '<i class="fas fa-star yellow size10"></i>'+
                                            '<i class="fas fa-star yellow size10"></i>'+
                                            '<i class="fas fa-star white size10"></i>'+
                                            '<i class="fas fa-star white size10"></i>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                               '<div class="col-xs-3 col-md-2 text-center padding2">'+
                                    '<div class="labelrightleft height_item ">'+
                                        '<span class="size11 grey"><b>PRECIO</b></span><br/>'+
                                        '<div class="background_precio line_heigth_item">'+
                                            '<span class="red valor_lealtad font_bold_quantify"><b>36.00</b></span>'+
                                            '<span class="size11 grey">USD</span>'+
                                        '</div>'+
                                        '<span class="size8 grey">OFERTA</span>'+
                                        '<span class="size14 red bold">-10%</span><br/>'+
                                   '</div>'+
                                '</div>'+
                                '<div class="hidden-xs col-md-2 text-center padding2">'+
                                    '<div class="labelrightleft height_item">'+
                                        '<span class="size11 grey"><b>COMPARTIR</b></span><br/><br/>'+
                                        '<div class="row">'+
                                            '<div class="col-xs-6 col-md-6 text-right padding0">'+
                                                '<i class="fal fa-trophy-alt red filtro_icon_font"></i>'+
                                            '</div>'+
                                            '<div class="col-xs-6 col-md-6 text-left padding0 line_heigth_item">'+
                                                '<span class="red size18 font_bold_quantify"><b>0.25</b></span><br/>'+
                                                '<span class="size11 grey"><b>LEALTAD</b></span><br/>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                           '<div class="row">'+
                                '<div class="col-xs-9 col-md-10 text-left padding5">'+
                                    '<nav aria-label="Page navigation example">'+
                                        '<ul class="pagination ">'+
                                            '<li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-wifi-01 size22 "></i></li>'+
                                            '<li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-corriente-01 size22"></i></li>'+
                                            '<li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-snaks-01 size22"></i></li>'+
                                            '<li class="page-item padding5 lgrey"><i class="fas icon-icon-rubi-serv-asafata-01 size22"></i></li>'+
                                            '<li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-clima-01 size22"></i></li>'+
                                            '<li class="page-item padding5 lgrey"><i class="far icon-icon-rubi-serv-equipaje-01 size22"></i></li>'+
                                        '</ul>'+
                                    '</nav>'+
                                '</div>'+
                                '<div class="col-xs-3 col-md-2 text-right padding0">'+
                                    '<form action="details.html">'+
                                        '<button class="bookbtn mt1 caps font_bold_quantify" type="submit"><span class="icon-icono_bus"></span> Viajar</button>'+
                                  '</form>'+
                                '</div>'+
                           '</div>'+
                 '</a>'+
                   '</li>';
            // }
        });
            $("#lista_boletos").html(item);
         }
     
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
 });
});
</script>