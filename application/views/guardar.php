<!DOCTYPE html> 
<html lang="es">
<head><meta charset="gb18030">

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    
    
    





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
                    <a href="<?php echo base_url(); ?>" class="logo-content-small" title="MonarchUI"></a>
                </div>
                <div id="header-logo" class="logo-bg">
                    <a href="<?php echo base_url(); ?>" class="logo-content-big" title="MonarchUI">
                        Monarch <i>UI</i>
                        <span>The perfect solution for user interfaces</span>
                    </a>
                    <a href="<?php echo base_url(); ?>" class="logo-content-small" title="MonarchUI">
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
                     <li class="quitarmovil">
                    <a href="<?php echo base_url(); ?>index.php/importar" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>IMPORTA BASES DE DATOS</span>
                    </a>
                </li>
                <li class="divider quitarmovil"></li>
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

                
                <!-- PieGage charts -->

                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/piegage/piegage.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/charts/piegage/piegage-demo.js"></script>

                <div id="page-title">
                    <h2>Guardar</h2>
                   

                </div>

                
                <div class="row">
                    <div class="col-md-12">
                       <div class="content-box">
                        <h3 class="content-box-header bg-primary">
                            Ingresar Conductor
                        </h3>
                        <div class="content-box-wrapper">
                         <div style="margin:10px;">
                                    
                            <form class="form-horizontal bordered-row" id="form_digitador" >

                <div class="form-group">
                    <label class="col-sm-3 control-label">Cedula:</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                                    <input type="number" class="form-control" id="ccbuscar" name="ccbuscar" required >
                                </div>
                    </div>
                </div>

                <div id="des-informacion">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nombres:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nombres" name="nombres"  required  >
                    </div>
                      <label class="col-sm-2 control-label">Apellidos:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="apellidos" name="apellidos"  required>
                    </div>
                </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Placa:</label>
                    <div class="col-sm-4">
                        <input type="text" minlength="6" maxlength="6"  class="form-control" id="placa" name="placa"  required >
                    </div>
                       <label class="col-sm-2 control-label">Estado:</label>
                    <div class="col-sm-4">

                        <select name="select" class="form-control" id="Estado" required >
                            <option value></option> 
                              <option value="INACTIVA">INACTIVA</option> 
                              <option value="ACTIVA" >ACTIVA</option>
                              <option value="ACUERDO DE PAGO">ACUERDO DE PAGO</option>
                            </select>
                    </div>
                      
                </div>

                  <!--div class="form-group">
                    <label class="col-sm-2 control-label">fecha reporte:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="fecha_reporte" name="fecha_reporte"  required >
                    </div>
                      <label class="col-sm-2 control-label">Fecha cierre:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="f_cierre" name="f_cierre"  >
                    </div>
                </div-->

                 <div class="form-group">
                    <label class="col-sm-2 control-label">Valor del Reporte:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="Valor_Reporte" type="number" name="Valor_Reporte" required >
                    </div>
                    <label class="col-sm-2 control-label">fecha reporte:</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="fecha_reporte" name="fecha_reporte" required  >
                    </div>
                </div>

                  <div class="form-group">
                      
                      <label class="col-sm-2 control-label">Descripción del Reporte:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="d_reporte" name="d_reporte"  required>
                    </div>
                    
                </div>
                </div>
                         <div class="form-group">
                    <label class="col-sm-10 control-label"></label>
                    <div class="col-sm-2">
                        <div class="input-group">
                                
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger" type="submit" id="Guardar">Guardar</button>
                                    </span>
                                </div>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/jgrowl-notifications/jgrowl.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/jgrowl-notifications/jgrowl-demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.js" integrity="sha512-mKlod4zKRIIIrcTz1adxwkprNtUm1lZZL2yP+l9UEmK6mXndshkfPojjPkVOKOanqBM9b2Gc88eBjLCAgkWtHw==" crossorigin="anonymous"></script>

<script type="text/javascript">

$(document).ready(function() {
     var md = new MobileDetect(window.navigator.userAgent)
     
    if (md.mobile() || md.tablet()) {
          $(".quitarmovil").hide();
    }else{
         $(".quitarmovil").show();
    }
});

$("#form_digitador").submit(function(event){
    event.preventDefault();
     taxista()
});
   
        
   
      
       function taxista(){
          var form = {
                   cc :$("#ccbuscar").val(),
                   nombres: $("#nombres").val(),
                   apellidos:  $("#apellidos").val(),
                   placa:  $("#placa").val(),
                   d_reporte:  $("#d_reporte").val(),
                   fecha_reporte:  $("#fecha_reporte").val(),
                  /* f_cierre:  $("#f_cierre").val(),*/
                   Valor_Reporte:  $("#Valor_Reporte").val(),
                   //afiliado_a:  $("#afiliado_a").val(),
                   Estado: $("#Estado").val()
           }
                     

           $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>index.php/crud/crear_reporte",
                    data:  JSON.stringify(form)
                }).done(function(taxista){
                    console.log(taxista)
                   if (taxista == "duplicado") {
                        alert("Ya existe un reporte con esta cedula, Utilice Actualizar!")
                   }else if (taxista == 2)
                     {
                  
                alert("El conductor se reportó con exito!")
                 location.reload();
                     }else{

                alert("Error interno")
                     }
                     
                });
           
       }



</script>


</div>
</body>
</html>