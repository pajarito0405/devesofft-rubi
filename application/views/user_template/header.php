<!DOCTYPE html>
<?php if (!$_SESSION['id_usuario']) {redirect();}
 
?>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Shering Economy</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Sharing Economy" name="description">
  <meta content="Sharing Economy economia compartida" name="keywords">
  <meta content="Sharing Economy" name="author">

  <meta property="og:site_name" content="Sharing Economy">
  <meta property="og:title" content="Sharing Economy">
  <meta property="og:description" content="Sharing Economy">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?=base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?=base_url();?>assets/pages/css/animate.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?=base_url();?>assets/pages/css/components.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/pages/css/slider.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url();?>assets/corporate/css/style.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="<?=base_url();?>assets/corporate/css/custom.css" rel="stylesheet">

  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <!-- <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div> -->
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container"> 
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>09.98.45.26.59 &nbsp; /&nbsp;  09.87.44.22.23</span></li>
                        <!-- BEGIN CURRENCIES -->
                        <!--<li class="shop-currencies">
                            <a href="javascript:void(0);">€</a>
                            <a href="javascript:void(0);">£</a>
                            <a href="javascript:void(0);" class="current">$</a>
                        </li>
                        <!-- END CURRENCIES 
                        
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                            <div class="langs-block-others-wrapper"><div class="langs-block-others">
                              <a href="javascript:void(0);">French</a>
                              <a href="javascript:void(0);">Germany</a>
                              <a href="javascript:void(0);">Turkish</a>
                            </div></div>
                        </li>
                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU --> 
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <?php $nombre=''; if($this->session->userdata('id_usuario')){$nombre=$this->session->userdata('nombre');}else{$nombre='user';} ?>
                        <img src="<?=base_url().$_SESSION['img_perfil'];?>" style="width:24px;height:24px;" class="img-rounded">
                        <li><span href="shop-account.html">Hola <?=$nombre;?>!</span></li>
                        <li><a href="<?=site_url();?>Front/mi_oficina_virtual">Mi oficina virtual</a></li>
                        <!--<li><a href="shop-wishlist.html">My Wishlist</a></li> -->
                        <li><a href="<?=site_url();?>Login/logout">Cerrar sesion</a></li>
                        <!-- <li><a href="page-login.html">Log In</a></li> -->
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="<?=base_url();?>Front/plan"><img src="<?=base_url();?>assets/corporate/img/logos/logo-sharing.png" alt="Sharing Economy" style="margin-top:-30px; width:128px; height:102px;"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <!--<div class="top-cart-info">
            <a href="javascript:void(0);" class="top-cart-info-count">3 items</a>
            <a href="javascript:void(0);" class="top-cart-info-value">$1260</a>
          </div> 
          <i class="fa fa-shopping-cart"></i> -->
                        
          <div class="top-cart-content-wrapper" >
            <div class="top-cart-content">
              <ul class="scroller" style="height: 250px;">
                <li>
                  <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
              </ul>
              <div class="text-right">
                <a href="shop-shopping-cart.html" class="btn btn-default">View Cart</a>
                <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
              </div>
            </div>
          </div>            
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li class="dropdown">
              <a class="dropdown-toggle"  href="<?=base_url();?>Productos/productos">
                Productos 
              </a>
                
              <!-- BEGIN DROPDOWN MENU -->
              <!--<ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="shop-product-list.html">Hi Tops <i class="fa fa-angle-right"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="shop-product-list.html">Second Level Link</a></li>
                    <li><a href="shop-product-list.html">Second Level Link</a></li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Second Level Link 
                        <i class="fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="shop-product-list.html">Third Level Link</a></li>
                        <li><a href="shop-product-list.html">Third Level Link</a></li>
                        <li><a href="shop-product-list.html">Third Level Link</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="shop-product-list.html">Running Shoes</a></li>
                <li><a href="shop-product-list.html">Jackets and Coats</a></li>
              </ul> -->
              <!-- END DROPDOWN MENU -->
            </li>
            <li class="dropdown dropdown-megamenu">
            <a class="dropdown-toggle" href="<?=base_url();?>Front/noticias">Noticias
            </a>
              <!-- <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-4 header-navigation-col">
                        <h4>Footwear</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Astro Trainers</a></li>
                          <li><a href="shop-product-list.html">Basketball Shoes</a></li>
                          <li><a href="shop-product-list.html">Boots</a></li>
                          <li><a href="shop-product-list.html">Canvas Shoes</a></li>
                          <li><a href="shop-product-list.html">Football Boots</a></li>
                          <li><a href="shop-product-list.html">Golf Shoes</a></li>
                          <li><a href="shop-product-list.html">Hi Tops</a></li>
                          <li><a href="shop-product-list.html">Indoor and Court Trainers</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Clothing</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Base Layer</a></li>
                          <li><a href="shop-product-list.html">Character</a></li>
                          <li><a href="shop-product-list.html">Chinos</a></li>
                          <li><a href="shop-product-list.html">Combats</a></li>
                          <li><a href="shop-product-list.html">Cricket Clothing</a></li>
                          <li><a href="shop-product-list.html">Fleeces</a></li>
                          <li><a href="shop-product-list.html">Gilets</a></li>
                          <li><a href="shop-product-list.html">Golf Tops</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Accessories</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Belts</a></li>
                          <li><a href="shop-product-list.html">Caps</a></li>
                          <li><a href="shop-product-list.html">Gloves, Hats and Scarves</a></li>
                        </ul>

                        <h4>Clearance</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Jackets</a></li>
                          <li><a href="shop-product-list.html">Bottoms</a></li>
                        </ul>
                      </div>
                      <div class="col-md-12 nav-brands">
                        <ul>
                          <li><a href="shop-product-list.html"><img title="esprit" alt="esprit" src="assets/pages/img/brands/esprit.jpg"></a></li>
                          <li><a href="shop-product-list.html"><img title="gap" alt="gap" src="<?=base_url();?>assets/pages/img/brands/gap.jpg"></a></li>
                          <li><a href="shop-product-list.html"><img title="next" alt="next" src="<?=base_url();?>assets/pages/img/brands/next.jpg"></a></li>
                          <li><a href="shop-product-list.html"><img title="puma" alt="puma" src="<?=base_url();?>assets/pages/img/brands/puma.jpg"></a></li>
                          <li><a href="shop-product-list.html"><img title="zara" alt="zara" src="<?=base_url();?>assets/pages/img/brands/zara.jpg"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul> -->
            </li>
            <li><a href="<?=base_url();?>Front/sobre_nosotros">Sobre nosotros</a></li>
            <li><a href="<?=base_url();?>Front/preguntas_frecuentes">Faq</a></li>
            <!--<li class="dropdown dropdown100 nav-catalogue">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Omnylife
                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/products/model4.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                          </div>
                          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                          <div class="pi-price">$29.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/products/model3.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                          </div>
                          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                          <div class="pi-price">$29.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/products/model7.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                          </div>
                          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                          <div class="pi-price">$29.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/products/model4.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                          </div>
                          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                          <div class="pi-price">$29.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li> -->
            <li class="dropdown">
              <a class="dropdown-toggle" href="<?=base_url();?>Front/contactanos">
                Contactanos 
                
              </a>
                
              <!-- <ul class="dropdown-menu">
                <li class="active"><a href="shop-index.html">Home Default</a></li>
                <li><a href="shop-index-header-fix.html">Home Header Fixed</a></li>
                <li><a href="shop-index-light-footer.html">Home Light Footer</a></li>
                <li><a href="shop-product-list.html">Product List</a></li>
                <li><a href="shop-search-result.html">Search Result</a></li>
                <li><a href="shop-item.html">Product Page</a></li>
                <li><a href="shop-shopping-cart-null.html">Shopping Cart (Null Cart)</a></li>
                <li><a href="shop-shopping-cart.html">Shopping Cart</a></li>
                <li><a href="shop-checkout.html">Checkout</a></li>
                <li><a href="shop-about.html">About</a></li>
                <li><a href="shop-contacts.html">Contacts</a></li>
                <li><a href="shop-account.html">My account</a></li>
                <li><a href="shop-wishlist.html">My Wish List</a></li>
                <li><a href="shop-goods-compare.html">Product Comparison</a></li>
                <li><a href="shop-standart-forms.html">Standart Forms</a></li>
                <li><a href="shop-faq.html">FAQ</a></li>
                <li><a href="shop-privacy-policy.html">Privacy Policy</a></li>
                <li><a href="shop-terms-conditions-page.html">Terms &amp; Conditions</a></li>
              </ul> -->
            </li>
            
            
            <!--<li><a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes&amp;utm_source=download&amp;utm_medium=banner&amp;utm_campaign=metronic_frontend_freebie" target="_blank">Admin theme</a></li> -->

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
    <script src="<?=base_url();?>assets/plugins/jquery.min.js" type="text/javascript"></script>
        
    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
        
            <!-- Indicators -->
            <?php
             $class = array(0,1,2,3); 
             $this->uri->segment(1); // controller
             $this->uri->segment(2); // action
             $this->uri->segment(3); // 1stsegment
             $this->uri->segment(4); // 2ndsegment
             if(($this->uri->segment(1) == 'Front') && ($this->uri->segment(2) == 'plan'))
             { $class[2] ="active";
             }elseif(($this->uri->segment(1) == 'Front') && ($this->uri->segment(2) == 'preguntas_frecuentes')){ 
               $class[3] ="active"; 
             }elseif(($this->uri->segment(1) == 'Front') && ($this->uri->segment(2) == 'contactanos')){
               $class[1] ="active";
             }else{
               for($i=0;$i<=3;$i++){$class[$i]='';} 
               $class[0] ="active";
             }?>
            <ol class="carousel-indicators">
                <li  data-target="#carousel-example-generic" data-slide-to="0" ></li>
                <li  data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li  data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li  data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox"> 
                <!-- First slide -->
                <div id="d_1" class="item carousel-item-four <?=$class[0];?>">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 text-uppercase" data-animation="animated fadeInDown">
                            ¿QUIERES SER REALMENTE FELIZ?
                                 <br/><!--span class="color-red-v2"></span--><br/> 
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">La felicidad depende de ti ¡está en tus manos! </p>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div id="d_2" class="item carousel-item-five <?=$class[1];?>">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                                ¿Te gustaria ser independiente?
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                                ¿Manejando Tu Propio Tiempo Y Con ingresos constantes? 
                            </p>
                            <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                                Tú oportunidad está aquí! 
                            </p>
                            <a class="carousel-btn" href="<?=base_url();?>/Front/contactanos" data-animation="animated fadeInUp">Contactanos!</a>
                        </div> <br>
                        <img class="carousel-position-five animate-delay hidden-sm hidden-xs" src="assets/pages/img/shop-slider/slide2/price.png" alt="" data-animation="animated zoomIn">
                    </div>
                </div>

                <!-- Third slide -->
                <div id="d_3" class="item carousel-item-six <?=$class[2];?>">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
                               
                            </span>
                        
                            
                              <p class="carousel-subtitle-v4 " data-animation="animated fadeInDown">
                                Si piensas que saber es costoso, Más costoso es no saber!
                              </p>
                              <p class="carousel-subtitle-v3 " data-animation="animated fadeInDown">
                                Afíliate ya!!!
                              </p>
                            
                        </div>
                    </div>
                </div>

                <!-- Fourth slide -->
                <div id="d_4" class="item carousel-item-seven <?=$class[3];?>">
                   <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                 No Hay Libertad, A Menos Que Haya Libertad Económica!
                                </h2>
                                <a class="carousel-btn" href="<?=base_url();?>Front/plan" data-animation="animated fadeInUp">Afiliate ya!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>