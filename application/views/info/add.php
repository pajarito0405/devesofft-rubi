<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("add_info_lang"); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard/index'); ?>"><i class="fa fa-dashboard"></i> <?= translate("dashboard_lang") ?></a></li>  
            <li><a href="<?= site_url('info/index'); ?>"><i class="fa fa-users"></i> <?= translate("info_list") ?></a></li> 
            <li class="active"><?= translate("add_info_lang"); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"><?= translate("info_form"); ?></h3>
                    </div><!-- /.box-header -->
                    <div>
                        <?php echo get_message_from_operation(); ?>
                    </div>

                    <div class="box-body">
                        <form role="form" enctype= multipart/form-data class="form-horizontal" action="<?= site_url('info/add');?>" method="post" >
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("title_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                            <input type="text" placeholder="<?= translate("title_lang"); ?>" class="form-control" name="title">
                                        </div>
                                    </div>

                                </div>

                                

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("text_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"></span>
                                            <textarea name="texto" class="form-control">
                                                
                                            </textarea>
                                        </div>
                                    </div>

                                </div>                     
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                       
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="right">
                                            <button class="btn btn-primary"><i class="fa fa-check"></i> <?= translate("accept_lang");?></button>
                                            <a href="<?= site_url('info/index');?>" class="btn btn-default"><i class="fa fa-remove"></i> <?= translate("cancel_lang");?></a>
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