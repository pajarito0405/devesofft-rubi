<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("select_convocatoria_lang"); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard/index'); ?>"><i
                        class="fa fa-dashboard"></i> <?= translate("pizarra_resumen_lang") ?></a></li>
            <li><a href="<?= site_url('curso/list_cursos'); ?>"><i class="fa fa-users"></i> <?= translate("cursos_lang") ?>
                </a>
            </li>
            <li class="active"><?= translate("select_convocatoria_lang"); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"><?= translate("form_convocatoria_lang"); ?></h3>
                    </div><!-- /.box-header -->
                    <div>
                        <?php echo get_message_from_operation(); ?>
                    </div>

                    <div class="box-body">
                        <form role="form" enctype=multipart/form-data class="form-horizontal"
                              action="<?= site_url('curso/select_convocatoria'); ?>" method="post">

                            <div class="row">
                                <div class="col-lg-12">
                                    <label>
                                        <?=
                                        translate("convocatoria_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <select name="convocatoria" class="form-control">
                                                <?php foreach ($list_convocatorias as $c) { ?>
                                                    <option
                                                        value="<?= $c->convocatoria_id; ?>"><?= $c->fecha; ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                    </div>

                                </div>

                                <input type="hidden" name="curso_id" value="<?= $curso_object->curso_id;?>" />



                            </div>


                            <div class="row" style="margin-top: 20px;">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary"><i
                                            class="fa fa-check"></i> <?= translate("accept_lang"); ?></button>
                                    <a href="<?= site_url('curso/list_cursos'); ?>" class="btn btn-default"><i
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


