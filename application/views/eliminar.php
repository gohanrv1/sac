<!DOCTYPE html> 

<html lang="es">

<head>



    <style>

        /* Loading Spinner */

        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}

    </style>





    <meta charset="UTF-8">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <title> sac </title>

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

                    <h2>Eliminar</h2>

                </div>



             



        <div class="content-box-wrapper">

         <div class="example-box-wrapper">

            <div class="col-md-10">

               

               

                    <button role="button" id="eliminar_usuarios" class="btn btn-opc" onclick="eliminarUsuarios()">

							<i class="glyphicon glyphicon-trash"></i> Eliminar

						</button>

                </div>

                <br>

                <br>

                <table id="tabla_usuarios" width="80%" class="table table-hover table-bordered">

                    <thead>

                        <tr>

                            <th></th>

                            <th>id</th>

                            <th>Numero_Documento</th>

                            <th>Nombres</th>

                            <th>Apellidos</th>

                            <th>Descripcion_Reporte</th>

                        </tr>

                    </thead>

                    <tbody>



                    </tbody>

                </table>

            </div>

        </div>

       </div>

        </div>



    <div id="modal_usuarios" class="modal fade" tabindex="-1" role="dialog">

        <div class="modal-dialog" role="document">

            <form id="form_usuarios">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

								<span aria-hidden="true">&times;</span>

							</button>

                        <h2 class="modal-title text-primary"><b>Nuevo Cliente</b></h2>

                    </div>

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="client" class="control-label">Cliente: *</label>

                                    <input type="text" class="form-control" id="client" placeholder="Nombre Cliente" required="required" />

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="username" class="control-label">Usuario: *</label>

                                    <input type="text" class="form-control" id="username" placeholder="Usuario" required="required">

                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group">

                                    <label for="mail" class="">Email: *</label>

                                    <input type="email" class="form-control" id="mail" placeholder="Correo electronico" required="required" />

                                </div>

                            </div>

                        </div>

                        <fieldset>

                            <h3>

                                <legend class="text-primary">

                                    <strong> Directorios del Usuario</strong>

                                </legend>

                            </h3>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label for="soluciones" class="control-label">Soluciones:</label>

                                        <select id="soluciones" class="form-control">

											<option value="">-- Seleccionar --</option>

										</select>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label for="informes" class="control-label">Informes Mensuales:</label>

                                        <select id="informes" class="form-control">

											<option value="">-- Seleccionar --</option>

										</select>

                                    </div>

                                </div>

                            </div>

                        </fieldset>

                    </div>

                    <div class="modal-footer">

                        <button id="cancelar" type="button" class="btn btn-danger">

							<i class="glyphicon glyphicon-ban-circle"></i> Cancelar

						</button>

                        <button id="guardar" type="submit" class="btn btn-primary">

							<i class="glyphicon glyphicon-floppy-disk"></i> Guardar

						</button>

                    </div>

                </div>

                <!-- /.modal-content -->

            </form>

        </div>

        <!-- /.modal-dialog -->

    </div>

    <!-- /.modal -->



    <div id="modal_newpasswd" class="modal fade" tabindex="-1" role="dialog">

        <div class="modal-dialog" role="document">

            <form id="form_newpasswd" class="form-horizontal">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

							<span aria-hidden="true">&times;</span>

						</button>

                        <h4 class="modal-title text-primary"><b>Cambiar Contraseña</b></h4>

                    </div>

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-offset-3 col-md-6">

                                <div class="form-group">

                                    <label for="new_password" class="control-label">Nueva Contraseña: *</label>

                                    <input type="password" class="form-control" id="new_password" placeholder="Nueva Contraseña" minlength="8" required="required" />

                                </div>

                            </div>

                            <div class="col-md-offset-3 col-md-6">

                                <div class="form-group">

                                    <label for="confirm_password" class="control-label">Confirmar Contraseña: *</label>

                                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirmar Contraseña" required="required">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button id="cancelar_passwd" type="button" class="btn btn-danger">

							<i class="glyphicon glyphicon-ban-circle"></i> Cancelar

						</button>

                        <button id="guardar_passwd" type="submit" class="btn btn-primary">

							<i class="glyphicon glyphicon-floppy-disk"></i> Guardar

						</button>

                    </div>

                </div>

                <!-- /.modal-content -->

            </form>

        </div>

        <!-- /.modal-dialog -->

    </div>

    <!-- /.modal -->





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

 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

   <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

    <link href="https://cdn.datatables.net/select/1.2.6/css/select.bootstrap4.min.css" rel="stylesheet">



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


table = $("#tabla_usuarios").DataTable({

        // configuración para establecer lenguaje en español
         dom: 'Bfrtip',
           buttons: [
            {
                extend: 'print',
                messageTop:'', 
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )                        
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            },
             {
                extend: 'excel',
                messageTop:'', 
            },
             'copyHtml5'
        ],

        ajax: {

            url: "<?php echo base_url();?>index.php/dashboard/eliminarm2",

             dataSrc:"",

        },

        columns: [ //parametrización de los datos.

            { data: 'nd' },

            { data: 'id' },

            { data: 'Numero_Documento' },

            { data: 'Nombres' },

            { data: 'Apellidos' },

            { data: 'Descripcion_Reporte' }

        ],

        columnDefs: [ //Definicion de columnas

            {

                targets: 0,

                orderable: false,

                className: 'select-checkbox'

            },

            {

                targets: 1,

                visible: false,

                searchable: false

            }

        ],

        select: {

            style: 'os',

            selector: 'td:first-child'

        },

        order: [2, 'asc']

    });





    table

        .on('select', function(e, dt, type, indexes) {

            var count = table.rows({ selected: true }).count();

            if (count < 2) {

                $('#tabla_usuarios').removeAttr("disabled");

            } else {

                $('#tabla_usuarios').attr("disabled", "disabled");

            }

          //  var rowData = table.rows( { selected: true } ).data().toArray();

           // alert( count+"\n"+JSON.stringify( rowData ) );

        })

        .on('deselect', function(e, dt, type, indexes) {

            var count = table.rows({ selected: true }).count();

            if (count < 2) {

                $('#tabla_usuarios').removeAttr("disabled");

            } else {

                $('#tabla_usuarios').attr("disabled", "disabled");

            }



        });

        

        

        

        

    function eliminarUsuarios(){

	var count = table.rows( { selected: true } ).count();

	var rowData = table.rows( { selected: true } ).data().toArray();

	formData = [];

	for (i = 0;i < count;i++){

		formData[i] = rowData[i]['id'];

			$.ajax({

		type: 'GET',

		url:  "<?php echo base_url();?>index.php/dashboard/eliminarmbase/"+formData[i],

		dataType: 'json',

		success: function (data, status){

		    

		    

		

	  	},

	  	error: function (xhr) {

	  		var response = JSON.parse(xhr.responseText);

	  	

	  	}

	});

		

	}

	

 table.ajax.reload();

 alert("eliminado exitosamente")

}

        

        

        





</script>

</div>

</body>

</html>