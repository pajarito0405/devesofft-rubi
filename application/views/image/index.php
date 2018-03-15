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
                            <a href="<?= site_url('shop/index'); ?>">
                                <?= translate("publicidad"); ?>
                            </a>
                        </li>
                        <li class="active">
                            <?= translate("publicidad"); ?>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- start: TEXT FIELDS PANEL -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title"><?= translate("configuracion_publicidad"); ?></span></h4>

                        </div>
                        <div class="panel-body">
                            <div class="form-group has-success">
                                <label class="col-sm-2 control-label">
                               	</label>

                                <div class="col-sm-9">
                                	<?php echo get_message_from_operation(); ?>
                            	</div>
                          	</div>
                         
                            <form role="form" enctype= multipart/form-data class="form-horizontal" action="<?= site_url('image/save');?>" method="post" >
                               	<div class="form-group has-success">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("image"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                            <input required = "required" type="file" class="form-control" name="image">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label">
                                        URL
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input required = "required" placeholder="<?=translate('url_on_click')?>" type="url" class="form-control" name="url">
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
                                            <a href="<?= site_url('shop/index');?>" class="btn btn-default"><i class="fa fa-remove"></i> <?= translate("cancel_lang");?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            <div class="well">
	                            <div class="dataTable_wrapper">
						            <table class="table table-striped table-bordered table-hover" id="dataTable">
				                    	<thead>
				                        	<tr>
				                            	<th><?=translate('image')?></th>
				                            	<th>URL</th>
				                                <th><?=translate('actions')?></th>
				                         	</tr>
				                    	</thead>
				                        <tbody>
				                        	<?php foreach($items as $item):?>
					                        	<tr class="odd gradeX" id="row<?=$item->image_id?>">
					                            	<td class="center"><img onclick="getImage(this)" src="<?=base_url($item->image_path)?>" style="height: 50px; width: 50px"></img></td>
					                                <td class="center"><?=$item->on_click_url?></td>
					                                <td class="center"><button type="button" onclick="erase(<?=$item->image_id?>)" class="btn btn-danger"><?=translate('delete')?></button></td>
					                          	</tr>
				                           	<?php endforeach;?>
				                    	</tbody>
						         	</table>
			               		</div>
			               	</div>
                        </div>
                    </div>
                    <!-- end: TEXT FIELDS PANEL -->
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="image_modal">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?= translate("image"); ?></h4>
                </div>
                <div class="modal-body">
                    <p style="text-align: center; ">
                        <img id="img-picture-package" src="" class="img" style="width: 500px; height: 500px"/>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><?= translate("close_lang"); ?></button>
                    
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<?=translate('delete_image')?>:
            </div>
            <div class="modal-body">
            	<?=translate('delete_image_question')?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?=translate('cancel')?></button>
                <a id="btn-delete" class="btn btn-danger btn-ok"><?=translate('delete_lang')?></a>
            </div>
        </div>
    </div>
</div>
    
<script type="text/javascript">
	function getImage(object){
	    $("#img-picture-package").attr("src", $(object).attr('src'));
	    $("#image_modal").modal("show");
	} 

	function erase(id){
		$("#confirm-delete").modal('show');

		$("#btn-delete").on('click', function(){
			$.post("<?=site_url('image/erase')?>", {id: id}, function(result){
				if( result > 0 ){
					$("#row" + id).remove();
				}	
			});
			$("#confirm-delete").modal('hide');
		});    			
}
</script>
