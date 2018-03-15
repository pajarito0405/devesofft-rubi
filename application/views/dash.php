<h4 class="page-title"><?= translate("dash_lang") ?></h4>

<!-- Shortcuts -->
<div class="block-area shortcut-area">
    <a class="shortcut tile" style="width: 100px; height: 100px;" href="">
        <img style="width: 60px; height: 60px;" src="<?= base_url(); ?>styles/inicio-rapido.png" alt=""/>
        <small class="t-overflow"><?= translate("inicio_rapido"); ?></small>
    </a>
    <a class="shortcut tile" href="" style="width: 100px; height: 100px;">
        <img style="width: 60px; height: 60px;" src="<?= base_url(); ?>styles/liderazgo.png" alt="">
        <small class="t-overflow"><?= translate("liderazgo"); ?></small>
    </a>
    <a class="shortcut tile" href="" style="width: 100px; height: 100px;">
        <img style="width: 60px; height: 60px;" src="<?= base_url(); ?>styles/binario.png" alt="">
        <small class="t-overflow"><?= translate("binario"); ?></small>
    </a>
    <a class="shortcut tile" href="" style="width: 100px; height: 100px;">
        <img style="width: 60px; height: 60px;" src="<?= base_url(); ?>styles/residual.png" alt="">
        <small class="t-overflow"><?= translate("residual"); ?></small>
    </a>
    <a class="shortcut tile" href="" style="width: 100px; height: 100px;">
        <img style="width: 60px; height: 60px;" src="<?= base_url(); ?>styles/pool.png" alt="">
        <small class="t-overflow"><?= translate("pool_millonario"); ?></small>
    </a>
    <a class="shortcut tile" href="" style="width: 100px; height: 100px;">
        <img style="width: 60px; height: 60px;" src="<?= base_url(); ?>styles/metas.png" alt="">
        <small class="t-overflow"><?= translate("metas_cumplidas"); ?></small>
    </a>
    <a class="shortcut tile" href="" style="width: 100px; height: 100px;">
        <img style="width: 60px; height: 60px;" src="<?= base_url(); ?>styles/acumulado.png" alt="">
        <small class="t-overflow"><?= translate("acumulado_mensual"); ?></small>
    </a>
</div>

<hr class="whiter"/>

