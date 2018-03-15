<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-wrapper">
                <div class="footer-top-left"><p class="footer-top-focus"><?= translate('p4'); ?></p>

                    <p class="footer-top-text"><?= translate('p5'); ?></p></div>
                <div class="footer-top-right">
                    <button onclick="window.location.href='<?= site_url('front/trabaja'); ?>'"
                            class="btn btn-blue btn-bold"><span><?= translate('iniciar_ahora_lang'); ?></span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="container">
            <div class="footer-main-wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="edugate-widget widget">
                                <div class="title-widget">CORFOPYM</div>
                                <div class="content-widget"><p><?= translate('p38');?></p>

                                    <div class="info-list">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i><a
                                                    href="mailto:<?= $empresa_object->email; ?>"><?= $empresa_object->email; ?></a></li>
                                            <li><i class="fa fa-phone"></i><?= $empresa_object->phone; ?></li>
                                            <li><i class="fa fa-map-marker"></i>
                                                <p><?= $empresa_object->address; ?></p>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="useful-link-widget widget">
                                <div class="title-widget"><?= translate('p39');?></div>
                                <div class="content-widget">
                                    <div class="useful-link-list">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i><a
                                                            href="<?= site_url('front/nosotros'); ?>"><?= translate("nosotros_lang")?></a></li>
                                                    <li><i class="fa fa-angle-right"></i><a
                                                            href="<?= site_url('front/certificaciones'); ?>"><?= translate("certificaciones_lang")?></a>
                                                    </li>
                                                    <li><i class="fa fa-angle-right"></i><a
                                                            href="<?= site_url('front/galeria'); ?>"><?= translate('galeria_lang')?></a></li>

                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <ul class="list-unstyled">
                                                    <?php foreach ($all_categories as $item_cat) { ?>
                                                        <li><i class="fa fa-angle-right"></i><a
                                                                href="<?= site_url('front/todoscursos/' . $item_cat->category_id); ?>"><?= $item_cat->name; ?></a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="gallery-widget widget">
                                <div class="title-widget">Twitter</div>
                                <div class="content-widget">
                                    <a href="https://twitter.com/corfopym" class="twitter-follow-button" data-show-count="false">Follow @CORFOPYM</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    <a class="twitter-timeline" data-height="250" href="https://twitter.com/corfopym">Tweets by CORFOPYM</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="mailing-widget widget">
                                <div class="title-widget">Facebook</div>




                                    <div style="margin-top: 25px;">
                                        <div class="fb-page" data-href="https://www.facebook.com/Corfopym.Capacitaciones" data-tabs="timeline" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Corfopym.Capacitaciones" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Corfopym.Capacitaciones">CORFOPYM</a></blockquote></div>
                                    </div>

                                   <br />

                                    <div class="socials">
                                        <a target="_blank"
                                           href="https://www.facebook.com/Corfopym.Capacitaciones"
                                           class="facebook"><i class="fa fa-facebook"></i></a>

                                        <a target="_blank" href="https://twitter.com/corfopym" class="twitter"><i
                                                class="fa fa-twitter"></i></a>

                                        <a target="_blank" href="https://www.youtube.com/user/corfopymtv" class="blog"><i
                                                class="fa fa-youtube"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hyperlink">
                <div class="pull-left hyper-left">
                    <ul class="list-inline">
                        <li><a href="<?= site_url('front/index'); ?>">Inicio</a></li>
                        <li><a href="<?= site_url('front/faq'); ?>">FAQ's</a></li>
                        <li><a href="#">Políticas de Privacidad</a></li>
                        <li><a href="#">Términos de Servicio</a></li>
                    </ul>
                </div>
                <div class="pull-right hyper-right"><?= translate("developed_by_lang"); ?> <a
                        href="http://www.mabuyasoft.com" target="_blank" style="color:#FFFFFF">Mabuyasoft</a></div>
            </div>
        </div>
    </div>
</footer>
<!-- LOADING
<div class="body-2 loading">
    <div class="dots-loader"></div>
</div>-->
<!-- JAVASCRIPT LIBS--><!--script.--><!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {--><!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');--><!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {--><!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');--><!--    }-->

</body>
</html>

<script type="text/javascript">
    $(function () {


    })
</script>