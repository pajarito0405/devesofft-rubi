<!--
  #################################
    - THEMEPUNCH BANNER -
  #################################
  -->
<div id="dajy" class="fullscreen-container mtslide sliderbg fixed fullscreen-container-home">
    <div class="fullscreenbanner">
    
        <ul>
            <!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
           <?php foreach($galeria as $fotos){?> 
                <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                    <img src="<?=$fotos->img_principal;?>" alt="" />
                </li>
            <?php }?> 
        </ul>
        <div class="tp-bannertimer none"></div>
    </div>
</div>

<!--
    ##############################
     - ACTIVATE THE BANNER HERE -
    ##############################
    -->
<script type="text/javascript">
    var tpj = jQuery;
    tpj.noConflict();

    tpj(document).ready(function() {

        if (tpj.fn.cssOriginal != undefined)
            tpj.fn.css = tpj.fn.cssOriginal;

        tpj('.fullscreenbanner').revolution({
            delay: 4000,
            startwidth: 1170,
            startheight: 600,

            onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

            thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
            thumbHeight: 50,
            thumbAmount: 3,

            hideThumbs: 0,
            navigationType: "bullet", // bullet, thumb, none
            navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none

            navigationStyle: false, // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


            navigationHAlign: "left", // Vertical Align top,center,bottom
            navigationVAlign: "bottom", // Horizontal Align left,center,right
            navigationHOffset: 30,
            navigationVOffset: 30,

            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            touchenabled: "on", // Enable Swipe Function : on/off


            stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
            stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

            hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
            hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
            hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value


            fullWidth: "on", // Same time only Enable FullScreen of FullWidth !!
            fullScreen: "off", // Same time only Enable FullScreen of FullWidth !!


            shadow: 0 //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

        });


    });

</script>