<?php
$role_id = $this->session->userdata('role_id');
if ($role_id == 2) {
    ?>
    <!-- Quick Stats -->
    <div class="block-area">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="tile">
                    <div id="stats-line-3" class="pull-left"></div>
                    <div class="media-body">
                        <div class="row visible-lg">
                            <div class="col-lg-3">
                                <img class="visible-lg"
                                     style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                     src="<?= base_url(); ?>styles/back-11.png"/>
                            </div>
                            <div class="col-lg-9">
                                <div class="data" style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                    <span
                                        style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $directos; ?></span>
                                    <br/>
                                    <span><?= translate("aff_direct"); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="row visible-xs">
                            <div class="col-xs-12">
                                <img class="visible-xs"
                                     style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                     src="<?= base_url(); ?>styles/back-11.png"/>

                            </div>
                            <div class="col-xs-12">
                                <div style="margin-left: 25%; margin-bottom: 5px;">
                                    <span
                                        style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $directos; ?></span>
                                    <br/>
                                    <span><?= translate("aff_direct"); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="row visible-sm">
                            <div class="col-sm-6">

                                <img class="visible-lg visible-sm"
                                     style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                     src="<?= base_url(); ?>styles/back-11.png"/>
                            </div>
                            <div class="col-sm-6">
                                <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                    <span
                                        style="font-weight: bold; font-size: 16px; font-family: sans-serif;"><?= $directos; ?></span>
                                    <br/>
                                    <span><?= translate("aff_direct"); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="row visible-md">
                            <div class="col-md-5">

                                <img class="visible-md"
                                     style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                     src="<?= base_url(); ?>styles/back-11.png"/>
                            </div>
                            <div class="col-md-6">
                                <div style="margin-top: 30px; margin-left: 10px;">
                                    <span
                                        style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= $directos; ?></span>
                                    <br/>
                                    <span style="font-size: 10px;"><?= translate("aff_direct"); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="tile">
                    <div id="stats-line-3" class="pull-left"></div>
                    <div class="media-body">
                        <div class="row visible-lg">
                            <div class="col-lg-3">
                                <img class="visible-lg"
                                     style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                     src="<?= base_url(); ?>styles/back-12.png"/>
                            </div>
                            <div class="col-lg-9">
                                <div class="data" style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                    <span
                                        style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $my_net; ?></span>
                                    <br/>
                                    <span><?= translate("your_network"); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="row visible-xs">
                            <div class="col-xs-12">
                                <img class="visible-xs"
                                     style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                     src="<?= base_url(); ?>styles/back-12.png"/>

                            </div>
                            <div class="col-xs-12">
                                <div style="margin-left: 25%; margin-bottom: 5px;">
                                    <span
                                        style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $my_net; ?></span>
                                    <br/>
                                    <span><?= translate("your_network"); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="row visible-sm">
                            <div class="col-sm-6">

                                <img class="visible-lg visible-sm"
                                     style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                     src="<?= base_url(); ?>styles/back-12.png"/>
                            </div>
                            <div class="col-sm-6">
                                <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                    <span
                                        style="font-weight: bold; font-size: 16px; font-family: sans-serif;"><?= $my_net; ?></span>
                                    <br/>
                                    <span><?= translate("your_network"); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="row visible-md">
                            <div class="col-md-5">

                                <img class="visible-md"
                                     style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                     src="<?= base_url(); ?>styles/back-12.png"/>
                            </div>
                            <div class="col-md-6">
                                <div style="margin-top: 30px; margin-left: 10px;">
                                    <span
                                        style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= $my_net; ?></span>
                                    <br/>
                                    <span style="font-size: 10px;"><?= translate("your_network"); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="tile">

                    <div id="stats-line-4" class="pull-left"></div>

                    <div class="media-body">
                        <?php
                        $qua_id = $this->session->userdata('qualification_id');
                        if ($qua_id == 0) {
                            ?>
                            <div class="row visible-lg">
                                <div class="col-lg-3">
                                    <img class="visible-lg"
                                         style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-20.png"/>
                                </div>
                                <div class="col-lg-9">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= translate("emprendedor_lang"); ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-xs">
                                <div class="col-xs-12">
                                    <img class="visible-xs"
                                         style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-20.png"/>

                                </div>
                                <div class="col-xs-12">
                                    <div style="margin-left: 25%; margin-bottom: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= translate("emprendedor_lang"); ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-sm">
                                <div class="col-sm-6">

                                    <img class="visible-lg visible-sm"
                                         style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-20.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 16px; font-family: sans-serif;"><?= translate("emprendedor_lang"); ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-md">
                                <div class="col-md-5">

                                    <img class="visible-md"
                                         style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-20.png"/>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-top: 30px; margin-left: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= translate("emprendedor_lang"); ?></span>
                                        <br/>
                                        <span style="font-size: 10px;"><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>


                        <?php } elseif ($qua_id == 5) { //marques ?>

                            <div class="row visible-lg">
                                <div class="col-lg-3">
                                    <img class="visible-lg"
                                         style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-15.png"/>
                                </div>
                                <div class="col-lg-9">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-xs">
                                <div class="col-xs-12">
                                    <img class="visible-xs"
                                         style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-15.png"/>

                                </div>
                                <div class="col-xs-12">
                                    <div style="margin-left: 25%; margin-bottom: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-sm">
                                <div class="col-sm-6">

                                    <img class="visible-lg visible-sm"
                                         style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-15.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 16px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-md">
                                <div class="col-md-5">

                                    <img class="visible-md"
                                         style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-15.png"/>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-top: 30px; margin-left: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span style="font-size: 10px;"><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($qua_id == 6) { // duke?>
                            <div class="row visible-lg">
                                <div class="col-lg-3">
                                    <img class="visible-lg"
                                         style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-16.png"/>
                                </div>
                                <div class="col-lg-9">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-xs">
                                <div class="col-xs-12">
                                    <img class="visible-xs"
                                         style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-16.png"/>

                                </div>
                                <div class="col-xs-12">
                                    <div style="margin-left: 25%; margin-bottom: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-sm">
                                <div class="col-sm-6">

                                    <img class="visible-lg visible-sm"
                                         style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-16.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 16px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-md">
                                <div class="col-md-5">

                                    <img class="visible-md"
                                         style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-16.png"/>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-top: 30px; margin-left: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span style="font-size: 10px;"><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($qua_id == 7) { //rey ?>
                            <div class="row visible-lg">
                                <div class="col-lg-3">
                                    <img class="visible-lg"
                                         style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-14.png"/>
                                </div>
                                <div class="col-lg-9">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-xs">
                                <div class="col-xs-12">
                                    <img class="visible-xs"
                                         style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-14.png"/>

                                </div>
                                <div class="col-xs-12">
                                    <div style="margin-left: 25%; margin-bottom: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-sm">
                                <div class="col-sm-6">

                                    <img class="visible-lg visible-sm"
                                         style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-14.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 16px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-md">
                                <div class="col-md-5">

                                    <img class="visible-md"
                                         style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-14.png"/>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-top: 30px; margin-left: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span style="font-size: 10px;"><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } else { // emperador?>
                            <div class="row visible-lg">
                                <div class="col-lg-3">
                                    <img class="visible-lg"
                                         style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-13.png"/>
                                </div>
                                <div class="col-lg-9">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-xs">
                                <div class="col-xs-12">
                                    <img class="visible-xs"
                                         style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-13.png"/>

                                </div>
                                <div class="col-xs-12">
                                    <div style="margin-left: 25%; margin-bottom: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-sm">
                                <div class="col-sm-6">

                                    <img class="visible-lg visible-sm"
                                         style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-13.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 16px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-md">
                                <div class="col-md-5">

                                    <img class="visible-md"
                                         style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-13.png"/>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-top: 30px; margin-left: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= $jerarquia->name; ?></span>
                                        <br/>
                                        <span style="font-size: 10px;"><?= translate("jerarquia_lang"); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="tile">
                    <div id="stats-line" class="pull-left"></div>
                    <div class="media-body">

                        <?php
                        $aff_type = $this->session->userdata('affiliation_type_id');
                        if ($aff_type == 1) {
                            ?>
                            <div class="row visible-lg">
                                <div class="col-lg-6">
                                    <img class="visible-lg"
                                         style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-19.png"/>
                                </div>
                                <div class="col-lg-6">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-xs">
                                <div class="col-xs-12">
                                    <img class="visible-xs"
                                         style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-19.png"/>

                                </div>
                                <div class="col-xs-12">
                                    <div style="margin-left: 25%; margin-bottom: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-sm">
                                <div class="col-sm-5">

                                    <img class="visible-lg visible-sm"
                                         style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-19.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <div style="margin-top: 30px; margin-right: 5px; text-align: right;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-md">
                                <div class="col-md-4">

                                    <img class="visible-md"
                                         style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-19.png"/>
                                </div>
                                <div class="col-md-8">
                                    <div style="margin-top: 30px; margin-left: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>


                        <?php } elseif ($aff_type == 2) { ?>

                            <div class="row visible-lg">
                                <div class="col-lg-6">
                                    <img class="visible-lg"
                                         style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-18.png"/>
                                </div>
                                <div class="col-lg-6">
                                    <div style="margin-top: 30px; text-align: right; margin-right: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-xs">
                                <div class="col-xs-12">
                                    <img class="visible-xs"
                                         style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-18.png"/>

                                </div>
                                <div class="col-xs-12">
                                    <div style="margin-left: 25%; margin-bottom: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-sm">
                                <div class="col-sm-6">

                                    <img class="visible-lg visible-sm"
                                         style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-18.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <div style="margin-top: 30px; margin-right: 5px; text-align: right;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-md">
                                <div class="col-md-5">

                                    <img class="visible-md"
                                         style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-18.png"/>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-top: 30px; margin-right: 5px; text-align: right;">
                                        <span
                                            style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="row visible-lg">
                                <div class="col-lg-6">
                                    <img class="visible-lg"
                                         style="margin-left: 2%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-17.png"/>
                                </div>
                                <div class="col-lg-4">
                                    <div style="margin-top: 30px; margin-left: 15px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-xs">
                                <div class="col-xs-12">
                                    <img class="visible-xs"
                                         style="margin-left: 25%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-17.png"/>

                                </div>
                                <div class="col-xs-12">
                                    <div style="margin-left: 25%; margin-bottom: 5px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-sm">
                                <div class="col-sm-6">

                                    <img class="visible-lg visible-sm"
                                         style="margin-left: 5%; width: 100px; height: 100px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-17.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <div style="margin-top: 30px; margin-left: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 20px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row visible-md">
                                <div class="col-md-5">

                                    <img class="visible-md"
                                         style="margin-left: 5%; width: 60px; height: 60px; margin-top: 10px; margin-bottom: 10px;"
                                         src="<?= base_url(); ?>styles/back-17.png"/>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-top: 30px; margin-left: 10px;">
                                        <span
                                            style="font-weight: bold; font-size: 12px; font-family: sans-serif;"><?= $aff_type_object->name; ?></span>
                                        <br/>
                                        <span><?= translate("aff_type_lang"); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <hr class="whiter"/>
<?php } ?>
<!-- Main Widgets -->

<div class="block-area">
    <div class="row">
        <div class="col-md-8">
            <!-- Main Chart -->
            <div class="tile">
                <h2 class="tile-title"><?= translate("aff_stats"); ?></h2>

                <div class="p-10">
                    <div id="line-chart" class="main-chart" style="height: 250px"></div>

                    <div class="chart-info">
                        <ul class="list-unstyled">
                            <li class="m-b-10">
                                <?= translate("total_aff"); ?>: <span
                                    style="font-weight: bold; color: orange;"><?= $total_aff; ?></span>

                            </li>
                            <li>
                                <small>
                                    <?= translate('start_affiliation'); ?> <?= $start_graph; ?>

                                </small>
                                <div class="progress progress-small">
                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                         aria-valuenow="<?= $percent_start; ?>" aria-valuemin="0" aria-valuemax="100"
                                         style="width: <?= $percent_start; ?>%"></div>
                                </div>
                            </li>
                            <li>
                                <small>
                                    <?= translate('professional_affiliation'); ?> <?= $pro_graph; ?>

                                </small>
                                <div class="progress progress-small">
                                    <div class="progress-bar progress-bar-info" role="progressbar"
                                         aria-valuenow="<?= $percent_pro; ?>" aria-valuemin="0" aria-valuemax="100"
                                         style="width: <?= $percent_pro; ?>%"></div>
                                </div>
                            </li>

                            <li>
                                <small>
                                    <?= translate('legend_affiliation'); ?> <?= $legend_graph; ?>

                                </small>
                                <div class="progress progress-small">
                                    <div class="progress-bar progress-bar-success" role="progressbar"
                                         aria-valuenow="<?= $percent_legend; ?>" aria-valuemin="0" aria-valuemax="100"
                                         style="width: <?= $percent_legend; ?>%"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Pies -->
            <div class="tile text-center">
                <div class="tile-dark p-10">
                    <?php foreach ($quas as $q) { ?>
                        <div class="pie-chart-tiny" data-percent="<?= $q->porciento; ?>">
                            <span class="percent"></span>
                            <span class="pie-title"><?= $q->name; ?> </span>
                        </div>

                    <?php } ?>

                </div>
            </div>

            <!--  Recent Postings -->
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <h2 class="tile-title">Recent Postings</h2>


                        <div class="listview narrow">
                            <div class="media p-l-5">
                                <div class="pull-left">
                                    <img width="40" src="<?= base_url(); ?>back_template/img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">2 Hours ago by Adrien San</small>
                                    <br/>
                                    <a class="t-overflow" href="">Cras molestie fermentum nibh, ac semper</a>

                                </div>
                            </div>
                            <div class="media p-l-5">
                                <div class="pull-left">
                                    <img width="40" src="<?= base_url(); ?>back_template/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">5 Hours ago by David Villa</small>
                                    <br/>
                                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat</a>

                                </div>
                            </div>
                            <div class="media p-l-5">
                                <div class="pull-left">
                                    <img width="40" src="<?= base_url(); ?>back_template/img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">On 15/12/2013 by Mitch bradberry</small>
                                    <br/>
                                    <a class="t-overflow" href="">Cras pulvinar euismod nunc quis gravida. Suspendisse
                                        pharetra</a>

                                </div>
                            </div>
                            <div class="media p-l-5">
                                <div class="pull-left">
                                    <img width="40" src="<?= base_url(); ?>back_template/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">On 14/12/2013 by Mitch bradberry</small>
                                    <br/>
                                    <a class="t-overflow" href="">Cras pulvinar euismod nunc quis gravida. </a>

                                </div>
                            </div>
                            <div class="media p-l-5">
                                <div class="pull-left">
                                    <img width="40" src="<?= base_url(); ?>back_template/img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">On 13/12/2013 by Mitch bradberry</small>
                                    <br/>
                                    <a class="t-overflow" href="">Integer a eros dapibus, vehicula quam accumsan,
                                        tincidunt purus</a>

                                </div>
                            </div>
                            <div class="media p-5 text-center l-100">
                                <a href="">
                                    <small>VIEW ALL</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tasks to do -->

            </div>
            <div class="clearfix"></div>
        </div>

        <div class="col-md-4">
            <!-- USA Map -->
            <div class="tile">
                <h2 class="tile-title">Live Visits</h2>

                <div class="tile-config dropdown">
                    <a data-toggle="dropdown" href="" class="tile-menu"></a>
                    <ul class="dropdown-menu animated pull-right text-right">
                        <li><a href="">Refresh</a></li>
                        <li><a href="">Settings</a></li>
                    </ul>
                </div>

                <div id="usa-map"></div>
            </div>

            <!-- Dynamic Chart -->
            <div class="tile">
                <h2 class="tile-title">Server Process</h2>

                <div class="tile-config dropdown">
                    <a data-toggle="dropdown" href="" class="tile-menu"></a>
                    <ul class="dropdown-menu animated pull-right text-right">
                        <li><a href="">Refresh</a></li>
                        <li><a href="">Settings</a></li>
                    </ul>
                </div>

                <div class="p-t-10 p-r-5 p-b-5">
                    <div id="dynamic-chart" style="height: 200px"></div>
                </div>

            </div>

            <!-- Activity -->
            <div class="tile">
                <h2 class="tile-title"><?= translate("social_network_act"); ?></h2>


                <div style="text-align: center;">


                    <div class="fb-page" data-href="https://www.facebook.com/WanikikiNetwork?fref=ts" data-width="500"
                         data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                         data-show-facepile="true" data-show-posts="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/WanikikiNetwork?fref=ts"><a
                                    href="https://www.facebook.com/WanikikiNetwork?fref=ts">Wanikiki</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Chat -->

</section>

<script type="text/javascript">
    $(function () {

        var json_encode = JSON.parse('<?= $graph_value; ?>');
        var arr_result = [];
        var cont = 0;
        for (var i = 0; i < json_encode.length; i++) {
            for (var j = 0; j < json_encode[i].length; j++) {
                var temp = [json_encode[i][j][0], json_encode[i][j][1]];
                arr_result[cont++] = temp;
            }
        }
        console.log(arr_result);
        if ($('#line-chart')[0]) {

            var d1 = [[json_encode[0][0], json_encode[0][1]], [json_encode[1][0], json_encode[1][1]], [json_encode[2][0], json_encode[2][1]], [json_encode[3][0], json_encode[3][1]], [json_encode[4][0], json_encode[4][1]], [json_encode[5][0], json_encode[5][1]], [json_encode[6][0], json_encode[6][1]], [json_encode[7][0], json_encode[7][1]], [json_encode[8][0], json_encode[8][1]], [json_encode[9][0], json_encode[9][1]], [json_encode[10][0], json_encode[10][1]], [json_encode[11][0], json_encode[11][1]]];

            $.plot('#line-chart', [{
                    data: d1,
                    label: "<?= translate('afiliaciones_lang'); ?>",

                },],

                {
                    series: {
                        lines: {
                            show: true,
                            lineWidth: 1,
                            fill: 0.25,
                        },

                        color: 'rgba(255,255,255,0.7)',
                        shadowSize: 0,
                        points: {
                            show: true,
                        }
                    },

                    yaxis: {
                        min: 0,
                        max: <?= $max;?>,
                        tickColor: 'rgba(255,255,255,0.15)',
                        tickDecimals: 0,
                        font: {
                            lineHeight: 13,
                            style: "normal",
                            color: "rgba(255,255,255,0.8)",
                        },
                        shadowSize: 0,
                    },
                    xaxis: {
                        tickColor: 'rgba(255,255,255,0)',
                        tickDecimals: 0,
                        font: {
                            lineHeight: 13,
                            style: "normal",
                            color: "rgba(255,255,255,0.8)",
                        }
                    },
                    grid: {
                        borderWidth: 1,
                        borderColor: 'rgba(255,255,255,0.25)',
                        labelMargin: 10,
                        hoverable: true,
                        clickable: true,
                        mouseActiveRadius: 6,
                    },
                    legend: {
                        show: false
                    }
                });

            $("#line-chart").bind("plothover", function (event, pos, item) {
                if (item) {
                    var x = item.datapoint[0].toFixed(0),
                        y = item.datapoint[1].toFixed(0);
                    var months = ['<?= translate("jan"); ?>', '<?= translate("feb"); ?>', '<?= translate("mar"); ?>', '<?= translate("apr"); ?>', '<?= translate("may"); ?>', '<?= translate("jun"); ?>', '<?= translate("jul"); ?>', '<?= translate("ago"); ?>', '<?= translate("sep"); ?>', '<?= translate("oct"); ?>', '<?= translate("nov"); ?>', '<?= translate("dec"); ?>'];

                    $("#linechart-tooltip").html(item.series.label + " <?= translate("of_lang"); ?> " + months[x - 1] + " = " + y).css({
                        top: item.pageY + 5,
                        left: item.pageX + 5
                    }).fadeIn(200);
                }
                else {
                    $("#linechart-tooltip").hide();
                }
            });

            $("<div id='linechart-tooltip' class='chart-tooltip'></div>").appendTo("body");
        }

    });
</script>