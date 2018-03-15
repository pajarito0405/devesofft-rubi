<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>admin_lte/dist/js/pages/dashboard2.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("pizarra_resumen_lang") ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url(); ?>"><i class="fa fa-dashboard"></i> <?= translate("inicio_lang"); ?></a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-usd"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><?= translate("total_dinero_recaudado_lang") ?></span>
                        <span class="info-box-number"><small>$</small><?= number_format($total_ingresado, 2); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><?= translate('estudiantes_matriculados_lang'); ?></span>
                        <span class="info-box-number"><?= $estudiantes_matriculados; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><?= translate('cursos_lang'); ?></span>
                        <span class="info-box-number"><?= $cantidad_cursos; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><?= translate('profesores_lang'); ?></span>
                        <span class="info-box-number"><?= $cantidad_profesores; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 style="margin-left: 10px;"><?= translate("reportes_por_modulos_lang") ?></h4>
                            <hr/>

                            <table id="example2" class="table table-striped">
                                <thead>
                                <th><?= translate("nombre_modulo_lang"); ?></th>
                                <th><?= translate("ingresos_lang"); ?></th>
                                <th><?= translate("cantidad_estudiantes_lang"); ?></th>
                                </thead>

                                <tbody>
                                <?php foreach ($cursos as $item_c) {
                                    foreach ($item_c->all_modulos as $item_m) {
                                        ?>

                                        <tr>
                                            <td>
                                                <?= $item_m->nombre; ?> ( <?= $item_c->nombre; ?> )
                                            </td>

                                            <td>
                                                $ <?= number_format($item_m->dinero_ingresado, 2); ?>
                                            </td>

                                            <td>
                                                <?= $item_m->estudiantes_registrados; ?>
                                            </td>


                                        </tr>
                                    <?php }
                                } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-lg-6">
                            <h4 style="margin-left: 10px;"><?= translate("reportes_por_cursos_lang") ?></h4>
                            <hr/>

                            <table id="example1" class="table table-striped">
                                <thead>
                                <th><?= translate("nombre_curso"); ?></th>
                                <th><?= translate("ingresos_lang"); ?></th>
                                <th><?= translate("cantidad_estudiantes_lang"); ?></th>
                                </thead>

                                <tbody>
                                <?php foreach ($cursos as $item_c) { ?>


                                    <tr>
                                        <td>
                                            <?=  $item_c->nombre; ?>
                                        </td>

                                        <td>
                                            $ <?= number_format($item_c->dinero_ingresado, 2); ?>
                                        </td>

                                        <td>
                                            <?= $item_c->total_estudiantes; ?>
                                        </td>


                                    </tr>

                                <?php } ?>

                                </tbody>
                            </table>
                        </div>


                    </div>


                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- MAP & BOX PANE -->

                <!-- /.box -->

                <!-- /.row -->

                <!-- TABLE: LATEST ORDERS -->

                <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->

                <!-- /.info-box -->

                <!-- /.info-box -->

                <!-- /.info-box -->

                <!-- /.info-box -->


                <!-- /.box -->

                <!-- PRODUCT LIST -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<script type="text/javascript">
    $(function () {

        $("#example1").DataTable({
            "order": [[ 0, 'desc' ]],
            responsive: true,
            language: {
                "sProcessing": "<?= translate('procesing_lang');?>",
                "sLengthMenu": "<?= translate('show_menu_register_lang');?>",
                "sZeroRecords": "<?= translate('not_found_results_lang');?>",
                "sEmptyTable": "<?= translate('not_data_available');?>",
                "sInfo": "<?= translate('inicio_fin_lang');?>",
                "sInfoEmpty": "<?= translate('table_info_empty');?>",
                "sInfoFiltered": "<?= translate('info_filtered_lang');?>",
                "sInfoPostFix": "",
                "sSearch": "<?= translate('search_lang');?>:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "<?= translate('loading_lang');?>",
                "oPaginate": {
                    "sFirst": "<?= translate('first_lang');?>",
                    "sLast": "<?= translate('last_lang');?>",
                    "sNext": "<?= translate('next_lang');?>",
                    "sPrevious": "<?= translate('anterior_lang');?>"
                },
                "oAria": {
                    "sSortAscending": "<?= translate('p2');?>",
                    "sSortDescending": "<?= translate('p3');?>"
                }
            }
        });

        $("#example2").DataTable({
            "order": [[ 0, 'desc' ]],
            responsive: true,
            language: {
                "sProcessing": "<?= translate('procesing_lang');?>",
                "sLengthMenu": "<?= translate('show_menu_register_lang');?>",
                "sZeroRecords": "<?= translate('not_found_results_lang');?>",
                "sEmptyTable": "<?= translate('not_data_available');?>",
                "sInfo": "<?= translate('inicio_fin_lang');?>",
                "sInfoEmpty": "<?= translate('table_info_empty');?>",
                "sInfoFiltered": "<?= translate('info_filtered_lang');?>",
                "sInfoPostFix": "",
                "sSearch": "<?= translate('search_lang');?>:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "<?= translate('loading_lang');?>",
                "oPaginate": {
                    "sFirst": "<?= translate('first_lang');?>",
                    "sLast": "<?= translate('last_lang');?>",
                    "sNext": "<?= translate('next_lang');?>",
                    "sPrevious": "<?= translate('anterior_lang');?>"
                },
                "oAria": {
                    "sSortAscending": "<?= translate('p2');?>",
                    "sSortDescending": "<?= translate('p3');?>"
                }
            }
        });


    });
</script>