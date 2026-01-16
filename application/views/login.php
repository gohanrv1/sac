<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html lang="es">
<head>
<style>
    /* Loading Spinner */
    .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
</style>
<meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Login </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/icons/favicon.png">



<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/admin-responsive.css">

<!-- Modern Custom Styles -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/custom-modern-styles.css">

<!-- JS Core -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-core/jquery-core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-core/jquery-ui-core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-core/jquery-ui-widget.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-core/jquery-ui-mouse.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-core/jquery-ui-position.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-core/transition.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-core/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-core/jquery-cookie.js"></script>





<script type="text/javascript">
    $(window).load(function(){
        setTimeout(function() {
            $('#loading').fadeOut( 400, "linear" );
        }, 300);
    });
</script>



</head>
<body>
<div id="loading">
<div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
</div>
</div>

<style type="text/css">

html,body {
    height: 100%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    background-attachment: fixed;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

#login-form {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    border: none;
    overflow: hidden;
    backdrop-filter: blur(10px);
    animation: slideIn 0.5s ease-out;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

#login-form .content-box-wrapper {
    padding: 40px !important;
}

#login-form .form-control {
    border-radius: 10px;
    border: 2px solid #e8e8e8;
    padding: 12px 20px 12px 50px;
    font-size: 15px;
    transition: all 0.3s ease;
}

#login-form .form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    transform: translateY(-2px);
}

#login-form .input-group-addon {
    border-radius: 10px 0 0 10px;
    border: 2px solid #e8e8e8;
    border-right: none;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    color: white !important;
    padding: 12px 15px;
}

#login-form .input-group-addon i {
    font-size: 18px;
}

#login-form label {
    color: #333;
    font-weight: 600;
    margin-bottom: 8px;
    font-size: 14px;
}

#login-form .button-pane {
    padding: 0;
    background: transparent;
    border-top: none;
}

#login-form .button-pane .btn {
    border-radius: 0 0 20px 20px;
    padding: 15px;
    font-size: 16px;
    font-weight: 600;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

#login-form .button-pane .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
}

.center-vertical h3 {
    text-align: center;
    color: white;
    font-weight: 700;
    text-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    margin-bottom: 30px;
}

.center-vertical h3 img {
    max-width: 200px;
    filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.3));
}

#login-form a {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

#login-form a:hover {
    color: #764ba2;
    text-decoration: none;
}

.alert {
    border-radius: 10px;
    border: none;
    padding: 12px 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

@media (max-width: 768px) {
    #login-form .content-box-wrapper {
        padding: 30px 20px !important;
    }
}

</style>
<div class="center-vertical">
<div class="center-content row">
    <form id="login-validation" class="center-margin col-xs-11 col-sm-5" method="POST" action="<?php echo base_url().'index.php/login/new_user' ?>">
        <h3 class="text-center pad25B font-gray font-size-23"><img src="<?php echo base_url().'/assets/image-resources/logo-admin5.png' ?>"></img></h3>
        <div id="login-form" class="content-box">
            <div class="content-box-wrapper pad20A">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon addon-inside bg-white font-primary">
                            <i class="glyph-icon icon-envelope-o"></i>
                        </span>
                        <input type="email" class="form-control" id="username" name="username" placeholder="Enter email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña:</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon addon-inside bg-white font-primary">
                            <i class="glyph-icon icon-unlock-alt"></i>
                        </span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                    </div>
                </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <?php 
                               if($this->session->flashdata('usuario_incorrecto')){
                            ?>
               
                               <div class="alert alert-danger"><strong><?php echo $this->session->flashdata('usuario_incorrecto'); ?></strong></div>
                            <?php
                               }
                            ?>
                             <?php echo form_hidden('token',$token);?>
                          </div>
                        </div>
                <div class="row">  
                    <div class="text-left col-md-6">
                    <a href="<?php echo base_url().'index.php/login/registro'; ?> " title="Registrar Nuevo Usuario"><strong>Registrar</strong></a>
                    </div>                  
                    <div class="text-right col-md-6">
                    <a href="<?php echo base_url().'index.php/login/recuperar_pass'; ?> " title="Recuperar Contraseña">Recuperar Contraseña</a>
                    </div>
                </div>
            </div>
            <div class="button-pane">
                <button type="submit" class="btn btn-block btn-primary">Login</button>
            </div>
        </div>

        

    </form>

</div>
</div>


<!-- WIDGETS -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/theme-switcher/themeswitcher.js"></script>

</body>
</html>