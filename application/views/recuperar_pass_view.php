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

    <div id="page-content-wrapper">
        <div>

            <div class="container">
               
                <div class="row">
                    <div class="col-md-12" style="margin-top:15px;">
                       <div class="content-box">
                        <h3 class="content-box-header bg-primary">
                            Recuperar contraseña
                        </h3>
                        <div class="content-box-wrapper">
                         <div class="example-box-wrapper">
                             
                          
                                 
                <form role="form" name="fusuario" id="fusuario" method="POST" action="<?php echo base_url().'index.php/dashboard/guardar'; ?>" class="form-horizontal bordered-row">
                                        <div class="row">       

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                 <label for="usuario" class="col-md-3 text-right" style="margin-top: 5px;">Correo Registrado:</label>
                                                    <div class="col-md-8">                                                   
                                                        <input type="email" class="form-control" id="usuario" name="usuario" placeholder="Ingrese correo registrado para recuperar la contraseña" required="true">
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                      
                                
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-6">
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
<!-- Content box -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/content-box/contentbox.js"></script>
<!-- Overlay -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/overlay/overlay.js"></script>
<!-- Widgets init for demo -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js-init/widgets-init.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
    $("#fusuario").submit(function(e){    

     //resto código 
   
         e.preventDefault();

                  $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>index.php/login/verificar_user/",
                    data:$("#fusuario").serialize()
                }).done(function(res){
                    
                    if(res=="1"){ alert("Correo enviado!, verfica tu bandeja de entrada o spam. ");  recargar();}
                    if(res=="2"){alert("El correo no se encuentra registrado en la plataforma!");
                        $('#fusuario')[0].reset();
                     
                       
                    }
                    
                });
        
 

 }); 


     }); 
 function recargar(){
    window.location="<?php echo base_url();?>index.php/login/";
 }

</script>
</div>
</body>
</html>