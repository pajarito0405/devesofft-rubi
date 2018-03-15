<style type="text/css">
    .square, .btn {
        border-radius: 0px !important;
    }

    /* -- color classes -- */
    .coralbg {
        background-color: #3c8dbc;
    }

    .coral {
        color: #3c8dbc;
    }

    .turqbg {
        background-color: #2591e3;
    }

    .turq {
        color: #2591e3;
    }

    .white {
        color: #fff !important;
    }

    /* -- The "User's Menu Container" specific elements. Custom container for the snippet -- */
    div.user-menu-container {
        z-index: 10;
        background-color: #fff;
        margin-top: 20px;
        background-clip: padding-box;
        opacity: 0.97;
        filter: alpha(opacity=97);
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    }

    div.user-menu-container .btn-lg {
        padding: 0px 12px;
    }

    div.user-menu-container h4 {
        font-weight: 300;
        color: #8b8b8b;
    }

    div.user-menu-container a, div.user-menu-container .btn {
        transition: 1s ease;
    }

    div.user-menu-container .thumbnail {
        width: 100%;
        min-height: 200px;
        border: 0px !important;
        padding: 0px;
        border-radius: 0;
        border: 0px !important;
    }

    /* -- Vertical Button Group -- */
    div.user-menu-container .btn-group-vertical {
        display: block;
    }

    div.user-menu-container .btn-group-vertical > a {
        padding: 20px 25px;
        background-color: #2591e3;
        color: white;
        border-color: #fff;
    }

    div.btn-group-vertical > a:hover {
        color: white;
        border-color: white;
    }

    div.btn-group-vertical > a.active {
        background: #3c8dbc;
        box-shadow: none;
        color: white;
    }

    /* -- Individual button styles of vertical btn group -- */
    div.user-menu-btns {
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
    }

    div.user-menu-btns div.btn-group-vertical > a.active:after {
        content: '';
        position: absolute;
        left: 100%;
        top: 50%;
        margin-top: -13px;
        border-left: 0;
        border-bottom: 13px solid transparent;
        border-top: 13px solid transparent;
        border-left: 10px solid #2591e3;
    }

    /* -- The main tab & content styling of the vertical buttons info-- */
    div.user-menu-content {
        color: #323232;
    }

    ul.user-menu-list {
        list-style: none;
        margin-top: 20px;
        margin-bottom: 0;
        padding: 10px;
        border: 1px solid #eee;
    }

    ul.user-menu-list > li {
        padding-bottom: 8px;
        text-align: center;
    }

    div.user-menu div.user-menu-content:not(.active) {
        display: none;
    }

    /* -- The btn stylings for the btn icons -- */
    .btn-label {
        position: relative;
        left: -12px;
        display: inline-block;
        padding: 6px 12px;
        background: rgba(0, 0, 0, 0.15);
        border-radius: 3px 0 0 3px;
    }

    .btn-labeled {
        padding-top: 0;
        padding-bottom: 0;
    }

    /* -- Custom classes for the snippet, won't effect any existing bootstrap classes of your site, but can be reused. -- */

    .user-pad {
        padding: 20px 25px;
    }

    .no-pad {
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
    }

    .user-details {
        background: #eee;
        min-height: 333px;
    }

    .user-image {
        max-height: 200px;
        overflow: hidden;
    }

    .overview h3 {
        font-weight: 300;
        margin-top: 15px;
        margin: 10px 0 0 0;
    }

    .overview h4 {
        font-weight: bold !important;
        font-size: 40px;
        margin-top: 0;
    }

    .view {
        position: relative;
        overflow: hidden;
        margin-top: 10px;
    }

    .view p {
        margin-top: 20px;
        margin-bottom: 0;
    }

    .caption {
        position: absolute;
        top: 0;
        right: 0;
        background: rgba(70, 216, 210, 0.44);
        width: 100%;
        height: 100%;
        padding: 2%;
        display: none;
        text-align: center;
        color: #fff !important;
        z-index: 2;
    }

    .caption a {
        padding-right: 10px;
        color: #fff;
    }

    .info-button {
        display: block;
        padding: 10px;
        background: #eee;
        text-transform: uppercase;
        font-weight: 300;
        text-align: right;
    }

    .info-button p, .stats p {
        margin-bottom: 0;
    }

    .stats {
        display: block;
        padding: 10px;
        color: white;
    }

    .share-links {
        border: 1px solid #eee;
        padding: 15px;
        margin-top: 15px;
    }

    .square, .btn {
        border-radius: 0px !important;
    }

    /* -- media query for user profile image -- */
    @media (max-width: 767px) {
        .user-image {
            max-height: 400px;
        }
    }


