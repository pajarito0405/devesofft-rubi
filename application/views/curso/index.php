<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("cursos_lang"); ?> |  <a href="<?= site_url('curso/add_index'); ?>" class="btn btn-primary"><i
                    class="fa fa-plus"></i> <?= translate('add_item_lang'); ?></a>
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



                        <table id="example" class="table table-bordered table-striped">


                            <thead>
                            <tr>
                                <th><?= translate("nombre_lang"); ?></th>
                                <th><?= translate("idioma_lang"); ?></th>
                                <th><?= translate("resumen_lang"); ?></th>
                                <th><?= translate('orden_lang');?></th>
                                <th><?= translate("actions"); ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cursos as $item_curso) { ?>
                                <tr>
                                    <td><?= $item_curso->nombre;?> </td>
                                    <td><?= translate('idioma'.$item_curso->id_lang);?> </td>
                                    <td><?= $item_curso->resumen;?> </td>
                                    <td><?= $item_curso->orden;?> </td>

                                    <td>
                                        <!-- Split button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><?= translate('actions');?></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only"><?= translate('actions');?></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?= site_url('curso/update_index/'.$item_curso->curso_id);?>"><i class="fa fa-edit"></i> <?= translate('edit_lang');?></a></li>
                                                <li><a href="<?= site_url('modulo/index/'.$item_curso->curso_id);?>"><i class="fa fa-gears"></i> <?= translate('modulo_lang');?></a></li>
                                                <li><a href="<?= site_url('curso/join_tags/'.$item_curso->curso_id);?>"><i class="fa fa-tags"></i> <?= translate('asociar_etiquetas_lang');?></a></li>
                                                <?php if($item_curso->tiene_presencial == 1){ ?>
                                                    <li><a href="<?= site_url('curso/list_convocatorias/'.$item_curso->curso_id);?>"><i class="fa fa-flag-checkered"></i> <?= translate('convocatorias_lang');?></a></li>
                                                <?php } ?>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="<?= site_url('curso/delete/'.$item_curso->curso_id);?>"><i class="fa fa-times-circle"></i><?= translate('delete_lang');?></a></li>
                                            </ul>
                                        </div>


                                    </td>


                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th><?= translate("nombre_lang"); ?></th>
                                <th><?= translate("idioma_lang"); ?></th>
                                <th><?= translate("resumen_lang"); ?></th>
                                <th><?= translate('orden_lang');?></th>
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
            "order": [[ 3, "asc" ]],
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
