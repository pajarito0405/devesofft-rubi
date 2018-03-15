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
                            <a href="<?= site_url('dashboard'); ?>">
                                <?= translate('dashboard_lang'); ?>
                            </a>
                        </li>
                        <li class="active">
                            <?= translate("aprovacion_pagos"); ?>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <!-- start: DYNAMIC TABLE PANEL -->
                    <div class="panel panel-white">

                        <form role="form" enctype= multipart/form-data class="form-horizontal" action="<?= site_url('pago/upload_evidence'); ?>" method="post" >
                            <div class="panel-body">
                                <?php echo get_message_from_operation(); ?>
                                <br />

                                <h4 class="panel-title"><?= translate("list_pagos"); ?></h4>
                                <br /><br />
                                <table id="example1" class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                    <thead>
                                        <tr>
                                            <th><?= translate("fullname_lang") ?></th>
                                            <th><?= translate("motivo_lang"); ?></th>
                                            <th><?= translate("date"); ?></th>

                                            <th><?= translate("actions"); ?></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_pagos as $pago) { ?>
                                            <tr>
                                                <td><?= $pago->nombre_usuario; ?></td>
                                                <td>
                                                    <?php
                                                    $texto_motivo = "";
                                                    switch ($pago->motivo) {
                                                        case 1: {
                                                                $texto_motivo = translate("pay_affiliacion");
                                                                break;
                                                            }
                                                        case 2: {
                                                                $texto_motivo = translate("mensualidad");
                                                                break;
                                                            }
                                                    }
                                                    ?>
                                                    <?= $texto_motivo; ?>
                                                </td>
                                                <td><?= $pago->fecha; ?></td>                                                
                                                <td>                                                    
                                                    <a href="#" onclick="show_evidence('<?= $pago->url_photo; ?>')" class="btn btn-info"><i class="fa fa-eye"></i> <?= translate("ver_evidencia"); ?></a>
                                                    <a href="#" onclick="select_id('<?= $pago->pago_id;?>');" class="btn btn-primary"><i class="fa fa-check-circle"></i> <?= translate("aprobar_pago"); ?></a>
                                                </td>


                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <!-- end: DYNAMIC TABLE PANEL -->
                </div>
            </div>

            <!-- end: PAGE CONTENT-->
        </div>

    </div>
    <!-- end: PAGE -->
</div>

<div class="modal fade" id="modal-evidence-pago" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?= translate("evidence_pago") ?></h4>
            </div>
            <div class="modal-body">

                <img id="" class="ev-pago img img-responsive" />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?= translate("close") ?></button>        
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-confirmar-pago" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?= translate("confirmacion_lang") ?></h4>
            </div>
            <div class="modal-body">

                <p><?= translate("are_your_sure");?></p>

            </div>
            <div class="modal-footer">
                <button type="button" onclick="aprobar_pago();" class="btn btn-primary"><?= translate("accept_lang");?></button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?= translate("close") ?></button>        
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function () {
        //Main.init();
        //SVExamples.init();
        TableData.init();
    });

    function show_evidence(url) {

        $("#modal-evidence-pago").modal("show");
        $(".ev-pago").attr("src", "<?= base_url(); ?>" + url);

    }
    
    var selected_pay = 0;
    function select_id(id){
        selected_pay = id;
        $("#modal-confirmar-pago").modal("show");        
    }
    
    function aprobar_pago(){
        window.location.href = '<?= site_url("pago/aprovar_pago/");?>'+'/'+selected_pay;
    }
</script>