<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("tags_lang"); ?> ( <?= $curso_object->nombre; ?> )
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard/index'); ?>"><i
                        class="fa fa-dashboard"></i> <?= translate("pizarra_resumen_lang") ?></a></li>
            <li><a href="<?= site_url('curso/index'); ?>"><i
                        class="fa fa-dashboard"></i> <?= translate("cursos_lang") ?></a></li>
            <li class="active"><?= translate("tags_lang"); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><?= translate("tags_lang"); ?></h3>
                    </div>


                    <div class="box-body">

                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo get_message_from_operation(); ?>
                            </div>

                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading"><?= translate('select_tag'); ?></div>
                            <div class="panel-body">
                                <div class="row">


                                    <?php if (count($no_seleccionadas) > 0) { ?>

                                        <?= form_open("curso/execute_join_tag"); ?>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                                <select name="tag" class="form-control">
                                                    <?php foreach ($no_seleccionadas as $item_no_selected) { ?>
                                                        <option
                                                            value="<?= $item_no_selected->tag_id; ?>"><?= $item_no_selected->name; ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa fa-tag"></i> <?= translate('vincular_etiqueta_lang'); ?>
                                            </button>
                                        </div>

                                        <input type="hidden" name="curso_id" value="<?= $curso_object->curso_id;?>" />

                                        <?= form_close(); ?>

                                    <?php } else { ?>
                                        <div class="col-xs-12">
                                            <div class="alert alert-info">
                                                <?= translate('not_tags_vincular_lang'); ?>
                                            </div>
                                        </div>

                                    <?php } ?>


                                </div>
                            </div>
                        </div>


                        <table id="example" class="table table-bordered table-striped">


                            <thead>
                            <tr>
                                <th><?= translate("nombre_lang"); ?></th>
                                <th><?= translate("actions"); ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($seleccionadas as $tag) { ?>
                                <tr>
                                    <td><?= $tag->tag_object->name; ?> </td>


                                    <td>


                                        <a href="<?= site_url('curso/unjoin_tag/' . $tag->tag_id . '/' . $curso_object->curso_id); ?>"
                                           class="btn btn-danger"><i
                                                class="fa fa-remove"></i> <?= translate("delete_lang"); ?></a>


                                    </td>


                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th><?= translate("nombre_lang"); ?></th>
                                <th><?= translate("actions"); ?></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<script type="text/javascript">
    $(function () {

        $("#example").DataTable({
            responsive: true,
            language: {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "primero",
                    "sLast": "último",
                    "sNext": "siguiente",
                    "sPrevious": "anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });


    });
</script>
