
<div class="main">

      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?=base_url();?>Front/plan">Home</a></li>
            <li><a href="<?=base_url();?>Productos">Productos</a></li>
            <li class="active"><?=$p->nombre;?></li>
        </ul>
        <br> <br>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <!-- <div class="sidebar col-md-3 col-sm-5">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Ladies</a></li>
              <li class="list-group-item clearfix dropdown active">
                <a href="shop-product-list.html" class="collapsed">
                  <i class="fa fa-angle-right"></i>
                  Mens
                  
                </a>
                <ul class="dropdown-menu" style="display:block;">
                  <li class="list-group-item dropdown clearfix active">
                    <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>
                      <ul class="dropdown-menu" style="display:block;">
                        <li class="list-group-item dropdown clearfix">
                          <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>
                          <ul class="dropdown-menu">
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                          </ul>
                        </li>
                        <li class="list-group-item dropdown clearfix active">
                          <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Sport  </a>
                          <ul class="dropdown-menu" style="display:block;">
                            <li class="active"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                  <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
                </ul>
              </li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Kids</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Accessories</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sports</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Brands</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Electronics</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Home &amp; Garden</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Custom Link</a></li>
            </ul>

            <div class="sidebar-products clearfix">
              <h2>Los mas vendidos</h2>
              <div class="item">
                <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/products/k1.jpg" alt="Some Shoes in Animal with Cut Out" style="width:60px;height:60px;"></a>
                <h3><a href="shop-item.html">Articulo 1</a></h3>
                <div class="price">$31.00</div>
              </div>
              <div class="item">
                <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/products/k4.jpg" alt="Some Shoes in Animal with Cut Out" style="width:60px;height:60px;"></a>
                <h3><a href="shop-item.html">Articulo 2</a></h3>
                <div class="price">$23.00</div>
              </div>
              <div class="item">
                <a href="shop-item.html"><img src="<?=base_url();?>assets/pages/img/products/k3.jpg" alt="Some Shoes in Animal with Cut Out" style="width:60px;height:60px;"></a>
                <h3><a href="shop-item.html">Articulo 3</a></h3>
                <div class="price">$86.00</div>
              </div>
            </div>
          </div> 
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-2"> </div>
          <div class="col-md-9 col-sm-7" style="height:1400px;">
            <div class="product-page">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image">
                    <img src="<?=base_url().$p->img_producto;?>" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="<?=base_url().$p->img_producto;?>">
                  </div>
                  <!--div class="product-other-images">
                    <a href="<?=base_url().$p->img1;?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?=base_url().$p->img1;?>" style="width:60px;height:70px;"></a>

                    <a href="<?=base_url().$p->img2;?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?=base_url().$p->img2;?>" style="width:60px;height:70px;"></a>

                    <a href="<?=base_url().$p->img3;?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?=base_url().$p->img3;?>" style="width:60px;height:70px;"></a>

                    <a href="<?=base_url().$p->img4;?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?=base_url().$p->img4;?>" style="width:60px;height:70px;"></a>
                  </div-->
                </div>
                <div class="col-md-6 col-sm-6">
                  <h1><?=$p->nombre;?></h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span><?=$p->precio;?></strong>
                      <em>$<span><?=$p->precio;?></span></em>
                    </div>
                    <div class="availability">
                      Disponible: <strong>En Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p><?=$p->resumen;?></p>
                  </div>
                  <!--div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div-->
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">A la carta</button>
                  </div>
                  <div class="review">
                    <input type="range" value="4" step="0.25" id="backing4">
                    <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                    </div>
                    <!--<a href="javascript:;">7 reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:;">Write a review</a> -->
                  </div>
                  <ul class="social-icons">
                    <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                    <li><a class="evernote" data-original-title="evernote" href="javascript:;"></a></li>
                    <li><a class="tumblr" data-original-title="tumblr" href="javascript:;"></a></li>
                  </ul>
                </div>

                <div class="product-page-content">
                  <ul id="myTab" class="nav nav-tabs">
                    <li><a href="#Description" data-toggle="tab">Descripción</a></li>
                    <!--<li><a href="#Information" data-toggle="tab">Información</a></li>
                    <li class="active"><a href="#Reviews" data-toggle="tab">Opiniones (2)</a></li> -->
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade" id="Description">
                      <p><?=$p->descripcion;?></p>
                    </div>
                    <div class="tab-pane fade" id="Information">
                      <!--table class="datasheet">
                        <tr>
                          <th colspan="2">Características adicionales</th>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Altura</td>
                          <td>21 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Peso</td>
                          <td>700 gr.</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Capacidad</td>
                          <td>10 person</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Ancho</td>
                          <td>14 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Material</td>
                          <td>plastico</td>
                        </tr>
                      </table-->
                    </div>
                    <!--<div class="tab-pane fade in active" id="Reviews">
                      
                      <div class="review-item clearfix">
                        <div class="review-item-submitted">
                          <strong>Bob</strong>
                          <em>30/12/2013 - 07:37</em>
                          <div class="rateit" data-rateit-value="5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                        </div>                                              
                        <div class="review-item-content">
                            <p>Sólo voy a centrarme en todas las cosas que tengo de la marca de cosmética de Carrefour: Les Cosmetiques y como podéis ver en la imagen la mayoría de cosas son de cuidado facial excepto una que es de cuidado corporal. En la foto véis el gel de Argán de Natural Honey, pero sobre él os hablaré más adelante, de momento os digo que huele fenomenal. Bueno, no me enrollo más y voy con la review, al final de la entrada tenéis un vídeo por si queréis verlo en lugar de leerlo, a gusto de todas oigan!! jejeje.</p>
                        </div>
                      </div>
                      <div class="review-item clearfix">
                        <div class="review-item-submitted">
                          <strong>Mary</strong>
                          <em>13/12/2013 - 17:49</em>
                          <div class="rateit" data-rateit-value="2.5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                        </div>                                              
                        <div class="review-item-content">
                            <p>Este es mi segundo paso en mi rutina de desmaquillado, tras desmaquillarme los ojos, cuando llevo bases de maquillaje o BB Creams muy cubrientes. Trae 250 ml y su precio es de tan solo 1 € así que por probar no perdemos mucho.  Yo masajeo toda la cara con ella, excepto los ojos, y la retiro con una esponjita vegetal. El resultado es bastante bueno ya que al pasar un disco con agua micelar sale prácticamente limpio.</p>
                        </div>
                      </div>

                    
                      <form action="#" class="reviews-form" role="form">
                        <h2>Escribe una opinion acerca de este producto</h2>
                        <div class="form-group">
                          <label for="name">Nombre <span class="require">*</span></label>
                          <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="review">Reseña <span class="require">*</span></label>
                          <textarea class="form-control" rows="8" id="review"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="email">Rating</label>
                          <input type="range" value="4" step="0.25" id="backing5">
                          <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                          </div>
                        </div>
                        <div class="padding-top-20">                  
                          <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                      </form>
                      
                    </div> -->
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40" style="margin-bottom:0px;">
          <div class="col-md-12 col-sm-12">
            <h2>Productos mas populares</h2>
            <div class="owl-carousel owl-carousel4">
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?=base_url();?>assets/pages/img/productos/electrodomesticos/electro8.jpg" class="img-responsive" alt="Berry Lace Dress" style="width:240px;height:300px;">
                    <div>
                      <a href="<?=base_url();?>assets/pages/img/productos/electrodomesticos/electro8.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Licuadora Oster</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Detalles</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?=base_url();?>assets/pages/img/productos/electrodomesticos/electro3.jpg" class="img-responsive" alt="Berry Lace Dress" style="width:240px;height:300px;">
                    <div>
                      <a href="<?=base_url();?>assets/pages/img/productos/electrodomesticos/electro3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Cocina 4 hornillas </a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Detalles</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?=base_url();?>assets/pages/img/productos/electrodomesticos/electro5.jpg" class="img-responsive" alt="Berry Lace Dress" style="width:240px;height:300px;">
                    <div>
                      <a href="<?=base_url();?>assets/pages/img/productos/electrodomesticos/electro5.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Ipad mini</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Detalles</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?=base_url();?>assets/pages/img/productos/electrodomesticos/electro6.jpg" class="img-responsive" alt="Berry Lace Dress" style="width:240px;height:300px;">
                    <div>
                      <a href="<?=base_url();?>assets/pages/img/productos/electrodomesticos/electro6.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Samsun galaxy S7</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Detalles</a>
                  <div class="sticker sticker-sale"></div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?=base_url();?>assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress" style="width:240px;height:300px;">
                    <div>
                      <a href="<?=base_url();?>assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Detalles</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?=base_url();?>assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress" style="width:240px;height:300px;">
                    <div>
                      <a href="<?=base_url();?>assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Detalles</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
      </div>
    </div>