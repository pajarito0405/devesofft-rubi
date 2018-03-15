<div class="main-container inner">
    <!-- start: PAGE -->
    <div class="main-content">
        <!-- start: PANEL CONFIGURATION MODAL FORM -->

        <!-- /.modal -->
        <!-- end: SPANEL CONFIGURATION MODAL FORM -->
        <div class="container">
            <!-- start: PAGE HEADER -->
            <!-- start: TOOLBAR -->

            <!-- end: TOOLBAR -->
            <!-- end: PAGE HEADER -->
            <!-- start: BREADCRUMB -->

            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= site_url('user/index'); ?>">
                                <?= translate("list_users"); ?>
                            </a>
                        </li>
                        <li class="active">
                            <?= translate("update_user"); ?>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- start: TEXT FIELDS PANEL -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title"><?= translate("update_user"); ?></span></h4>

                        </div>
                        <div class="panel-body">
                            <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">
                                        
                                    </label>

                                    <div class="col-sm-9">
                                         <?php echo get_message_from_operation(); ?>
                                    </div>

                                </div>
                           
                            <form role="form" enctype= multipart/form-data class="form-horizontal" action="<?= site_url('user/update_execute');?>" method="post" >
                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("fullname_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                            <input value="<?= $user->fullname;?>" type="text" placeholder="<?= translate("fullname_lang"); ?>" class="form-control" name="name">
                                        </div>
                                    </div>

                                </div>

                                <input type="hidden" name="user_id" value="<?= $user->user_id;?>" />

                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("email_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" value="<?= $user->email;?>" placeholder="<?= translate("email_lang"); ?>" class="form-control" name="email">
                                        </div>
                                    </div>

                                </div>
                                

                                
                                                                
                                
                                                                
                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("photo_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-photo"></i></span>
                                            <input type="file" class="form-control" name="archivo">
                                        </div>
                                    </div>

                                </div>
                                
                                
                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">
                                       
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="right">
                                            <button class="btn btn-primary"><i class="fa fa-check"></i> <?= translate("accept_lang");?></button>
                                            <a href="<?= site_url('user/index');?>" class="btn btn-default"><i class="fa fa-remove"></i> <?= translate("cancel_lang");?></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                


                                
                            </form>
                        </div>
                    </div>
                    <!-- end: TEXT FIELDS PANEL -->
                </div>
            </div>
        </div>
    </div>
</div>