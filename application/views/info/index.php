<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("info_list"); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard/index'); ?>"><i class="fa fa-dashboard"></i> <?= translate("dashboard_lang") ?></a></li>           
            <li class="active"><?= translate("info_list"); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"><?= translate("info_table"); ?></h3>
                    </div><!-- /.box-header -->
                    <div>
                        <?php echo get_message_from_operation(); ?>
                    </div>

                    <div class="box-body">
                        <div>
                            <a href="<?= site_url('info/add_index'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <?= translate("add_info_lang"); ?></a>
                            <br /><br />
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><?= translate("topic"); ?></th>
                                    <th><?= translate("date"); ?></th>
                                    <th><?= translate("state"); ?></th>
                                    <th><?= translate("actions"); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($infos as $info) { ?>
                                    <tr>
                                        <td>

                                            <?= $info->title; ?>
                                        </td>
                                        <td><?= $info->date; ?></td>  
                                        <td><?php if($info->state==0){ ?> <i class="fa fa-times-circle"></i> <?php }else{?> <i class="fa fa-check-circle"></i> <?php }?></td>  
                                        <td>
                                            <a href="<?= site_url('info/change_estado/' . $info->info_id); ?>" class="btn btn-success"><i class="fa fa-sliders"></i> <?= translate("change_state"); ?></a>
                                            <a href="<?= site_url('info/delete/' . $info->info_id); ?>" class="btn btn-danger"><i class="fa fa-remove"></i> <?= translate("delete_lang"); ?></a>
                                        </td>


                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><?= translate("topic"); ?></th>
                                    <th><?= translate("date"); ?></th>
                                    <th><?= translate("state"); ?></th>
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


<div class="modal modal-info fade" id="confirmation-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?= translate("confirmacion_lang"); ?></h4>
            </div>
            <div class="modal-body">
                <p><?= translate("seguro_realizar_extraccion"); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"><?= translate("close"); ?></button>
                <button type="button" onclick="execute_extraccion();" class="btn btn-outline"><?= translate("accept_lang"); ?></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">

//    $(function () {
//        $("#example1").DataTable();
//
//    });

    var extraccion = 0;
    function select_extraccion(id) {
        extraccion = id;
        $("#confirmation-modal").modal("show");
    }

    function execute_extraccion() {
        window.location.href = '<?= site_url('saque/execute_saque'); ?>' + '/' + extraccion;
    }

</script>