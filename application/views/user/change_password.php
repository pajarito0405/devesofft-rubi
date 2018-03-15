<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("change_password"); ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard/index'); ?>"><i class="fa fa-dashboard"></i> <?= translate("dashboard_lang") ?></a></li>           
            <li class="active"><?= translate("change_password"); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
<!--                    <div class="box-header">
                        <h3 class="box-title"><?= translate("change_password"); ?></h3>
                    </div> /.box-header -->
                    <div>
                        <?php echo get_message_from_operation(); ?>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <form role="form" class="form-horizontal" action="<?= site_url('user/change_password_execute'); ?>" method="post" >
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("fullname_lang"); ?>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <label ><?= $this->session->userdata("fullname"); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("password_lang"); ?>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" required class="form-control" name="password" pattern="<?= val_secure_password()?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("repeat_password_lang"); ?>
                                    </label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" required class="form-control" name="repeat_password" pattern="<?= val_secure_password()?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                    </label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <div class="right">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?= translate("accept_lang"); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                <div class="visible-lg">
                                    <div style="visibility: hidden; margin-top: 15%;">
                                        alkjdsa
                                    </div>
                                </div>-->
                            </form>
                        </div>
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





