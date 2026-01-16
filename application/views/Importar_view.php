<!DOCTYPE html> 
<html lang="en">
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title> Taxi </title>
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
    <div id="sb-site">
        <div class="sb-slidebar bg-black sb-left sb-style-overlay">
            <div class="scrollable-content scrollable-slim-sidebar">
                <div class="pad10A">
                    <div class="divider-header">Online</div>
                    <ul class="chat-box">
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial1.jpg" alt="">
                                <div class="small-badge bg-green"></div>
                            </div>
                            <b>
                                Grace Padilla
                            </b>
                            <p>On the other hand, we denounce...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial2.jpg" alt="">
                                <div class="small-badge bg-green"></div>
                            </div>
                            <b>
                                Carl Gamble
                            </b>
                            <p>Dislike men who are so beguiled...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial3.jpg" alt="">
                                <div class="small-badge bg-green"></div>
                            </div>
                            <b>
                                Michael Poole
                            </b>
                            <p>Of pleasure of the moment, so...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial4.jpg" alt="">
                                <div class="small-badge bg-green"></div>
                            </div>
                            <b>
                                Bill Green
                            </b>
                            <p>That they cannot foresee the...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial5.jpg" alt="">
                                <div class="small-badge bg-green"></div>
                            </div>
                            <b>
                                Cheryl Soucy
                            </b>
                            <p>Pain and trouble that are bound...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                    </ul>
                    <div class="divider-header">Idle</div>
                    <ul class="chat-box">
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial6.jpg" alt="">
                                <div class="small-badge bg-orange"></div>
                            </div>
                            <b>
                                Jose Kramer
                            </b>
                            <p>Equal blame belongs to those...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial7.jpg" alt="">
                                <div class="small-badge bg-orange"></div>
                            </div>
                            <b>
                                Dan Garcia
                            </b>
                            <p>Weakness of will, which is same...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial8.jpg" alt="">
                                <div class="small-badge bg-orange"></div>
                            </div>
                            <b>
                                Edward Bridges
                            </b>
                            <p>These cases are perfectly simple...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                    </ul>
                    <div class="divider-header">Offline</div>
                    <ul class="chat-box">
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial1.jpg" alt="">
                                <div class="small-badge bg-red"></div>
                            </div>
                            <b>
                                Randy Herod
                            </b>
                            <p>In a free hour, when our power...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="<?php echo base_url(); ?>assets/image-resources/people/testimonial2.jpg" alt="">
                                <div class="small-badge bg-red"></div>
                            </div>
                            <b>
                                Patricia Bagley
                            </b>
                            <p>when nothing prevents our being...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="sb-slidebar bg-black sb-right sb-style-overlay">
            <div class="scrollable-content scrollable-slim-sidebar">

            </div>
        </div>
        <div id="loading">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

        <div id="page-wrapper">
            <div id="page-header" class="bg-gradient-9">
                <div id="mobile-navigation">
                    <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
                    <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
                </div>
                <div id="header-logo" class="logo-bg">
                    <a href="index.html" class="logo-content-big" title="MonarchUI">
                        Monarch <i>UI</i>
                        <span>The perfect solution for user interfaces</span>
                    </a>
                    <a href="index.html" class="logo-content-small" title="MonarchUI">
                        Monarch <i>UI</i>
                        <span>The perfect solution for user interfaces</span>
                    </a>
                    <a id="close-sidebar" href="#" title="Close sidebar">
                        <i class="glyph-icon icon-angle-left"></i>
                    </a>
                </div>
             
            
    </div>
    <div id="page-sidebar">
        <div class="scroll-sidebar">


            <ul id="sidebar-menu">
                <li class="header"><span>SAC</span></li>
                <?php if($rol=="admin"){ ?>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/dashboard/" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>GESTION DE USUARIOS</span>
                    </a>
                </li>
                <li class="divider"></li>
                     <li>
                    <a href="<?php echo base_url(); ?>index.php/importar" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>IMPORTA BASES DE DATOS</span>
                    </a>
                </li>
                <li class="divider"></li>
                     <li>
                    <a href="<?php echo base_url(); ?>index.php/dashboard/consultas" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>CONTADOR</span>
                    </a>
                </li>
                <li class="divider"></li>
                     <li>
                    <a href="<?php echo base_url(); ?>index.php/dashboard/eliminarm" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>ELIMINAR</span>
                    </a>
                </li>
                <li class="divider"></li>
                <?php  } ?>
                     <li>
                    <a href="<?php echo base_url(); ?>index.php/crud" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>CONSULTAR</span>
                    </a>
                </li>
                <li class="divider"></li>
                     <li>
                    <a href="<?php echo base_url(); ?>index.php/crud/Guardar" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>CREAR REPORTE</span>
                    </a>
                </li>
                <li class="divider"></li>
                     <li>
                    <a href="<?php echo base_url(); ?>index.php/crud/Actualizar" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>ACTUALIZAR O ELIMINAR</span>
                    </a>
                </li>
                <li class="divider"></li>
                
                 <li>
                    <a href="<?php echo base_url(); ?>index.php/login/logout_ci" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>CERRAR SESION</span>
                    </a>
                </li>
                <li class="divider"></li>
            
            
               
             
            
             
            </ul><!-- #sidebar-menu -->


        </div>
    </div>
    <div id="page-content-wrapper">
        <div id="page-content">

            <div class="container">


                <!-- Sparklines charts -->

                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/sparklines/sparklines.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/sparklines/sparklines-demo.js"></script>

                <!-- Flot charts 

                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/flot/flot.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/flot/flot-resize.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/flot/flot-stack.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/flot/flot-pie.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/flot/flot-tooltip.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/flot/flot-demo-1.js"></script>-->

                <!-- PieGage charts -->

                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/piegage/piegage.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/piegage/piegage-demo.js"></script>

                
                <div class="row">
                    <div class="col-md-12">
                       <div class="content-box">
                        <h3 class="content-box-header bg-primary">
                            Importación
                        </h3>
                        <div class="content-box-wrapper">
                         <div class="example-box-wrapper">
                            <ul class="nav-responsive nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">Importar Registros</a></li>
                                

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    
                                    <!-- Botón para descargar plantilla -->
                                    <div class="row" style="margin-bottom: 20px;">
                                        <div class="col-md-12">
                                            <div class="alert alert-info">
                                                <i class="fa fa-info-circle"></i> 
                                                <strong>Importante:</strong> Descargue la plantilla de Excel para conocer el formato correcto de importación.
                                                <a href="<?php echo base_url().'index.php/importar/descargar_plantilla'; ?>" class="btn btn-success btn-sm pull-right">
                                                    <i class="fa fa-download"></i> Descargar Plantilla
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <form role="form" name="form_import" id="form_import" method="POST" enctype="multipart/form-data" action="<?php echo base_url()."index.php/importar/excel_import"; ?>" class="form-horizontal bordered-row">
                                        <div class="row">       

                                           <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nombre" class="col-md-2 text-right" >Nombre Usuario:</label>
                                                    <div class="col-md-8">
                                                    <select name="nombre" id="nombre" class="selectpicker form-control" data-live-search="true" required="">
                                                        <?php 
                                                        echo "<option value=''>Seleccione</option>";
                                                        foreach($users as $row){
                                                         
                                                         echo '<option value="'. $row['id_user'].'">'. $row['nombres'].'</option>';
                                                          }
                                                        ?>
                                                                       
                                                        </select>
                                                    </div>                                                    
                                                </div> 
                                            </div>    
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="file" class="col-md-4 text-right">Seleccione archivo Valido(.xls o .xlsx):</label>
                                                    <div class="col-md-8">                                                   
                                                         <input type="file"  class="form-control" name="file" id="file" required accept=".xls, .xlsx" required >
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                      
                                 <div class="row">
                                                                     
                                 </div>

                                <div class="row">
                                    <div class="col-md-2 col-md-offset-4">
                                        <button class="btn btn-lg btn-primary btn-block" id="enviarf" type="submit">Enviar</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                       
                       

                    </div>
                </div>
            </div>
        </div>                   
    </div>

</div>

</div>
</div>



</div>
</div>
</div>


<!-- WIDGETS -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/progressbar/progressbar.js"></script>

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
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/widgets/datatable/datatable-tabletools.js"></script>

<script type="text/javascript">
$(document).ready(function() {





 $('#form_import').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:"<?php echo base_url();?>index.php/importar/excel_import",
            method:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){
                $('#file').val('');
                
                alert(data);
            }
        })
    });

}); 


</script>
</div>
</body>
</html>