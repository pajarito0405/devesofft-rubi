
<?php if(!$_SESSION['id_admin'] && $_SESSION['role_id'] != '3'  ){
  redirect(site_url().'Rubi_admin');
};?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="José Gonzalez">
  <meta name="keyword" content="">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Rubi | Admin</title>

  <!-- Bootstrap CSS -->
  <link href="<?=base_url();?>assets_admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <!--<link href="<?=base_url();?>assets_admin/css/bootstrap-theme.css" rel="stylesheet"> problematico --> 
  <link href="<?=base_url();?>assets_admin/assets/bootstrap-imageupload-master/dist/css/bootstrap-imageupload.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?=base_url();?>assets_admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets_admin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?=base_url();?>assets_admin/css/style.css" rel="stylesheet">
  <link href="<?=base_url();?>assets_admin/css/style-responsive.css" rel="stylesheet" />

    <!-- container section end -->
  <!-- javascripts -->
  <script src="<?=base_url();?>assets_admin/js/jquery.js"></script>

  <script src="<?=base_url();?>assets_admin/js/bootstrap.min.js"></script>
  <script src="<?=base_url();?>assets_admin/assets/bootstrap-imageupload-master/dist/js/bootstrap-imageupload.js"></script>      
  <script src="<?=base_url();?>assets_admin/assets/bootstrap-imageupload-master/src/js/main.js"></script>
 


  <!-- nice scroll -->
  <script src="<?=base_url();?>assets_admin/js/jquery.scrollTo.min.js"></script>
  <script src="<?=base_url();?>assets_admin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="<?=base_url();?>assets_admin/assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="<?=base_url();?>assets_admin/js/scripts.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <!-- Bootstrap select -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script-->

  <!-- JQUERY FILE UPLOAD MASTER -->
  
  <!-- Bootstrap styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?=base_url();?>assets_admin/assets/jq_fileup/css/style.css">

  <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

  <link rel="stylesheet" href="<?=base_url();?>assets_admin/assets/jq_fileup/css/jquery.fileupload.css">
  <link rel="stylesheet" href="<?=base_url();?>assets_admin/assets/jq_fileup/css/jquery.fileupload-ui.css">
  <!-- CSS adjustments for browsers with JavaScript disabled -->
  <noscript><link rel="stylesheet" href="<?=base_url();?>assets_admin/assets/jq_fileup/css/jquery.fileupload-noscript.css"></noscript>
  <noscript><link rel="stylesheet" href="<?=base_url();?>assets_admin/assets/jq_fileup/css/jquery.fileupload-ui-noscript.css"></noscript>

  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
<!-- blueimp Gallery script -->
<script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<!-- <script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/jquery.fileupload-image.js"></script> -->
<!-- The File Upload audio preview plugin -->
<script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="<?=base_url();?>assets_admin/assets/jq_fileup/js/main.js"></script>

<!-- Bootstrap datetime -->
  <link href="<?=base_url();?>assets_admin/assets/bootstrap-datetime/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="<?=base_url();?>assets_admin/assets/bootstrap-datetime/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?=base_url();?>assets_admin/assets/bootstrap-datetime/moment.js" charset="UTF-8"></script>
<!--<script type="text/javascript" src="<?=base_url();?>assets_admin/assets/bootstrap-datetime/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script> -->
<!-- Bootstrap datetime -->

<!-- Bootstrap tags input -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> 
<!-- Bootstrap tags input -->

<!-- Reloj Bootstrap -->
    <link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.css">
    <script src="http://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
<!-- Reloj Bootstrap -->


<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>

  <!-- JQUERY FILE UPLOAD MASTER -->
  

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

</head>
<body>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
       <a href="#" class="col-lg-1 logo" style="margin-left:0px;margin-top:5px;"><img class="img-responsive" alt="" src="<?=base_url();?>assets_admin/img/logo_rubi.png"></a>
      <a href="index.html" class="logo" style="margin-left:9px;">Rubi <span class="lite"> ADMIN</span></a>

      <!--logo end-->

      <!--<div class="nav search-row" id="top_menu">
   
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul> 
        
      </div> -->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?=base_url();?>assets_admin/img/avatar1.jpg" style="width:35px;height:35px;">
                            </span>
                            <span class="username"><?=$ofi->nombre;?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="<?=base_url();?>login/logout_admin"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

