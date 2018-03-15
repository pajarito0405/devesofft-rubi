<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("suscribed_lang"); ?>
        </h1>
        
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"><?= translate("suscription_form"); ?></h3>
                    </div><!-- /.box-header -->
                    <div>
                        <?php echo get_message_from_operation(); ?>
                    </div>

                    <div class="box-body">
                        <form role="form" enctype= multipart/form-data class="form-horizontal" action="<?= site_url('user/execute_suscribed_user'); ?>" method="post" >
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <?= translate("fullname_lang"); ?>
                                </label>

                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                        <input type="text" placeholder="<?= translate("fullname_lang"); ?>" class="form-control" name="name">
                                    </div>
                                </div>

                            </div>



                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <?= translate("email_lang"); ?>
                                </label>

                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" placeholder="<?= translate("email_lang"); ?>" class="form-control" name="email">
                                    </div>
                                </div>

                            </div>

                            <input type="hidden" name="user" value="<?= $user_object->user;?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">

                                </label>

                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="right">
                                            <button class="btn btn-primary"><i class="fa fa-check"></i> <?= translate("accept_lang"); ?></button>
                                            <a href="<?= site_url('user/view_my_page/'.$user_object->user); ?>" class="btn btn-default"><i class="fa fa-remove"></i> <?= translate("cancel_lang"); ?></a>
                                        </div>
                                    </div>
                                </div>

                            </div>





                        </form>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