</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("cursos_lang"); ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard/index'); ?>"><i
                        class="fa fa-dashboard"></i> <?= translate("pizarra_resumen_lang") ?></a></li>
            <li class="active"><?= translate("cursos_lang"); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><?= translate("cursos_lang"); ?></h3>
                    </div>


                    <div class="box-body">

                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo get_message_from_operation(); ?>
                            </div>

                        </div>

                        <div class="row">


                            <?php foreach ($list_cursos as $item_c) { ?>
                                <div class="col-lg-6">
                                    <div class="container">
                                        <div class="row user-menu-container square">
                                            <div class="col-md-7 user-details">
                                                <div class="row coralbg white">
                                                    <div class="col-md-6 no-pad">
                                                        <div class="user-pad">
                                                            <h3><?= $item_c->nombre; ?></h3>
                                                            <h4 class="white"> <?= translate('price_lang'); ?> <i
                                                                    class="fa fa-usd"></i> <?= $item_c->price; ?></h4>
                                                            <h4 class="white"><?= translate('category_lang'); ?>
                                                                : <?= $item_c->category_object->name; ?>
                                                            </h4>


                                                            <?php if (!$item_c->all_contratado) { ?>
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default dropdown-toggle"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                        <?= translate('operaciones_lang'); ?> <span
                                                                            class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="<?= site_url('curso/comprar_curso/0/' . $item_c->curso_id); ?>"><i
                                                                                    class="fa fa-link"></i> <?= translate('comprar_curso_en_linea'); ?>
                                                                            </a></li>
                                                                        <?php if ($item_c->tiene_presencial == 1) { ?>
                                                                            <li>
                                                                                <a href="<?= site_url('curso/comprar_curso/1/' . $item_c->curso_id); ?>"><i
                                                                                        class="fa fa-user"></i> <?= translate('comprar_curso_presencial'); ?>
                                                                                </a></li>
                                                                        <?php } ?>


                                                                    </ul>
                                                                </div>
                                                            <?php } ?>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 no-pad">
                                                        <div class="user-image">
                                                            <img
                                                                src="<?= base_url('uploads/cursos/' . $item_c->image); ?>"
                                                                class="img-responsive thumbnail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row overview">
                                                    <div class="col-md-4 user-pad text-center">
                                                        <h3><?= translate('modulo_lang'); ?></h3>
                                                        <h4><?= $item_c->cant_modulos; ?></h4>
                                                    </div>
                                                    <div class="col-md-4 user-pad text-center">
                                                        <h3><?= translate('convocatorias_lang'); ?></h3>
                                                        <h4><?= $item_c->cant_convocatorias; ?></h4>
                                                    </div>
                                                    <div class="col-md-4 user-pad text-center">
                                                        <h3><?= translate('horas_lang'); ?></h3>
                                                        <h4><?= $item_c->cant_horas; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1 user-menu-btns">
                                                <div class="btn-group-vertical square" id="responsive">
                                                    <a href="#" id="btn<?= $item_c->curso_id; ?>1"
                                                       onclick="clickitems(<?= $item_c->curso_id; ?>,1)"
                                                       class="btn btnclass<?= $item_c->curso_id; ?> btn-block btn-default active">
                                                        <i class="fa fa fa-align-justify fa-3x"></i>
                                                    </a>
                                                    <a href="#" id="btn<?= $item_c->curso_id; ?>2"
                                                       onclick="clickitems(<?= $item_c->curso_id; ?>,2)"
                                                       class="btn btnclass<?= $item_c->curso_id; ?> btn-default">
                                                        <i class="fa fa-list-ul fa-3x"></i>
                                                    </a>
                                                    <a href="#" id="btn<?= $item_c->curso_id; ?>3"
                                                       onclick="clickitems(<?= $item_c->curso_id; ?>,3)"
                                                       class="btn btnclass<?= $item_c->curso_id; ?> btn-default">
                                                        <i class="fa fa-bullhorn fa-3x"></i>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="col-md-4 user-menu user-pad">
                                                <div id="elem<?= $item_c->curso_id; ?>1"
                                                     class="user-menu-content elem<?= $item_c->curso_id; ?> class1<?= $item_c->curso_id; ?> active">
                                                    <h3>
                                                        <?= translate('resumen_lang'); ?>
                                                    </h3>
                                                    <p style="text-align: justify">
                                                        <?= $item_c->resumen; ?>
                                                    </p>
                                                </div>
                                                <div id="elem<?= $item_c->curso_id; ?>2"
                                                     class="user-menu-content elem<?= $item_c->curso_id; ?> class2<?= $item_c->curso_id; ?>">
                                                    <h3>
                                                        <?= translate('modules_list_lang'); ?>
                                                    </h3>
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <th><?= translate('nombre_lang'); ?></th>
                                                        <th><?= translate('price_lang'); ?></th>
                                                        <th><?= translate("actions"); ?></th>
                                                        </thead>


                                                        <?php if (count($item_c->all_modulos) > 0) { ?>
                                                            <?php foreach ($item_c->all_modulos as $item_mod) { ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $item_mod->nombre; ?>

                                                                    </td>

                                                                    <td>
                                                                        $ <?= $item_mod->price; ?>

                                                                    </td>

                                                                    <td>

                                                                        <?php if (!$item_mod->esta_contratado) { ?>
                                                                            <!-- Single button -->
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false">
                                                                                    <?= translate('actions'); ?> <span
                                                                                        class="caret"></span>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a href="<?= site_url('curso/comprar_modulo/0/' . $item_mod->modulo_id); ?>"><i
                                                                                                class="fa fa-link"></i> <?= translate('comprar_modulo_lang'); ?>
                                                                                        </a></li>


                                                                                </ul>
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <span
                                                                                class="label label-primary"><?= translate('modulo_contratado_lang'); ?></span>

                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>


                                                            <?php }
                                                        } else { ?>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <?= translate('not_exist_module_lang'); ?>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>

                                                    </table>
                                                </div>
                                                <div id="elem<?= $item_c->curso_id; ?>3"
                                                     class="user-menu-content elem<?= $item_c->curso_id; ?> class3<?= $item_c->curso_id; ?>">
                                                    <h3>
                                                        <?= translate('convocatorias_presencial_lang'); ?>
                                                    </h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul>
                                                                <?php if (count($item_c->list_convocatorias) > 0) { ?>
                                                                    <?php foreach ($item_c->list_convocatorias as $item_convocatorias) { ?>
                                                                        <li style="list-style-type: none;"><i
                                                                                class="fa fa-clock-o"></i> <?= translate('comienza_lang'); ?> <?= $item_convocatorias->fecha; ?>
                                                                        </li>

                                                                    <?php }
                                                                } else { ?>
                                                                    <li style="list-style-type: none"><?= translate('not_convocatorias_disponibles'); ?></li>

                                                                <?php } ?>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div id="elem<?= $item_c->curso_id; ?>4"
                                                     class="user-menu-content elem<?= $item_c->curso_id; ?> class4<?= $item_c->curso_id; ?>">
                                                    <h2 class="text-center">
                                                        START SHARING
                                                    </h2>
                                                    <center><i class="fa fa-cloud-upload fa-4x"></i></center>
                                                    <div class="share-links">
                                                        <center>
                                                            <button type="button"
                                                                    class="btn btn-lg btn-labeled btn-success" href="#"
                                                                    style="margin-bottom: 15px;">
                                                                <span class="btn-label"><i
                                                                        class="fa fa-bell-o"></i></span>A FINISHED
                                                                PROJECT
                                                            </button>
                                                        </center>
                                                        <center>
                                                            <button type="button"
                                                                    class="btn btn-lg btn-labeled btn-warning" href="#">
                                                                <span class="btn-label"><i
                                                                        class="fa fa-bell-o"></i></span>A WORK IN
                                                                PROGRESS
                                                            </button>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            <?php } ?>


                        </div>


                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script type="text/javascript">

    $(document).ready(function () {
        var $btnSets = $('#responsive'),
            $btnLinks = $btnSets.find('a');


    });


    function clickitems(id, item) {

        event.preventDefault();

        $(".elem" + id).removeClass("active");
        $("#elem" + id + item).addClass("active");

        $(".btnclass" + id).removeClass("active");
        $("#btn" + id + item).addClass("active");


    }

    $(document).ready(function () {
        $("[rel='tooltip']").tooltip();

        $('.view').hover(
            function () {
                $(this).find('.caption').slideDown(250); //.fadeIn(250)
            },
            function () {
                $(this).find('.caption').slideUp(250); //.fadeOut(205)
            }
        );
    });


</script>



