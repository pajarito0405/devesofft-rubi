<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("cursos_lang"); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard/index'); ?>"><i
                        class="fa fa-dashboard"></i> <?= translate("pizarra_resumen_lang") ?></a></li>
            <li><a href="<?= site_url('curso/index'); ?>"><i class="fa fa-users"></i> <?= translate("cursos_lang") ?>
                </a>
            </li>
            <li class="active"><?= translate("form_cursos_lang"); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"><?= translate("form_cursos_lang"); ?></h3>
                    </div><!-- /.box-header -->
                    <div>
                        <?php echo get_message_from_operation(); ?>
                    </div>

                    <div class="box-body">
                        <form role="form" enctype=multipart/form-data class="form-horizontal"
                              action="<?= site_url('curso/update'); ?>" method="post">

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
                                                   class="form-control" name="nombre" value="<?= $curso_object->nombre;?>" required="">
                                        </div>
                                    </div>

                                    <br/>

                                    <label>
                                        <?=
                                        translate("price_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                            <input type="text" placeholder="<?= translate("price_lang"); ?>"
                                                   class="form-control" value="<?= $curso_object->price;?>" name="price" required="">
                                        </div>
                                    </div>

                                    <br/>

                                    <label>
                                        <?=
                                        translate("resumen_lang");
                                        ?>
                                    </label>
                                    <div>

                                            <textarea name="resumen" class="form-control textarea">
                                                <?= $curso_object->resumen;?>
                                            </textarea>

                                    </div>

                                    <br />

                                    <label>
                                        <?=
                                        translate("image_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                            <input type="file" placeholder="<?= translate("image_lang"); ?>"
                                                   class="form-control" name="image">
                                        </div>
                                    </div>

                                    <br/>

                                    <label>
                                        <?=
                                        translate("category_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-filter"></i></span>
                                            <select name="category" class="form-control">
                                                <?php foreach ($categories as $item_c) { ?>
                                                    <option <?php if($item_c->category_id == $curso_object->category_id){ ?> selected <?php } ?>
                                                        value="<?= $item_c->category_id; ?>"><?= $item_c->name; ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <label>
                                        <?=
                                        translate("idioma_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-language"></i></span>
                                            <select name="idioma" class="form-control">
                                                <?php foreach ($idiomas as $item) { ?>
                                                    <option <?php if($curso_object->id_lang == $item->id_lang){ ?> selected <?php } ?>
                                                        value="<?= $item->id_lang; ?>"><?= translate('idioma' . $item->id_lang); ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                    </div>

                                    <br/>

                                    <label>
                                        <?=
                                        translate("descripcion_lang");
                                        ?>
                                    </label>
                                    <div>

                                            <textarea name="descripcion" class="form-control textarea">
                                                <?= $curso_object->descripcion;?>
                                            </textarea>

                                    </div>

                                    <br />
                                    <label>
                                        <?=
                                        translate("url_video_youtube_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                                            <input type="text" placeholder="<?= translate("url_video_youtube_lang"); ?>"
                                                   class="form-control" name="video" value="<?= $curso_object->url_video;?>">

                                        </div>
                                    </div>

                                    <br/>

                                    <label>
                                        <?=
                                        translate("orden_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
                                            <input type="number" placeholder="<?= translate("orden_lang"); ?>"
                                                   class="form-control" name="orden" required="" value="<?= $curso_object->orden;?>"  >
                                        </div>
                                    </div>

                                    <br />

                                    <label>
                                        <?=
                                        translate("modalidad_presencial_lang");
                                        ?>
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-toggle-on"></i></span>
                                            <select name="presencial" class="form-control">
                                                <option <?php if($curso_object->tiene_presencial == 1){ ?> selected <?php } ?> value="1"><?= translate('yes_lang');?></option>
                                                <option <?php if($curso_object->tiene_presencial == 0){ ?> selected <?php } ?> value="0"><?= translate("no_lang");?></option>
                                            </select>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <input type="hidden" name="curso_id" value="<?= $curso_object->curso_id;?>" />


                            <div class="row" style="margin-top: 20px;">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary"><i
                                            class="fa fa-check"></i> <?= translate("accept_lang"); ?></button>
                                    <a href="<?= site_url('curso/index'); ?>" class="btn btn-default"><i
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


