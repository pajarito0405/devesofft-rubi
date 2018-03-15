<!DOCTYPE html>
<html lang="es">
<head><title>CORFOPYM | Centro de Estudios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon-->
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?= base_url(); ?>assets_front/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url(); ?>assets_front/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
          content="<?= base_url(); ?>assets_front/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>assets_front/assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>assets_front/assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets_front/assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>assets_front/assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>assets_front/assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>assets_front/assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>assets_front/assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>assets_front/assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>assets_front/assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    -->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets_front/assets/css/color-1.css"
          id="color-skins">
    <!--link(type="text/css", rel='stylesheet', href='#', id="color-skins")-->
    <script src="<?= base_url(); ?>assets_front/assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?= base_url(); ?>assets_front/assets/libs/js-cookie/js.cookie.js"></script>
    <!--script.--><!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {-->
    <!--        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');-->
    <!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {-->
    <!--        $('#color-skins').attr('href', 'assets/css/color-1.css');--><!--    }--></head>
<body><!-- HEADER-->
<header><!-- not include--></header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-login rlp">
                    <div class="container">

                        <div class="login-wrapper rlp-wrapper" >
                            <div class="login-table rlp-table"><a href="<?= site_url(); ?>"><img
                                        style="height:200px;width:200px;" src="<?= base_url(); ?>assets_front/assets/images/logo-register.png"
                                        alt="hello-world" style="width:300px" class="login"/></a>
                                <?= get_message_from_operation(); ?>
                                <div class="login-title rlp-title"><?= translate('p1'); ?></div>
                                <?= form_open('login/auth'); ?>
                                <div class="login-form bg-w-form rlp-form" style="height:80px;">
                                    <div class="row">
                                        <div class="col-md-12"><label for="regemail"
                                                                      class="control-label form-label"><?= translate('email_lang'); ?>
                                                <span class="highlight">*</span></label><input id="regemail"
                                                                                               type="email"
                                                                                               name="email"
                                                                                               placeholder=""
                                                                                               class="form-control form-input"/>
                                            <!--p.help-block Warning !--></div>
                                        <div class="col-md-12"><label for="regpassword"
                                                                      class="control-label form-label"><?= translate('password_lang'); ?>
                                                <span class="highlight">*</span></label><input id="regpassword"
                                                                                               type="password"
                                                                                               name="password"
                                                                                               placeholder=""
                                                                                               class="form-control form-input"/>
                                            <!-- p.help-block Warning !--></div>
                                    </div>
                                </div>
                                <div class="login-submit">
                                    <button type="submit" class="btn btn-login btn-green"><span><?= translate("ingrese_lang");?></span></button>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<footer></footer>
<!-- LOADING--><!-- JAVASCRIPT LIBS--><!--script.-->
<!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {-->
<!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');-->
<!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {-->
<!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');--><!--    }-->
<script src="<?= base_url(); ?>assets_front/assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets_front/assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="<?= base_url(); ?>assets_front/assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets_front/assets/libs/appear/jquery.appear.js"></script>
<script src="<?= base_url(); ?>assets_front/assets/libs/count-to/jquery.countTo.js"></script>
<script src="<?= base_url(); ?>assets_front/assets/libs/wow-js/wow.min.js"></script>
<script src="<?= base_url(); ?>assets_front/assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="<?= base_url(); ?>assets_front/assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="<?= base_url(); ?>assets_front/assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="<?= base_url(); ?>assets_front/assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE--></body>
</html>