<!-- WRAP -->
<div class="wrap cstyle03Home">

    <!--    <div class="container mt-130 z-index100">-->
    <div class="container z-index100">
        <div class="row">
            <!--            <div class="col-md-12" style="top:-137px;">-->
            <div class="col-md-12">
                <div class="bs-example bs-example-tabs cstyle04 font_black">

                    <ul class="nav nav-tabs" id="myTab">
                        <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#air2"><span class="icon-icono_bus"></span>  <span class="hidetext">Rutas</span>&nbsp;</a></li>
                    </ul>

                    <div class="tab-content2 tab-content2-home" id="myTabContent">
                        <div id="air2" class="tab-pane fade active in">
                            <div class="row m1 lbl">
                                <div class="col-xs-12 col-md-4 padding0">
                                    <div class="row m1 lbl">
                                        <div class="col-xs-6 col-md-6 hpadding5">
                                                <span class="font_black size13"><b>Origen</b></span>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Ciudad o terminal de origen" id="origen">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-default btn-direccion red" type="submit">
                                                            <span class="icon-icon-direccion-01 size20"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                        </div>
                                    
                                        <div class="col-xs-6 col-md-6 hpadding5">
                                                <span class="font_black size13"><b>Destino</b></span>
                                                <input type="text" class="form-control" placeholder="Ciudad o terminal de destino" id="destino">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-4 padding0">
                                    <div class="row m1 lbl">
                                        <div class="col-xs-6 col-md-6 hpadding5">
                                        <span class="font_black size13"><b>F. Salida</b></span>
                                            <div class="input-group">
                                                <span class="input-group-addon span-fecha"><i class="fal fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    
                                        <div class="col-xs-6 col-md-6 hpadding5">
                                        <span class="font_black size13"><b>F. Retorno</b></span>
                                            <div class="btn-group btn-group-vertical btn-g-check-home" data-toggle="buttons">
                                                <label class="btn label-check-fecha">
                                                <input type="checkbox" name='email1'>
                                                <i class="fa fa-2x fal fa-check-square"></i>
                                                <i class="fa fa-2x fas fa-check-square"></i> 
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon span-fecha"><i class="fal fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker4" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div>


                                    <!-- <div class="w50percent">
                                        <div class="wh90percent textleft">
                                            <span class="font_black size13"><b>F. Salida</b></span>
                                            <div class="input-group">
                                                <span class="input-group-addon span-fecha"><i class="fal fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="w50percentlast">
                                        <div class="wh90percent textleft right">
                                            <span class="font_black size13"><b>F. Retorno</b></span>
                                            <div class="btn-group btn-group-vertical btn-g-check-home" data-toggle="buttons">
                                                <label class="btn label-check-fecha">
                                                <input type="checkbox" name='email1'>
                                                <i class="fa fa-2x fal fa-check-square"></i>
                                                <i class="fa fa-2x fas fa-check-square"></i> 
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon span-fecha"><i class="fal fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker4" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                <div class="col-xs-12 col-md-4 padding0">
                                <div class="row m1 lbl">
                                        <div class="col-xs-6 col-md-5 hpadding5">
                                        <span class="font_black size13"><b>Pasajeros</b></span>
                                                <input type="text" class="form-control mySelectCalendar" placeholder="Adultos">
                                        </div>
                                    
                                        <div class="col-xs-6 col-md-7 hpadding5">
                                            <div class="row m1 lbl">
                                                <div class="col-xs-6 col-md-6 hpadding5">
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
                                                <div class="col-xs-6 col-md-6 padding0 text-right">
                                                    <form action="<?=base_url().'booking/rutas'?>">
                                                        <button type="submit" class="btn-search font_bold_quantify">Viajar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="lastminute2 lastminute2-home lcfix">
        <div class="container lmc">
            <img src="assets/images/rating-4.png" alt="" /><br/> LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
            <form action="list4.html">
                <button class="btn iosbtn font_bold_quantify" type="submit">Read more</button>
            </form>
        </div>

    </div>

    <div class="container">


        <div class="row content-carousel">
            <div class="col-md-12">
                <!-- Carousel -->
                <div class="wrapper">
                    <div class="list_carousel">
                        <ul id="foo">
                            <li>
                                <img src="assets/images/nuevo/ofertas_imagen1.jpg" alt="" />
                                <div class="m1">
                                    <a href=""><img src="assets/images/nuevo/icono_bus.svg" class="ver-mas"></a>
                                    <div class="row ">
                                        <div class="col-xs-8 col-md-8 div-viajes">
                                            <span class="font-size-ahorra font_bold">Viajes a</span><br> <span class="font-size-viajes font_black">Atacames</span>
                                        </div>
                                        <div class="col-xs-4 col-md-4 div-ahorro">
                                            <span class="font-size-ahorra font_bold">Ahorra</span> <br><span class="font-size-porcentaje font_black">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/nuevo/ofertas_imagen1.jpg" alt="" />

                                <div class="m1">
                                    <a href=""><img src="assets/images/nuevo/icono_bus.svg" class="ver-mas"></a>
                                    <div class="row ">
                                        <div class="col-xs-8 col-md-8 div-viajes">
                                            <span class="font-size-ahorra font_bold">Viajes a</span><br> <span class="font-size-viajes font_black">Ibarra</span>
                                        </div>
                                        <div class="col-xs-4 col-md-4 div-ahorro">
                                            <span class="font-size-ahorra font_bold">Ahorra</span> <br><span class="font-size-porcentaje font_black">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/nuevo/ofertas_imagen1.jpg" alt="" />
                                <div class="m1">
                                    <a href=""><img src="assets/images/nuevo/icono_bus.svg" class="ver-mas"></a>
                                    <div class="row ">
                                        <div class="col-xs-8 col-md-8 div-viajes">
                                            <span class="font-size-ahorra font_bold">Viajes a</span><br> <span class="font-size-viajes font_black">Latacunga</span>
                                        </div>
                                        <div class="col-xs-4 col-md-4 div-ahorro">
                                            <span class="font-size-ahorra font_bold">Ahorra</span> <br><span class="font-size-porcentaje font_black">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/nuevo/ofertas_imagen1.jpg" alt="" />
                                <div class="m1">
                                    <a href=""><img src="assets/images/nuevo/icono_bus.svg" class="ver-mas"></a>
                                    <div class="row ">
                                        <div class="col-xs-8 col-md-8 div-viajes">
                                            <span class="font-size-ahorra font_bold">Viajes a</span><br> <span class="font-size-viajes font_black">Riobamba</span>
                                        </div>
                                        <div class="col-xs-4 col-md-4 div-ahorro">
                                            <span class="font-size-ahorra font_bold">Ahorra</span> <br><span class="font-size-porcentaje font_black">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/nuevo/ofertas_imagen1.jpg" alt="" />
                                <div class="m1">
                                    <a href=""><img src="assets/images/nuevo/icono_bus.svg" class="ver-mas"></a>
                                    <div class="row ">
                                        <div class="col-xs-8 col-md-8 div-viajes">
                                            <span class="font-size-ahorra font_bold">Viajes a</span><br> <span class="font-size-viajes font_black">Ambato</span>
                                        </div>
                                        <div class="col-xs-4 col-md-4 div-ahorro">
                                            <span class="font-size-ahorra font_bold">Ahorra</span> <br><span class="font-size-porcentaje font_black">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/nuevo/ofertas_imagen1.jpg" alt="" />
                                <div class="m1">
                                    <a href=""><img src="assets/images/nuevo/icono_bus.svg" class="ver-mas"></a>
                                    <div class="row ">
                                        <div class="col-xs-8 col-md-8 div-viajes">
                                            <span class="font-size-ahorra font_bold">Viajes a</span><br> <span class="font-size-viajes font_black">Zamora Chinchipe Pastaza</span>
                                        </div>
                                        <div class="col-xs-4 col-md-4 div-ahorro">
                                            <span class="font-size-ahorra font_bold">Ahorra</span> <br><span class="font-size-porcentaje font_black">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <a id="prev_btn" class="prev" href="#"><img src="<?=base_url();?>assets/images/spacer.png" alt=""/></a>
                        <a id="next_btn" class="next" href="#"><img src="<?=base_url();?>assets/images/spacer.png" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /WRAP -->
    <!--</div>-->


    <!-- Javascript -->

    <!-- This page JS -->
