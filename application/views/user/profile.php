<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("edit_profile"); ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> <?= translate("pizarra_resumen_lang") ?></a></li>
            <li class="active"><?= translate("edit_profile"); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
<!--                    <div class="box-header">
                        <h3 class="box-title"><?= translate("edit_profile"); ?></h3>
                    </div> /.box-header -->
                    <div>
                        <?php echo get_message_from_operation(); ?>
                    </div>
                    <div class="box-body">
                        <form role="form" id="form-client" enctype= multipart/form-data class="form-horizontal" action="<?= site_url('user/update_profile'); ?>" method="post" >
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <?= translate("nombre_lang"); ?>
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                        <input type="text"  value="<?= $user->name; ?>" placeholder="<?= translate("nombre_lang"); ?>" class="form-control" name="name">
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
                                        <input value="<?= $user->email ?>" readonly type="email" placeholder="<?= translate("email_lang"); ?>" class="form-control" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <?= translate("phone_lang"); ?>
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input value="<?= $user->phone ?>" type="text" placeholder="<?= translate("phone_lang"); ?>" class="form-control" name="phone">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <?= translate("image_lang"); ?>
                                </label>

                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-photo"></i></span>
                                        <input type="file" class="form-control" name="archivo">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <?= translate("address_lang"); ?>
                                </label>

                                <div class="col-sm-9">

                                        <textarea name="address" id="editor1" class="form-control textarea">
                                            <?= $user->direccion;?>
                                        </textarea>

                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="col-sm-2 control-label">
                                </label>

                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="right">
                                            <button class="btn btn-primary"><i class="fa fa-check"></i> <?= translate("accept_lang"); ?></button>
                                            <!--<button type="button" class="btn btn-default" onclick="redirect()" ><i class="fa fa-remove"></i> <?= translate("cancel_lang"); ?></button>-->
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


<?php
$redirect = site_url('binarytree/index');
?>



<script type="text/javascript">

    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });

    function redirect(ev) {
        window.location.href = "<?= $redirect ?>";
        //console.log(window.location.href);
    }
</script>

