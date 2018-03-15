<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("users"); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard/index'); ?>"><i
                        class="fa fa-dashboard"></i> <?= translate("pizarra_resumen_lang") ?></a></li>
            <li><a href="<?= site_url('user/index'); ?>"><i class="fa fa-users"></i> <?= translate("users") ?></a>
            </li>
            <li class="active"><?= translate("user_form"); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"><?= translate("user_form"); ?></h3>
                    </div><!-- /.box-header -->
                    <div>
                        <?php echo get_message_from_operation(); ?>
                    </div>

                    <div class="box-body">
                        <form role="form" enctype=multipart/form-data class="form-horizontal"
                              action="<?= site_url('user/add'); ?>" method="post">

                            <div class="row">
                                <div class="col-lg-6">

                                    <label>
                                        <?=
                                        translate("nombre_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                            <input type="text" placeholder="<?= translate("nombre_lang"); ?>"
                                                   class="form-control" name="nombre" required="">
                                        </div>
                                    </div>
                                    <br />
                                    <label>
                                        <?=
                                        translate("email_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="email" placeholder="<?= translate("email_lang"); ?>"
                                                   class="form-control" name="email" required="">
                                        </div>
                                    </div>
                                    <br />
                                    <label>
                                        <?=
                                        translate("cedula_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-keyboard-o"></i></span>
                                            <input type="text" placeholder="<?= translate("cedula_lang"); ?>"
                                                   class="form-control" name="cedula" required="">
                                        </div>
                                    </div>

                                    <br />
                                    <label>
                                        <?=
                                        translate("password_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" placeholder="<?= translate("password_lang"); ?>"
                                                   class="form-control" name="password" required="">
                                        </div>
                                    </div>

                                    <br />
                                    <label>
                                        <?=
                                        translate("repeat_password_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" placeholder="<?= translate("repeat_password_lang"); ?>"
                                                   class="form-control" name="repeat_password" required="">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <label>
                                        <?=
                                        translate("role_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select name="role" class="form-control">

                                                <option
                                                    value="1"><?= translate('administrador_lang'); ?></option>
                                                <option value="2"><?= translate('docente_lang');?></option>

                                            </select>

                                        </div>
                                    </div>

                                    <br />
                                    <label>
                                        <?=
                                        translate("phone_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="tel" placeholder="<?= translate("phone_lang"); ?>"
                                                   class="form-control" name="phone" required="">
                                        </div>
                                    </div>

                                    <br />

                                    <br />
                                    <label>
                                        <?=
                                        translate("direccion_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <textarea class="form-control textarea" name="direccion">

                                        </textarea>
                                    </div>

                                </div>

                            </div>


                            <div class="row" style="margin-top: 20px;">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary"><i
                                            class="fa fa-check"></i> <?= translate("accept_lang"); ?></button>
                                    <a href="<?= site_url('user/index'); ?>" class="btn btn-default"><i
                                            class="fa fa-remove"></i> <?= translate("cancel_lang"); ?></a>
                                </div>
                            </div>


                        </form>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script type="text/javascript">
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>


