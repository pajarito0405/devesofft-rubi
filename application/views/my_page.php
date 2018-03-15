<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= translate("personal_profile"); ?>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <?php if (file_exists($user_object->url_photo)) { ?>
                            <img class="profile-user-img img-responsive img-circle"
                                 src="<?= base_url() . $user_object->url_photo; ?>" alt="">
                        <?php } else { ?>
                            <img class="profile-user-img img-responsive img-circle"
                                 src="<?= base_url(); ?>admin_template/assets/images/user_male.png" alt="">
                        <?php } ?>
                        <h3 class="profile-username text-center"><?= $user_object->fullname; ?></h3>

                        <p class="text-muted text-center"><?= translate("affiliado_lang"); ?></p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b><?= translate("email_lang"); ?></b> <a
                                    class="pull-right"><?= $user_object->email; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b><?= translate("user_lang"); ?></b> <a
                                    class="pull-right"><?= $user_object->user; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b><?= translate("tele"); ?></b> <a class="pull-right"><?= $user_object->phone; ?></a>
                            </li>
                        </ul>

                        <a href="<?= site_url('user/suscribed_form/' . $user_object->user); ?>"
                           class="btn btn-primary btn-block"><b> <i
                                    class="fa fa-envelope"></i> <?= translate("suscribed_lang"); ?></b></a>

                        <div style="margin-top: 10px;">
                            <a name="fb_share" type="button_count"
                               share_url="<?= site_url('user/view_my_page/' . $user_object->user); ?>"></a>
                            <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share"
                                    type="text/javascript"></script>

                            <a href="https://twitter.com/share" class="twitter-share-button"
                               data-url="<?= site_url('user/view_my_page/' . $user_object->user); ?>">Tweet</a>
                            <script>!function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + '://platform.twitter.com/widgets.js';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, 'script', 'twitter-wjs');</script>

                            <!-- Inserta esta etiqueta en la sección "head" o justo antes de la etiqueta "body" de cierre. -->
                            <script src="https://apis.google.com/js/platform.js" async defer>
                                {
                                    lang: 'es'
                                }
                            </script>

                            <!-- Inserta esta etiqueta donde quieras que aparezca Botón Compartir. -->
                            <div class="g-plus" data-action="share"></div>


                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?= translate("info_lang"); ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php foreach ($infos as $i) { ?>
                            <strong><i class="fa fa-book margin-r-5"></i> <?= $i->title . " ( " . $i->date . " ) "; ?>
                            </strong>
                            <p class="text-muted">
                                <?= $i->text; ?>
                            </p>

                            <hr>
                        <?php } ?>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?= translate("events_lang"); ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php foreach ($events as $e) { ?>
                            <strong><i
                                    class="fa fa-calendar margin-r-5"></i> <?= $e->title . " ( " . $e->date . " ) "; ?>
                            </strong>
                            <p class="text-muted">
                                <?= $e->text; ?>
                            </p>

                            <hr>
                        <?php } ?>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?= translate("links_list"); ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php foreach ($links as $link) { ?>
                            <strong><i class="fa fa-link margin-r-5"></i> <?= $link->title; ?></strong>
                            <br/>
                            <a target="_blank" href="<?= $link->url; ?>"><?= $link->url; ?></a>
                            <hr>
                        <?php } ?>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li <?php if ($tab_active == "gadsapp") { ?> class="active" <?php } ?> ><a href="#activity"
                                                                                                   data-toggle="tab">Gadsapp</a>
                        </li>
                        <li <?php if ($tab_active == "form") { ?> class="active" <?php } ?> ><a href="#settings"
                                                                                                data-toggle="tab"><?= translate("afiliacion_form"); ?></a>
                        </li>
                        <?php if ($conference) { ?>
                            <li><a data-toggle="tab" href="#conference"><?= translate("conferencia_lang"); ?></a>
                            </li> <?php } ?>
                    </ul>
                    <div class="tab-content">

                        <div class="<?php if ($tab_active == "gadsapp") { ?> active <?php } ?> tab-pane" id="activity">
                            <!-- aqui lo de la tienda-->
                            <div class="row">
                                <div class="col-xs-1"></div>
                                <div class="col-xs-9">
                                    <img class="img-responsive" src="<?= base_url(); ?>admin_lte/dist/img/banner.png"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1"></div>
                                <div class="col-xs-9">
                                    <h1 style="color: #3c8dbc;"><?= translate("welcome_to_gadsapp"); ?></h1>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div style="text-align: center;color: #3c8dbc;"><i
                                                    class="fa fa-users fa-4x"></i></div>
                                            <br/>

                                            <p style="text-align: justify;">Una sociedad de emprendedores que desde la
                                                rama de las tecnologías te brindamos la posibilidad de trabajar con
                                                nosotros y obtener grandes beneficios.</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <div style="text-align: center;color: #3c8dbc;"><i
                                                    class="fa fa-smile-o fa-4x"></i></div>
                                            <br/>

                                            <p style="text-align: justify;">Gadsapp se encarga de todo, nuestra política
                                                expresa: "Si sabes configurar tú perfil de Facebook, Sabes trabajar con
                                                nuestras herramientas informáticas."</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <div style="text-align: center;color: #3c8dbc;"><i
                                                    class="fa fa-money fa-4x"></i></div>
                                            <br/>

                                            <p style="text-align: justify;">Con el plan de compensación de Gadsapp te
                                                brindamos la posibilidad de lograr obtener libertad financiera con tú
                                                trabajo, sin horarios ni jefes.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-1"></div>
                                <div class="col-xs-9">

                                    <h1 style="color: #3c8dbc;"><?= translate("plan_referidos"); ?></h1>
                                    <hr/>
                                    <div>
                                        <p style="text-align: center;"><span style="font-weight: bold; color:#3c8dbc; ">Gadsapp</span>
                                            es una empresa que bonifica el desempeño de crecimiento por parte los
                                            afiliados con su <span style="font-weight: bold; color:#3c8dbc;">Plan de Referidos</span>.
                                            La modalidad de red es Uninivel donde puedes invitar sin límites y la
                                            empresa paga hasta ciertos niveles de profundidad, entre los bonos
                                            encontramos:</p>
                                    </div>
                                    <br/>

                                    <div style="text-align: center;">
                                        <button data-placement="top" data-toggle="popover"
                                                title="Cada vez que refieres a un afiliado"
                                                data-content="Gadsapp te paga un bono por cada afiliado que traigas a la red"
                                                class="btn btn-default">Bono de Inicio Rápido
                                        </button>
                                        <button data-placement="top" data-toggle="popover"
                                                title="Cada vez que pagues el Asesoramiento"
                                                data-content="Gadsapp te paga un bono por cada Asesoriamiento mensual adquirido"
                                                class="btn btn-default">Bono Residual
                                        </button>
                                        <button data-placement="top" data-toggle="popover"
                                                title="Cada vez que se completa un monto de dinero"
                                                data-content="Gadsapp sortea entre los afiliados y paga 5 niveles hacia arriba"
                                                class="btn btn-default">Bono Global
                                        </button>
                                        <button data-placement="top" data-toggle="popover"
                                                title="Cada vez que se completa un monto de dinero"
                                                data-content="Gadsapp sortea entre los afiliados y paga 10 niveles hacia arriba"
                                                class="btn btn-default">Bono Gadsapp
                                        </button>
                                    </div>
                                    <div>
                                        <h1 style="color: #3c8dbc;">Bono de Inicio Rápido</h1>
                                        <hr/>
                                        <p style="text-align: center;"><span style="color:#3c8dbc; ">Gadsapp</span> paga
                                            en su Bono de Inicio Rápido sobre el valor de la afiliación de <span
                                                style="color: #3c8dbc;">$1.000</span> anuales, hasta el 5to nivel de
                                            profundidad de tu organización.</p>
                                        <table class="table table-striped">
                                            <tr>
                                                <td style="font-weight: bold;">Niveles de profundidad</td>
                                                <td style="font-weight: bold;">Ganancias sobre la Afiliación</td>
                                            </tr>
                                            <tr>
                                                <td>1er Nivel</td>
                                                <td>$100.00 por cada afiliado referido</td>
                                            </tr>
                                            <tr>
                                                <td>2do Nivel</td>
                                                <td>$30.00 por cada afiliado referido</td>
                                            </tr>
                                            <tr>
                                                <td>3er Nivel</td>
                                                <td>$10.00 por cada afiliado referido</td>
                                            </tr>
                                            <tr>
                                                <td>4to Nivel</td>
                                                <td>$5.00 por cada afiliado referido</td>
                                            </tr>
                                            <tr>
                                                <td>5to Nivel</td>
                                                <td>$5.00 por cada afiliado referido</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div>
                                        <h1 style="color: #3c8dbc;">Bono Residual</h1>
                                        <hr/>
                                        <table class="table table-striped">
                                            <tr>
                                                <td style="font-weight: bold;">Niveles de profundidad</td>
                                                <td style="font-weight: bold;">Ganancias sobre la Afiliación</td>
                                            </tr>
                                            <tr>
                                                <td>1er Nivel</td>
                                                <td>$4.00 por cada Asesoramiento Mensual</td>
                                            </tr>
                                            <tr>
                                                <td>2do Nivel</td>
                                                <td>$5.00 por cada Asesoramiento Mensual</td>
                                            </tr>
                                            <tr>
                                                <td>3er Nivel</td>
                                                <td>$5.00 por cada Asesoramiento Mensual</td>
                                            </tr>
                                            <tr>
                                                <td>4to Nivel</td>
                                                <td>$7.00 por cada Asesoramiento Mensual</td>
                                            </tr>
                                            <tr>
                                                <td>5to Nivel</td>
                                                <td>$7.00 por cada Asesoramiento Mensual</td>
                                            </tr>
                                            <tr>
                                                <td>6to Nivel</td>
                                                <td>$11.00 por cada Asesoramiento Mensual</td>
                                            </tr>
                                            <tr>
                                                <td>7mo Nivel</td>
                                                <td>$11.00 por cada Asesoramiento Mensual</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="<?php if ($tab_active == "form") { ?> active <?php } ?> tab-pane" id="settings">
                            <div>
                                <?php echo get_message_from_operation(); ?>
                            </div>
                            <form role="form" enctype=multipart/form-data class="form-horizontal"
                                  action="<?= site_url("user/add_afiliado/$user_object->user"); ?>" method="post">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("fullname_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                            <input type="text" placeholder="<?= translate("fullname_lang"); ?>"
                                                   class="form-control" name="name">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("country_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                            <select name="country_id" class="form-control">
                                                <?php foreach ($countries as $country) { ?>
                                                    <option
                                                        value="<?= $country->country_id; ?>"><?= $country->country_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("city_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" placeholder="<?= translate("city_lang"); ?>"
                                                   class="form-control" name="city">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("address_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-ma"></i></span>
                                            <textarea class="form-control" name="address">
                                                
                                            </textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("postal_code"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" placeholder="<?= translate("postal_code"); ?>"
                                                   class="form-control" name="postal_code">
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("cedula_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                            <input type="text" placeholder="<?= translate("cedula_lang"); ?>"
                                                   class="form-control" name="cedula">
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
                                            <input type="email" placeholder="<?= translate("email_lang"); ?>"
                                                   class="form-control" name="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("email_repeat_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" placeholder="<?= translate("email_lang"); ?>"
                                                   class="form-control" name="email_repeat">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("user_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" pattern="[a-zA-Z][a-zA-Z0-9.]+"
                                                   placeholder="<?= translate("user_lang"); ?>" class="form-control"
                                                   name="user">
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
                                            <input type="text" placeholder="<?= translate("phone_lang"); ?>"
                                                   class="form-control" name="phone">
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("sex_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                            <select name="sex" class="form-control">
                                                <option value="1"><?= translate("masculino_lang"); ?></option>
                                                <option value="2"><?= translate("femenino_lang"); ?></option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("birthday_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                            <input type="date" name="birthdate" data-date-format="dd-mm-yyyy"
                                                   data-date-viewmode="years" class="form-control date-picker">

                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("mlm_procedencia"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-share-alt"></i></span>
                                            <input type="text" placeholder="<?= translate("mlm_procedencia"); ?>"
                                                   class="form-control" name="mlm">
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
                                            <input type="password" placeholder="<?= translate("password_lang"); ?>"
                                                   class="form-control" name="password">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("repeat_password_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password"
                                                   placeholder="<?= translate("repeat_password_lang"); ?>"
                                                   class="form-control" name="repeat_password">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        <?= translate("patrocinador_lang"); ?>
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input value="<?= $user_object->email ?>" readonly="readonly" type="email"
                                                   placeholder="<?= translate("patrocinador_lang"); ?>"
                                                   class="form-control" name="patrocinador">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
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


                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">
                                    </label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="right">
                                                <button class="btn btn-primary"><i
                                                        class="fa fa-check"></i> <?= translate("accept_lang"); ?>
                                                </button>
                                                <button class="btn btn-default"><i
                                                        class="fa fa-remove"></i> <?= translate("cancel_lang"); ?>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->

                        <?php if ($conference) { ?>
                            <div class="tab-pane" id="conference">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <?php if ($conference->type == 1) { ?>
                                            <div>
                                                <iframe src="https://www.youtube.com/embed/<?= $conference->url; ?>"
                                                        style="width: 100%; height: 600px;">
                                                    Sorry your browser does not support inline frames.
                                                </iframe>
                                            </div>
                                        <?php } else { ?>
                                            <iframe src="<?= $conference->url; ?>" style="width: 100%; height: 600px;">
                                                Sorry your browser does not support inline frames.
                                            </iframe>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->

<script type="text/javascript">
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
</script>


