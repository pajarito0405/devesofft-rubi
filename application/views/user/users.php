<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("users"); ?> | <a href="<?= site_url('user/add_index');?>" class="btn btn-primary"><i class="fa fa-plus"></i> <?= translate('add_item_lang');?></a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard/index'); ?>"><i
                        class="fa fa-dashboard"></i> <?= translate("pizarra_resumen_lang") ?></a></li>
            <li class="active"><?= translate("users"); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><?= translate("users"); ?></h3>
                    </div>
                    <div>
                        <?php echo get_message_from_operation(); ?>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th><?= translate("nombre_lang"); ?></th>
                                <th><?= translate("email_lang"); ?></th>
                                <th class="center_td_th"><?= translate("phone_lang"); ?></th>


                                <th><?= translate("actions"); ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user) { ?>
                                <tr>
                                    <td><?= $user->name; ?></td>
                                    <td><?= $user->email; ?></td>
                                    <td class="center_td_th"><?= $user->phone; ?></td>

                                    <td>
                                        <a href="<?= site_url('user/edit/'.$user->user_id);?>" class="btn btn-warning"><i class="fa fa-edit"></i> <?= translate('edit_lang');?></a>
                                        <?php if($user->user_id != $this->session->userdata('user_id')){ ?>
                                        <a
                                            href="<?= site_url('user/erase/' . $user->user_id); ?>"
                                            class="btn btn-danger"><i
                                                class="fa fa-remove"></i> <?= translate("delete_lang"); ?></a>
                                        <?php } ?>


                                    </td>


                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th><?= translate("nombre_lang"); ?></th>
                                <th><?= translate("email_lang"); ?></th>
                                <th class="center_td_th"><?= translate("phone_lang"); ?></th>
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

        $("#example1").DataTable({
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
