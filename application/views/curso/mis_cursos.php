<style type="text/css">

    .one, .two, .three, .four, .five {
        position: absolute;
        margin-top: -10px;
        z-index: 1;
        height: 40px;
        width: 40px;
        border-radius: 25px;

    }

    .one {

    }

    .two {
        left: 25%;
    }

    .three {
        left: 50%;
    }

    .four {
        left: 75%;
    }

    .five {
        left: 95%;
    }

    .primary-color {
        background-color: #4989bd;
    }

    .success-color {
        background-color: #5cb85c;
    }

    .danger-color {
        background-color: #d9534f;
    }

    .warning-color {
        background-color: #f0ad4e;
    }

    .info-color {
        background-color: #5bc0de;
    }

    .no-color {
        background-color: inherit;
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
            <li class="active"><?= translate("mis_cursos_lang"); ?></li>
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


                        <table id="example" class="table table-bordered table-responsive">


                            <thead>
                            <tr>
                                <th><?= translate("nombre_lang"); ?></th>
                                <th><?= translate("tabla_progreso_lang"); ?></th>
                                <th><?= translate("actions"); ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cursos as $item_curso) { ?>
                                <tr>
                                    <td><?= $item_curso->nombre; ?> </td>


                                    <td>
                                        <div style="text-align: right; font-weight: bold;">
                                            <span><?= $item_curso->porciento; ?>%</span></div>
                                        <div class="container" style="margin-bottom: 2%;">
                                            <div class="row"><br/>
                                                <div class="col-md-12">
                                                    <div class="progress">

                                                        <?php
                                                        $proporcion = number_format(100 / count($item_curso->all_modulos, 2));
                                                        $cont = 1;
                                                        foreach ($item_curso->all_modulos as $item_modulo) { ?>
                                                            <?php
                                                                $bola = ($cont==count($item_curso->all_modulos))? ($cont*$proporcion)-5: ($cont*$proporcion);
                                                            ?>

                                                            <div style="left: <?= $bola; ?>%;"
                                                                 class="one <?php if ($item_modulo->terminado) { ?>primary-color <?php } else { ?> no-color <?php } ?>"></div>

                                                            <?php
                                                            $cont++;
                                                        } ?>
                                                        <div class="progress-bar"
                                                             style="width: <?= $item_curso->porciento; ?>%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>

                                        </div>

                                    </td>

                                    <td>
                                        <a href="<?= site_url('modulo/get_mis_modulos/' . $item_curso->curso_id); ?>"
                                           class="btn btn-primary"><i
                                                class="fa fa-list-ul"></i> <?= translate('modulo_lang'); ?></a>
                                    </td>


                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th><?= translate("nombre_lang"); ?></th>
                                <th><?= translate("tabla_progreso_lang"); ?></th>
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
            "order": [[3, "asc"]],
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
