<!DOCTYPE html> 
<html lang="es">
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

<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073732485 9 0 511 0;}
@font-face
	{font-family:"Arial Narrow";
	panose-1:2 11 6 6 2 2 2 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:647 2048 0 0 159 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:ES-TRAD;
	mso-fareast-language:EN-US;}
h1
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Título 1 Car";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:37.45pt;
	margin-bottom:.0001pt;
	text-indent:-23.7pt;
	mso-pagination:none;
	mso-outline-level:1;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-font-kerning:0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-link:"Encabezado Car";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 212.6pt right 425.2pt;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:ES-TRAD;
	mso-fareast-language:EN-US;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-priority:99;
	mso-style-link:"Pie de página Car";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 212.6pt right 425.2pt;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:ES-TRAD;
	mso-fareast-language:EN-US;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Texto independiente Car";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:30.95pt;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:-18.0pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;}
span.Ttulo1Car
	{mso-style-name:"Título 1 Car";
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 1";
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-hansi-font-family:Calibri;
	mso-bidi-font-family:Calibri;
	mso-ansi-language:ES;
	font-weight:bold;}
span.TextoindependienteCar
	{mso-style-name:"Texto independiente Car";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Texto independiente";
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-hansi-font-family:Calibri;
	mso-bidi-font-family:Calibri;
	mso-ansi-language:ES;}
span.EncabezadoCar
	{mso-style-name:"Encabezado Car";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Encabezado;}
span.PiedepginaCar
	{mso-style-name:"Pie de página Car";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Pie de página";}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:12.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:ES-TRAD;
	mso-fareast-language:EN-US;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("CONTRATO%20DE%20PROTECCIÓN%20Y%20TRANSMISIÓN%20DE%20INFORMACIÓN%20Y%20DATOS%20PERSONALES_archivos/header.htm") fs;
	mso-footnote-continuation-separator:url("CONTRATO%20DE%20PROTECCIÓN%20Y%20TRANSMISIÓN%20DE%20INFORMACIÓN%20Y%20DATOS%20PERSONALES_archivos/header.htm") fcs;
	mso-endnote-separator:url("CONTRATO%20DE%20PROTECCIÓN%20Y%20TRANSMISIÓN%20DE%20INFORMACIÓN%20Y%20DATOS%20PERSONALES_archivos/header.htm") es;
	mso-endnote-continuation-separator:url("CONTRATO%20DE%20PROTECCIÓN%20Y%20TRANSMISIÓN%20DE%20INFORMACIÓN%20Y%20DATOS%20PERSONALES_archivos/header.htm") ecs;}
@page WordSection1
	{size:612.1pt 792.1pt;
	margin:99.25pt 68.9pt 45.95pt 62.95pt;
	mso-header-margin:33.15pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:612.0pt 792.0pt;
	margin:70.85pt 3.0cm 70.85pt 3.0cm;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection2
	{page:WordSection2;}
 /* List Definitions */
 @list l0
	{mso-list-id:74476695;
	mso-list-type:hybrid;
	mso-list-template-ids:1785086894 -287274538 1388232480 -1565085598 1269445062 -1512572 -350700336 3028680 454606196 -1720963080;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:30.95pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	letter-spacing:-.15pt;
	mso-font-width:100%;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:74.2pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:117.45pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:160.65pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:203.9pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:247.15pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:290.35pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:333.6pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:376.85pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1
	{mso-list-id:203490617;
	mso-list-type:hybrid;
	mso-list-template-ids:761807160 1780541058 -1322483680 -1460634398 -2008491172 -373675108 1453748726 1779850152 -656659948 -967025222;}
@list l1:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:30.95pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	letter-spacing:-.2pt;
	mso-font-width:100%;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:74.2pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:117.45pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:160.65pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:203.9pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:247.15pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:290.35pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:333.6pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:376.85pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2
	{mso-list-id:933049918;
	mso-list-type:hybrid;
	mso-list-template-ids:1881435888 1759944494 1434863850 -1425401340 -1979961258 -571416126 -2119034790 -1560086982 -762676240 500860954;}
@list l2:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:34.8pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	letter-spacing:-1.25pt;
	mso-font-width:100%;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:bold;
	mso-bidi-font-weight:bold;}
@list l2:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:77.8pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:120.65pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:163.45pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:206.3pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:249.15pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:291.95pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:334.8pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:377.65pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3
	{mso-list-id:1511488397;
	mso-list-type:hybrid;
	mso-list-template-ids:1335272948 750263146 510811318 894486676 2087344750 -893480620 -520459948 712547056 -1952537156 -1674010298;}
@list l3:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:30.95pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	letter-spacing:-.95pt;
	mso-font-width:100%;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:74.2pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:117.45pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:160.65pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:203.9pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:247.15pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:290.35pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:333.6pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:376.85pt;
	text-indent:-18.0pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l4
	{mso-list-id:1756433766;
	mso-list-type:hybrid;
	mso-list-template-ids:1330121674 -1291713146 632306998 -1714798732 -1502473502 -510127780 1672623246 -1894712252 1480206346 1811455068;}
@list l4:level1
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:34.7pt;
	text-align:right;
	text-indent:-23.65pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	letter-spacing:-1.15pt;
	mso-font-width:100%;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l4:level2
	{mso-level-number-format:roman-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:37.45pt;
	text-indent:-23.65pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-font-width:100%;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:bold;
	mso-bidi-font-weight:bold;}
@list l4:level3
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:37.2pt;
	text-indent:-17.9pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	letter-spacing:-.15pt;
	mso-font-width:100%;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:bold;
	mso-bidi-font-weight:bold;}
@list l4:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:131.7pt;
	text-indent:-17.9pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l4:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:179.1pt;
	text-indent:-17.9pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l4:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:226.45pt;
	text-indent:-17.9pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l4:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:273.8pt;
	text-indent:-17.9pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l4:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:321.2pt;
	text-indent:-17.9pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l4:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:13.0cm;
	text-indent:-17.9pt;
	mso-ansi-language:ES;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>




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

    <div id="page-content-wrapper">
        <div>

            <div class="container">
               
                <div class="row">
                    <div class="col-md-12" style="margin-top:15px;">
                       <div class="content-box">
                        <h3 class="content-box-header bg-primary">
                            Registro de usuario
                        </h3>
                        <div class="content-box-wrapper">
                         <div style="margin:10px;">
                             
                          
                                 
                <form role="form" name="fusuario" id="fusuario" method="POST" action="<?php echo base_url().'index.php'; ?>" enctype="multipart/form-data" class="form-horizontal bordered-row">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="usuario" class="col-md-4 text-right">Ingrese Correo:</label>
                                                    <div class="col-md-8">                                                   
                                                        <input type="email" class="form-control" id="usuario" name="usuario" placeholder="Ingrese un correo valido" required="true">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="usuario" class="col-md-4 text-right">Nombre/Razón Social:</label>
                                                    <div class="col-md-8">                                                   
                                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre/Razón Social" required="true">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="usuario" class="col-md-3 text-right">Celular:</label>
                                                    <div class="col-md-9">                                                   
                                                        <input type="number" class="form-control" id="Celular" name="Celular" placeholder="Celular" required="true">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">  
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pass" class="col-md-2 text-right">Contraseña:</label>
                                                    <div class="col-md-8">
                                                     <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese Contraseña" required="">
                                                 </div>                                                   
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                           <div class="form-group">
                                            <label for="pass2" class="col-md-4 text-right">Confirma Contraseña:</label>
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirmar Contraseña" required="">
                                            </div>
                                        </div>
                                    </div>                      
                                 </div>
                                 <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-2 text-right">Términos y condiciones</label>
                                        <div class="col-md-7">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" id="terminos" required="" >
                                                    Aceptar
                                                </label>
                                                <label><a href="#" data-toggle="modal" data-target="#myModal" style="
    font-size: 9px;
">POLÍTICAS Y CONDICIONES DE USO</a></label>                                               
                                               
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" id="terminos2" required="" >
                                                    Aceptar
                                                </label>
                                                <label><a href="#" data-toggle="modal" data-target="#myModal2" style="
    font-size: 9px;
">CONTRATO DE PROTECCIÓN Y TRANSMISIÓN DE INFORMACIÓN Y DATOS PERSONALES</a></label>                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                      <div id="div-file" class="col-md-6">
                                                <div class="form-group">
                                                    <label for="file" class="col-md-4 text-right">Cargue Base de datos valido en Excel.(.xls o .xlsx):</label>
                                                    <div class="col-md-8">                                                   
                                                         <input type="file"  class="form-control" name="file" id="file" required accept=".xls, .xlsx" required >
                                                    </div>
                                                </div>
                                            </div>
                                 </div>

                                <div class="row">
                                	<div class="col-md-3"> 
                                		<a href="<?php echo base_url().'descarga/Plantilla_SAC.xlsx'; ?>" id="plantilla" class="btn btn-primary">                                  
                                         	<i class="glyph-icon icon-download"></i>
					                        Descargar Plantilla
					                    </a>   
                                    </div>
                                    <div class="col-md-2 col-md-offset-2">
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
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">CONTRATO DE PROTECCIÓN Y TRANSMISIÓN DE INFORMACIÓN Y DATOS PERSONALES</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            	<div class=WordSection1>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Tahoma;
color:black;mso-fareast-language:ES-TRAD'>CONTRATO DE PROTECCIÓN Y TRANSMISIÓN
DE INFORMACIÓN Y DATOS PERSONALES DE CONDUCTORES DE VEHÍCULOS DE SERVICIO
PÚBLICO O PRIVADO CELEBRADO</span></b><b style='mso-bidi-font-weight:normal'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:Tahoma;mso-fareast-language:ES-TRAD'><o:p></o:p></span></b></p>

<p class=MsoBodyText align=center style='margin-top:2.6pt;margin-right:5.9pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
line-height:150%'><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:2.6pt;margin-right:5.9pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:2.6pt;margin-right:5.9pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>Entre
los suscritos, por una parte, <b style='mso-bidi-font-weight:normal'>EL
RESPONSABLE DE LA INFORMACIÓN</b> y <b style='mso-bidi-font-weight:normal'>EL
ENCARGADO – DEPOSITARIO DE LA INFORMACIÓN</b>, que para los efectos de este
contrato será <b style='mso-bidi-font-weight:normal'>SAC</b><b style='mso-bidi-font-weight:normal'>,</b>
se ha acordado celebrar el presente contrato para el manejo de la información y
tratamiento de datos de conductores de servicio público y/o privado, de
conformidad con las siguientes:<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:2.6pt;margin-right:5.9pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<h1 style='margin-top:6.0pt;margin-right:177.05pt;margin-bottom:0cm;margin-left:
143.65pt;margin-bottom:.0001pt;text-align:justify;text-indent:0cm;line-height:
150%'><span lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>CONSIDERACIONES</span><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma;font-weight:normal;mso-bidi-font-weight:bold'><o:p></o:p></span></h1>

<p class=MsoBodyText style='line-height:150%'><span lang=ES style='font-family:
"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:5.9pt;margin-bottom:
0cm;margin-left:34.7pt;margin-bottom:.0001pt;text-indent:-23.65pt;line-height:
150%;mso-list:l4 level1 lfo1;tab-stops:34.75pt'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.15pt'><span
style='mso-list:Ignore'>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Que EL RESPONSABLE DE LA INFORMACIÓN, ha obtenido del titular de la
información consentimiento previo, libre y expreso en su condición de conductor
de vehículos de servicio público y/o privado, para reportarlo ante EL
ENCARGADO/ DEPOSITARIO DE LA INFORMACIÓN.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:5.9pt;margin-bottom:
0cm;margin-left:34.7pt;margin-bottom:.0001pt;text-indent:-23.65pt;line-height:
150%;mso-list:l4 level1 lfo1;tab-stops:34.75pt'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.15pt'><span
style='mso-list:Ignore'>ii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Que EL RESPONSABLE DE LA INFORMACIÓN, celebra y acepta por este con EL
ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN un Contrato de <b style='mso-bidi-font-weight:
normal'>PROTECCIÓN Y TRANSMISIÓN DE INFORMACIÓN DE DATOS PERSONALES DE CONDUCTORES
DE VEHICULOS SERVICIO PÚBLICO Y/O PRIVADO</b>, con el objeto de que EL
ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN publique la información trasladada por
el RESPONSABLE.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:2.6pt;margin-right:0cm;margin-bottom:
0cm;margin-left:34.7pt;margin-bottom:.0001pt;text-indent:-26.45pt;line-height:
150%;mso-list:l4 level1 lfo1;tab-stops:34.65pt 34.75pt'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.15pt'><span
style='mso-list:Ignore'>iii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Que <b>SAC</b>, empresa que presta sus servicios del “Objeto del
Contrato”<b style='mso-bidi-font-weight:normal'>, </b>es EL
ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN trasladada por parte del RESPONSABLE (PERSONA
NATURAL O JURIDICA, en calidad de administrador o dueño de vehículos de
servicio público y/o privado). Por ende, mediante este contrato las partes
acuerdan el uso y disposición de la base de datos de información por cuenta de EL
ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:5.9pt;margin-bottom:
0cm;margin-left:34.7pt;margin-bottom:.0001pt;text-indent:-29.2pt;line-height:
150%;mso-list:l4 level1 lfo1;tab-stops:34.75pt'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.15pt'><span
style='mso-list:Ignore'>iv.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>En virtud de lo anterior EL ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN realizará
tratamiento de la información que contiene datos personales, de acuerdo con las
normas sobre Protección de datos personales, tales como, la Ley 1581 de 2012,
Decreto 1377 de 2013, y la Circular Externa 005 de 2017 de la Superintendencia
de Industria y<span style='letter-spacing:-.45pt'> </span>Comercio.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:.05pt;margin-right:5.95pt;
margin-bottom:0cm;margin-left:34.7pt;margin-bottom:.0001pt;text-indent:-29.05pt;
line-height:150%;mso-list:l4 level1 lfo1;tab-stops:34.75pt'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.15pt'><span
style='mso-list:Ignore'>v.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span></i></b><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Que con el fin de darle cumplimiento a los postulados de la norma, las
partes deciden de manera libre y espontánea regular su relación en lo atinente
a tratamiento de datos personales recolectado en las labores de conductores de
vehículo de servicio publico o privado.<b style='mso-bidi-font-weight:normal'><i
style='mso-bidi-font-style:normal'><o:p></o:p></i></b></span></p>

<p class=MsoListParagraph style='margin-top:.05pt;margin-right:6.15pt;
margin-bottom:0cm;margin-left:34.7pt;margin-bottom:.0001pt;text-indent:-26.3pt;
line-height:150%;mso-list:l4 level1 lfo1;tab-stops:34.75pt'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.15pt'><span
style='mso-list:Ignore'>vi.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Para efectos de lo anterior, así como para el mantenimiento eficiente y
adecuado de la información, EL ENCARGADO y EL RESPONSABLE usarán y se
transmitirán entre sí estos datos, para lo cual las partes documentarán y
regularán a través de este documento, lo referente a la Transmisión de la
información de los conductores de servicio público o privado.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:.05pt;margin-right:6.15pt;
margin-bottom:0cm;margin-left:34.7pt;margin-bottom:.0001pt;text-indent:-26.3pt;
line-height:150%;mso-list:l4 level1 lfo1;tab-stops:34.75pt'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.15pt'><span
style='mso-list:Ignore'>vii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>EL RESPONSABLE es la persona natural o jurídica, publica o privada,
nacional o extranjero, en su condición de dueño y/o administrador de vehículos
de transporte de servicio publico y/o privado, quien afirma haber obtenido
autorización y/o consentimiento previo del titular de la información, y que
traslada la información de dichos conductores al DEPOSITARIO O ENCARGADO. <o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.55pt'><span lang=ES style='font-family:
"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:34.7pt'><span lang=ES style='font-family:
"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>De acuerdo con lo
anterior, las partes pactan las siguientes:<o:p></o:p></span></p>

<h1 style='margin-top:6.1pt;margin-right:175.0pt;margin-bottom:0cm;margin-left:
185.4pt;margin-bottom:.0001pt;text-align:justify;text-indent:0cm'><span
lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></h1>

<h1 style='margin-top:6.1pt;margin-right:175.0pt;margin-bottom:0cm;margin-left:
185.4pt;margin-bottom:.0001pt;text-align:justify;text-indent:0cm'><span
lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>CLÁUSULAS<o:p></o:p></span></h1>

<h1 style='margin-top:6.1pt;margin-right:175.0pt;margin-bottom:0cm;margin-left:
185.4pt;margin-bottom:.0001pt;text-align:justify;text-indent:0cm'><span
lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></h1>

<p class=MsoListParagraph style='margin-top:2.6pt;margin-right:0cm;margin-bottom:
0cm;margin-left:37.45pt;margin-bottom:.0001pt;text-indent:-23.7pt;line-height:
150%;mso-list:l4 level2 lfo1;tab-stops:37.45pt 37.5pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%'><span style='mso-list:Ignore'>I.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=ES style='font-size:12.0pt;line-height:150%;font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>OBJETO<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:8.15pt;margin-right:5.85pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>El
objeto del presente contrato es regular las condiciones en las que EL
ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN publicara exclusivamente la información
de conductores de vehículos de servicio público y/o privado, trasladada por el RESPONSABLE
DE LA INFORMACIÓN.<span style='background:yellow'><o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-top:6.05pt;margin-right:6.05pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;text-align:justify;line-height:
150%'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>La información contenida en la base de datos
trasladada únicamente podrá utilizarse para la consecución de las labores de
publicación en la página web de SAC.<i style='mso-bidi-font-style:normal'><o:p></o:p></i></span></p>

<p class=MsoBodyText style='margin-top:9.95pt;margin-right:5.85pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>El
uso de los datos de las bases de datos de información se realizará por un
tiempo determinado y mientras se mantenga vigente el contrato de prestación de
servicios suscrito entre las partes, salvo acuerdo particular en contrario
entre las partes y de manera <b style='mso-bidi-font-weight:normal'><i
style='mso-bidi-font-style:normal'>no </i>cesible e intransferible</b>,
teniendo EL ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN derecho a utilizar la base
de datos únicamente para las finalidades anteriormente descritas. En ningún
caso el uso de los datos comprenderá la cesión de la propiedad sobre los
derechos de propiedad intelectual de la base de datos.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:9.95pt;margin-right:5.85pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:9.95pt;margin-right:5.85pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<h1 style='margin-top:10.0pt;text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.45pt 37.5pt'><![if !supportLists]><span lang=ES><span
style='mso-list:Ignore'>II.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>DEFINICIONES<o:p></o:p></span></h1>

<p class=MsoBodyText style='line-height:150%'><b style='mso-bidi-font-weight:
normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-left:16.8pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>Los
siguientes términos tendrán los siguientes significados dentro de este
Contrato:<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.05pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>“<b
style='mso-bidi-font-weight:normal'>Autoridad de Protección de Datos Personales</b>”
es la Delegatura de Protección de Datos Personales de la Superintendencia de
Industria y Comercio en la República de Colombia y cualquier otra autoridad
competente para la protección de datos establecida en la jurisdicción del
domicilio de EL RESPONSABLE o de EL ENCARGADO, según aplique.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:10.0pt;margin-right:5.85pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>“<b
style='mso-bidi-font-weight:normal'>Autoridad Regulatoria</b>” será la entidad
de inspección, vigilancia o control competente sobre las actividades de EL
RESPONSABLE y EL ENCARGADO, incluyendo, pero sin limitarse a las autoridades de
vigilancia y control en Colombia.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:9.95pt;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>“<b
style='mso-bidi-font-weight:normal'>Contrato</b>” se refiere al presente Contrato
incluyendo los anexos adjuntos o los que se acuerden posteriormente y en
cualquier momento por las Partes, los cuales serán parte integral de este
Contrato.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:10.1pt;margin-right:5.9pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;text-indent:2.75pt;line-height:
150%'><b style='mso-bidi-font-weight:normal'><span lang=ES style='font-family:
"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>“Datos Personales</span></b><span
lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>”
será cualquier información relacionada con una persona natural domiciliada en
Colombia o el Extranjero, como por ejemplo su nombre, edad, número de
identificación, números telefónicos de contacto, entre otras.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:2.6pt;margin-right:5.75pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>“<b
style='mso-bidi-font-weight:normal'>Encargado</b>” es SAC<b style='mso-bidi-font-weight:
normal'> </b>quien, de forma independiente, acepta y acuerda realizar el
tratamiento a la información o los Datos Personales de los Titulares por cuenta
de EL RESPONSABLE, en concordancia con las instrucciones que EL RESPONSABLE le
imparta y de acuerdo con los términos de este Contrato o del Contrato de
Prestación de<span style='letter-spacing:-.95pt'> </span>Servicios.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:10.0pt;margin-right:5.85pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>“<b
style='mso-bidi-font-weight:normal'>Ley Aplicable de Protección de Datos
Personales</b>” se refiere a cualquier norma de protección de datos personales,
privacidad o normas relacionadas, referentes a la recolección, tratamiento,
transferencia o transmisión de los Datos Personales de los Titulares de acuerdo
con este Contrato, incluyendo pero sin limitarse a la Ley 1581 de 2012, al
Decreto Reglamentario 1377 de 2013 y la Circular Externa 005 de 2017 de la
Superintendencia de Industria y Comercio, o aquellas que las modifiquen o
adicionen.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:9.95pt;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>“<b
style='mso-bidi-font-weight:normal'>Política de Tratamiento</b>” es la política
que regirá el Tratamiento de los Datos Personales que haga EL RESPONSABLE o que
se haga por cuenta de éste.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.15pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:2.6pt;margin-right:6.05pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>“<b
style='mso-bidi-font-weight:normal'>Responsable</b>” es la persona natural o
jurídica, publica o privada, nacional o extranjero, en su condición de dueño y/o
administrador de vehículos de transporte de servicio público y/o privado, quien
afirma haber obtenido autorización y/o consentimiento previo del titular de la
información, y que traslada la información de dichos conductores al
DESPOSITARIO O ENCARGADO. <o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:10.0pt;margin-right:5.9pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;text-indent:3.0pt;line-height:
150%'><span lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>“<b style='mso-bidi-font-weight:normal'>Titular</b>” Son los
conductores de vehículos de servicio publico o privado; persona natural
determinada o identificable, cuyos Datos Personales están sujetos al
Tratamiento de los mismos por parte de EL RESPONSABLE o EL ENCARGADO.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:9.95pt;margin-right:6.05pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>&quot;<b
style='mso-bidi-font-weight:normal'>Transmisión</b>&quot; es el Tratamiento de
Datos Personales que implica la comunicación de los mismos dentro o fuera del
territorio de la República de Colombia, con el objeto de permitir a EL
RESPONSABLE y a EL ENCARGADO realizar el Tratamiento de los Datos Personales.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:10.0pt;margin-right:5.85pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>“<b
style='mso-bidi-font-weight:normal'>Tratamiento</b>” será cualquier operación o
conjunto de operaciones realizadas sobre los Datos Personales de los
conductores de vehículos de servicio publico o privado, consistentes en la
recolección, grabación, organización, almacenamiento, consulta, uso,
divulgación por transmisión, actualización, transferencia, diseminación o
cualquier otra forma y/o el bloqueo, eliminación o destrucción de los mismos.<o:p></o:p></span></p>

<h1 style='margin-top:10.0pt;text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.45pt 37.5pt'><![if !supportLists]><span lang=ES><span
style='mso-list:Ignore'>III.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>TRANSMISIÓN Y<span style='letter-spacing:-.1pt'> </span>TRATAMIENTO<o:p></o:p></span></h1>

<p class=MsoBodyText style='margin-top:.1pt;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.9pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>EL
RESPONSABLE y EL ENCARGADO, aceptan obligarse en los términos de este Contrato,
a llevar a cabo el Tratamiento de datos personales de acuerdo con los términos
de (i) el consentimiento otorgado por el Titular para el Tratamiento de los
Datos Personales, (ii) la Política de Tratamiento de EL RESPONSABLE.<o:p></o:p></span></p>

<h1 style='margin-top:9.95pt;text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.45pt 37.5pt'><![if !supportLists]><span lang=ES><span
style='mso-list:Ignore'>IV.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>CONDICIONES DEL USO DE LOS<span style='letter-spacing:
-.15pt'> </span>DATOS<o:p></o:p></span></h1>

<p class=MsoListParagraph style='margin-top:8.2pt;margin-right:6.2pt;
margin-bottom:0cm;margin-left:34.8pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l2 level1 lfo2;tab-stops:34.85pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.25pt'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span></b><![endif]><span
lang=ES style='font-size:12.0pt;line-height:150%;font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>El objeto del uso de los datos personales de los
titulares alcanzará a todos los campos de la base de datos, incluyendo todos
los datos, archivos electrónicos o analógicos, que sean necesarios para la
correcta utilización y tratamiento de la base de<span style='letter-spacing:
-1.5pt'> </span>datos.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:5.95pt;margin-right:5.9pt;
margin-bottom:0cm;margin-left:34.8pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l2 level1 lfo2;tab-stops:34.85pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.25pt'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span></b><![endif]><span
lang=ES style='font-size:12.0pt;line-height:150%;font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>EL ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN manifiesta
expresamente que no fomenta o promociona el uso de contenidos ilegales,
inmorales, contrarios a la moral pública, listas negras, garantizando a EL
RESPONSABLE DE LA INFORMACIÓN que no remite, ni autoriza el envío de correos
electrónicos masivos mediante el uso de sus bases de datos, no deseados y/o
basura que no hubiera sido previamente<span style='letter-spacing:-.15pt'> </span>solicitados.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:6.05pt;margin-right:5.9pt;
margin-bottom:0cm;margin-left:34.8pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l2 level1 lfo2;tab-stops:34.85pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.25pt'><span
style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span></b><![endif]><span
lang=ES style='font-size:12.0pt;line-height:150%;font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>El envío de la base de datos para la gestión de
mantenimiento podrá realizarse a través de las herramientas de transmisión
segura de la información que EL REPSONSABLE tiene establecidas para estos<span
style='letter-spacing:-.35pt'> </span>fines.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:6.0pt;margin-right:5.85pt;
margin-bottom:0cm;margin-left:34.8pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l2 level1 lfo2;tab-stops:34.85pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.25pt'><span
style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span></b><![endif]><span
lang=ES style='font-size:12.0pt;line-height:150%;font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>EL ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN se
obliga a respetar la propiedad de la base de datos, por ende, no podrá hacer
ninguna copia adicional de la base de datos, salvo la de seguridad o aquella
que sea necesaria para el cumplimiento del Contrato de prestación de Servicios.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:6.05pt;margin-right:5.75pt;
margin-bottom:0cm;margin-left:34.8pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l2 level1 lfo2;tab-stops:34.85pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.25pt'><span
style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span></b><![endif]><span
lang=ES style='font-size:12.0pt;line-height:150%;font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>EL RESPONSABLE DE LA INFORMACIÓN garantiza a EL
ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN que todos los datos personales
incluidos en la base de datos, han sido obtenidos de forma lícita y conforme a
la legislación vigente, prestando especial atención al cumplimiento de la Ley
1581 de 2012 y <span style='letter-spacing:.1pt'>los </span>Decretos 1074 de
2015 y 1377 de 2013, o las normas que las modifiquen o adicionen. EL
RESPONSABLE DE LA INFORMACIÓN garantiza la integridad absoluta de dichos datos
personales, así como la calidad y actualización de los mismos. Cualquier uso
ilegal o contrario a las obligaciones del presente contrato conllevará la
exención de responsabilidad absoluta por parte del responsable, así como la
rescisión del presente contrato.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:6.0pt;margin-right:5.8pt;
margin-bottom:0cm;margin-left:34.8pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l2 level1 lfo2;tab-stops:34.85pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-1.25pt'><span
style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span></b><![endif]><span
lang=ES style='font-size:12.0pt;line-height:150%;font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>EL RESPONSABLE DE LA INFORMACIÓN responderá y
eximirá de responsabilidad al EL ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN, en
caso de que alguna de sus actuaciones contraríe este documento. Por lo anterior,<span
style='letter-spacing:1.15pt'> </span>EL ENCARGADO/DEPOSITARIO DE LA
INFORMACIÓN entiende<span style='letter-spacing:1.0pt'> </span>que<span
style='letter-spacing:1.0pt'> </span>los<span style='letter-spacing:1.0pt'> </span>datos<span
style='letter-spacing:1.0pt'> </span>personales<span style='letter-spacing:
1.1pt'> </span>entregados<span style='letter-spacing:1.15pt'> </span>por<span
style='letter-spacing:1.45pt'> </span>EL RESPONSABLE DE LA INFORMACIÓN podrán
ser tratados únicamente para las finalidades indicadas en este Contrato. Por
ello las partes, el RESPONSABLE mantendrá indemne a el ENCARGADO, por todo
reclamo o investigación que en su contra reciba, ya sea de índole
constitucional, comercial, civil, laboral, civil y penal. Cualquier uso ilegal
o contrario a las obligaciones del presente contrato por parte de EL
RESPONSABLE conllevará la exención de responsabilidad absoluta de EL ENCARGADO,
y la rescisión del presente<span style='letter-spacing:-.25pt'> </span>contrato.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.5pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<h1 style='margin-top:.05pt;text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.45pt 37.5pt'><![if !supportLists]><span lang=ES><span
style='mso-list:Ignore'>V.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>OBLIGACIONES DEL<span style='letter-spacing:-.15pt'>
</span>EL ENCARGADO/DEPOSITARIO DE LA INFORMACIÓN<o:p></o:p></span></h1>

<p class=MsoBodyText style='line-height:150%'><b style='mso-bidi-font-weight:
normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraph style='margin-right:6.0pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>EL ENCARGADO declara y garantiza a EL RESPONSABLE que tratará la
información y Datos Personales de los conductores de vehículos de servicio
publico y/o privado teniendo en cuenta los niveles de protección y
confidencialidad y en cumplimiento con la Política de Tratamiento, la Ley
Aplicable de Protección de Datos, y <span style='mso-spacerun:yes'> </span>este
Contrato.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-right:6.0pt;text-indent:0cm;line-height:
150%;tab-stops:31.0pt'><span lang=ES style='font-size:12.0pt;line-height:150%;
font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:.05pt;margin-right:5.9pt;
margin-bottom:0cm;margin-left:30.95pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>EL ENCARGADO deberá <span style='color:black;mso-themecolor:text1'>informar</span>
oportunamente y por escrito o de manera virtual <span
style='mso-spacerun:yes'> </span>dentro de los dos (2) días siguientes a EL
RESPONSABLE de cualquier requerimiento que reciba de las autoridades
competentes o titular de la información, que impliquen la divulgación de la
información o de Datos Personales de los conductores de vehículo de servicio
publico o privado, conforme a las leyes aplicables; el aviso anterior permitirá
a EL RESPONSABLE adoptar las medidas legales que considere oportunas o necesarias.
EL ENCARGADO no estará obligado a dar aviso a EL RESPONSABLE sobre estos
requerimientos cuando las Leyes Aplicables le impidan<span style='letter-spacing:
-.15pt'> </span>hacerlo.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.05pt;margin-right:5.9pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;line-height:150%;
tab-stops:31.0pt'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:.05pt;margin-right:5.9pt;
margin-bottom:0cm;margin-left:30.95pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Una vez recibido el reclamo correspondiente se incluirá en la base de
datos de <b>SAC</b> una leyenda que diga <b>“reclamo en trámite”</b> y el motivo
del mismo, dentro de un término no mayor a dos (2) días hábiles, dicha leyenda
deberá mantenerse hasta que el reclamo sea decidido.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.05pt;margin-right:5.9pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;line-height:150%;
tab-stops:31.0pt'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:.05pt;margin-right:5.9pt;
margin-bottom:0cm;margin-left:30.95pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Insertar en la base de datos de <b>SAC</b> la leyenda <b
style='mso-bidi-font-weight:normal'>“información en discusión judicial</b>” una
vez notificado por parte de la autoridad competente sobre procesos judiciales
relacionados con la calidad de la información del conductor.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.05pt;margin-right:5.9pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;line-height:150%;
tab-stops:31.0pt'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:.05pt;margin-right:5.9pt;
margin-bottom:0cm;margin-left:30.95pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>EL ENCARGADO debe abstenerse de circular información que este siendo
controvertida por el titular de la información y cuyo bloqueo haya sido
ordenado por la Superintendencia de Notariado de Industria y Comercio.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.4pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-right:6.05pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>EL ENCARGADO deberá atender de forma oportuna y apropiada las
solicitudes que le haga EL RESPONSABLE en relación con el Tratamiento de los
Datos Personales suministrados de los conductores de vehículo de servicio público
y privado y cumplir con las recomendaciones, instrucciones y ordenes de la
Autoridad de Protección de Datos en Cumplimiento con la Ley Aplicable de
Protección de Datos, en relación al Tratamiento de Datos<span style='letter-spacing:
-.45pt'> </span>Personales.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:6.05pt;text-align:justify;line-height:
150%;tab-stops:31.0pt'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-right:5.95pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>EL ENCARGADO deberá cooperar y enviar a EL RESPONSABLE dentro de los
términos y condiciones razonablemente establecidas por EL RESPONSABLE, toda la
información pertinente que sea requerida a través de éste por la autoridad de
Protección de<span style='letter-spacing:-1.9pt'> </span>Datos.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-right:5.95pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Dar tratamiento, a nombre de EL RESPONSABLE, a los Datos Personales
conforme a los principios que los<span style='letter-spacing:-.05pt'> </span>tutelan.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:5.95pt;text-align:justify;line-height:
150%;tab-stops:31.0pt'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-right:5.95pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>9.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Salvaguardar la seguridad de las bases de datos en los que se contengan
Datos Personales de los conductores de vehículos de servicio público y/o
privado.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:5.95pt;line-height:150%;tab-stops:31.0pt'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-right:5.95pt;line-height:150%;
mso-list:l3 level1 lfo4;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.95pt'><span
style='mso-list:Ignore'>10.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>El ENCARGADO / DEPOSITARIO deberá publicar por cuenta, riesgo del
RESPONSABLE DE LA INFORMACION, exclusivamente la información trasladada por
éste, sin hacerle ningún cambio o modificación. <o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.05pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<h1 style='text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.45pt 37.5pt'><![if !supportLists]><span lang=ES><span
style='mso-list:Ignore'>VI.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>OBLIGACIONES DEL<span style='letter-spacing:-.15pt'>
</span>RESPONSABLE<o:p></o:p></span></h1>

<p class=MsoBodyText style='line-height:150%'><b style='mso-bidi-font-weight:
normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraph style='margin-right:5.95pt;line-height:150%;
mso-list:l0 level1 lfo3;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>EL RESPONSABLE declara y garantiza que, durante el término de este
Contrato, deberá tratar los Datos Personales aplicando los más altos estándares
de confidencialidad y en cumplimiento de su Política de Tratamiento y este<span
style='letter-spacing:-.2pt'> </span>Contrato.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-right:5.95pt;text-indent:0cm;
line-height:150%;tab-stops:31.0pt'><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-right:5.95pt;line-height:150%;
mso-list:l0 level1 lfo3;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>EL RESPONSABLE deberá notificar oportunamente a EL ENCARGADO acerca de
cualquier cambio en la legislación que EL RESPONSABLE considere que puede
afectar el Tratamiento de los Datos Personales de los conductores de vehículos
de servicio publico o privado o este<span style='letter-spacing:.15pt'> </span>Contrato.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:5.95pt;text-align:justify;line-height:
150%;tab-stops:31.0pt'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:2.6pt;margin-right:5.9pt;
margin-bottom:0cm;margin-left:30.95pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l0 level1 lfo3;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>EL RESPONSABLE deberá resolver oportuna y apropiadamente las
solicitudes realizadas por EL ENCARGADO en relación con el Tratamiento de los
Datos Personales sujetos transmitidos y acatar las recomendaciones,
instrucciones y órdenes de la Autoridad de Protección de Datos en cumplimiento
con la Ley Aplicable de Protección de<span style='letter-spacing:-.1pt'> </span>Datos.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:2.6pt;margin-right:5.9pt;margin-bottom:
0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;line-height:150%;
tab-stops:31.0pt'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-right:6.05pt;line-height:150%;
mso-list:l0 level1 lfo3;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Solicitar y conservar prueba de la autorización de los titulares e
informar la finalidad del Tratamiento a los<span style='letter-spacing:-.1pt'> </span>Titulares
conductores de vehículos de servicio público y/o privado.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:6.05pt;text-align:justify;line-height:
150%;tab-stops:31.0pt'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-right:6.05pt;line-height:150%;
mso-list:l0 level1 lfo3;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Garantizar que la información que se le suministre a EL ENCARGADO de
los Datos Personales de los conductores de vehículos de servicio público o
privado, sea conforme con la información que suministren los<span
style='letter-spacing:-.75pt'> </span>Titulares.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-right:6.05pt;line-height:150%;
mso-list:l0 level1 lfo3;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>El RESPONSABLE declara que la información trasladada al ENCARGADO /
DEPOSITARIO es la que se publicara en el sitio Web SAC, por cuenta y riesgo del
RESPONSABLE.<span style='mso-spacerun:yes'>  </span><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.45pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<h1 style='text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.5pt'><![if !supportLists]><span lang=ES><span style='mso-list:
Ignore'>VII.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>CONFIDENCIALIDAD y PROTECCIÓN DE DATOS<span
style='letter-spacing:-.25pt'> </span>PERSONALES<o:p></o:p></span></h1>

<p class=MsoBodyText style='margin-top:8.25pt;margin-right:6.1pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>Todas
las informaciones relativas al presente Contrato, así como los acuerdos, pre
acuerdos, correos electrónicos intercambiados entre las partes o terceros
intervinientes, serán completamente CONFIDENCIALES. Sólo tendrán acceso a la
información indicada, aquellas personas autorizadas expresamente por las
personas firmantes del presente contrato y las que por éstas hubieran sido
autorizadas.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:8.25pt;margin-right:6.1pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.9pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>En
cumplimiento de la Ley 1581 de 2012, las partes manifiestan expresamente <span
style='letter-spacing:-.15pt'>el </span>cumplimiento de la normativa colombiana
de protección de datos personales garantizando a EL ENCARGADO que en el momento
de la obtención de los datos, EL RESPONSABLE cumplió con las obligaciones de
información y obtención del consentimiento de que tratan los artículos 6 y 9 de
la Ley 1581 de 2012 y sus decretos reglamentarios, así como que cumple con las
obligaciones de seguridad dispuestas en la normativa<span style='letter-spacing:
-.05pt'> </span>vigente.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.9pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<h1 style='margin-top:6.05pt;text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.5pt'><![if !supportLists]><span lang=ES><span style='mso-list:
Ignore'>VIII.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>EXTINCIÓN<o:p></o:p></span></h1>

<p class=MsoBodyText style='margin-top:8.15pt;margin-right:0cm;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>El
presente contrato podrá extinguirse por las siguientes causas:<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:8.15pt;margin-right:0cm;margin-bottom:
0cm;margin-left:37.2pt;margin-bottom:.0001pt;text-indent:-17.95pt;line-height:
150%;mso-list:l4 level3 lfo1;tab-stops:37.25pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Por el incumplimiento de las obligaciones principales del presente<span
style='letter-spacing:-.45pt'> </span>Contrato.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:.1pt;margin-right:0cm;margin-bottom:
0cm;margin-left:37.2pt;margin-bottom:.0001pt;text-indent:-17.95pt;line-height:
150%;mso-list:l4 level3 lfo1;tab-stops:37.25pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Por la terminación del Contrato de prestación de<span style='letter-spacing:
-.45pt'> </span>servicios.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:6.0pt;margin-bottom:
0cm;margin-left:37.2pt;margin-bottom:.0001pt;text-indent:-17.9pt;line-height:
150%;mso-list:l4 level3 lfo1;tab-stops:37.25pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Por ser declarada cualquiera de las Partes en estado judicial de
suspensión de pagos, quiebra o concurso de acreedores y fuese demostrada una
situación de insolvencia o cese de actividades, o se iniciase un proceso de
liquidación o<span style='letter-spacing:-.7pt'> </span>disolución.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:37.2pt;text-indent:-17.95pt;
line-height:150%;mso-list:l4 level3 lfo1;tab-stops:37.25pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Por las demás causas previstas en<span style='letter-spacing:-.2pt'> </span>derecho.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:6.2pt;margin-bottom:
0cm;margin-left:37.2pt;margin-bottom:.0001pt;text-indent:-17.9pt;line-height:
150%;mso-list:l4 level3 lfo1;tab-stops:37.25pt'><![if !supportLists]><b><span
lang=ES style='font-size:12.0pt;line-height:150%;letter-spacing:-.15pt'><span
style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>En caso de incumplimiento por alguna de las partes de las obligaciones
asumidas en el presente Contrato, o en el Contrato de prestación de<span
style='letter-spacing:-.35pt'> </span>servicios.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:6.2pt;line-height:150%;tab-stops:37.25pt'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:6.2pt;line-height:150%;tab-stops:37.25pt'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></p>

<h1 style='margin-top:6.0pt;text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.45pt 37.5pt'><![if !supportLists]><span lang=ES><span
style='mso-list:Ignore'>IX.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>CLÁUSULA DE<span style='letter-spacing:.05pt'> </span>SALVAGUARDA.<o:p></o:p></span></h1>

<p class=MsoBodyText style='margin-top:8.15pt;margin-right:6.05pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>Las
cláusulas del presente Contrato son independientes y deben ser consideradas una
a una, de tal forma que si alguna de ellas pasara a ser inválida, ilegal o
inejecutable <span style='letter-spacing:-.15pt'>en </span>virtud de alguna
norma jurídica, se considerará ineficaz en la medida que corresponda, pero en
lo demás, este Contrato conservará su validez y eficacia en cuanto al resto del
contenido, estipulaciones y<span style='letter-spacing:-.15pt'> </span>obligaciones.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:2.6pt;margin-right:6.0pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>Las
Partes contratantes acuerdan sustituir la cláusula o cláusulas afectadas de
invalidez, ilegalidad o imposibilidad de ejecutar por otra u otras que tengan
los efectos económicos más parecidos a los de las sustituidas.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.55pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<h1 style='text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.45pt 37.5pt'><![if !supportLists]><span lang=ES><span
style='mso-list:Ignore'>X.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>ENTRADA EN VIGENCIA Y<span style='letter-spacing:
.1pt'> </span>DURACIÓN<o:p></o:p></span></h1>

<p class=MsoBodyText style='line-height:150%'><b style='mso-bidi-font-weight:
normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>La
vigencia del presente contrato iniciara desde su fecha de firma, sin embargo,
las partes acuerdan que el cumplimiento de lo contenido en el contrato regirá
con cada uno de los Datos Personales a los que tenga y haya tenido acceso EL
ENCARGADO desde la fecha en que se haya empezado la actividad.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:10.05pt;margin-right:0cm;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>El
Contrato tendrá la misma duración del Contrato de Prestación de Servicios.<o:p></o:p></span></p>

<p class=MsoBodyText style='line-height:150%'><span lang=ES style='font-family:
"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<h1 style='text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.45pt 37.5pt'><![if !supportLists]><span lang=ES><span
style='mso-list:Ignore'>XI.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>TERMINACIÓN<o:p></o:p></span></h1>

<p class=MsoBodyText style='margin-left:16.8pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>En
caso de terminación del Contrato EL ENCARDADO deberá:<o:p></o:p></span></p>

<p class=MsoBodyText style='line-height:150%'><span lang=ES style='font-family:
"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:.05pt;margin-right:6.25pt;
margin-bottom:0cm;margin-left:30.95pt;margin-bottom:.0001pt;line-height:150%;
mso-list:l1 level1 lfo5;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.2pt'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Suspender todas las actividades encaminadas al Tratamiento de Datos
Personales del conductor y/o conductores de vehículos de servicio publico o
privado transmitidos por el RESPONSABLE, reguladas en éste Contrato o derivado
del Contrato de prestación de<span style='letter-spacing:-.65pt'> </span>servicios;<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:.05pt;margin-right:6.25pt;
margin-bottom:0cm;margin-left:30.95pt;margin-bottom:.0001pt;text-indent:0cm;
line-height:150%;tab-stops:31.0pt'><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-right:5.9pt;line-height:150%;
mso-list:l1 level1 lfo5;tab-stops:31.0pt'><![if !supportLists]><span lang=ES
style='font-size:12.0pt;line-height:150%;letter-spacing:-.2pt'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'>Remitir de regreso o eliminar inmediatamente, según lo indicado por el
RESPONSABLE, toda la información del RESPONSABLE de la que tenga control,
incluyendo pero sin limitarse a los Datos Personales, y todas las copias de los
mismos, que se encuentren en su posesión, custodia o<span style='letter-spacing:
-.25pt'> </span>control.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.55pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:6.1pt;margin-bottom:
0cm;margin-left:12.95pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>La
terminación de este Contrato se hará sin perjuicio de los derechos o
compensaciones a que haya lugar o cualquier obligación o responsabilidad que se
haya generado para cualquiera de las Partes, a la fecha efectiva de
terminación.<o:p></o:p></span></p>

<h1 style='margin-top:10.05pt;text-align:justify;line-height:150%;mso-list:
l4 level2 lfo1;tab-stops:37.5pt'><![if !supportLists]><span lang=ES><span
style='mso-list:Ignore'>XII.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>CESIÓN<o:p></o:p></span></h1>

<p class=MsoBodyText style='line-height:150%'><b style='mso-bidi-font-weight:
normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:6.05pt;margin-bottom:
0cm;margin-left:12.95pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>Ninguna
de las partes podrá ceder este contrato o cualquiera de los derechos u
obligaciones contenidos en el mismo a un tercero sin el previo consentimiento
escrito de<span style='mso-spacerun:yes'>  </span>la otra Parte.<o:p></o:p></span></p>

<h1 style='margin-top:9.95pt;text-align:justify;line-height:150%;mso-list:l4 level2 lfo1;
tab-stops:37.5pt'><![if !supportLists]><span lang=ES><span style='mso-list:
Ignore'>XIII.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=ES style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>LEGISLACIÓN<span
style='letter-spacing:-.15pt'> </span>APLICABLE.<o:p></o:p></span></h1>

<p class=MsoBodyText style='margin-top:8.3pt;margin-right:5.85pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>Para
la resolución de todas las controversias o cuestiones relacionadas con el
presente contrato, será de aplicación directa la legislación colombiana,
específicamente el Ley 1581 de 2012 y normas reglamentarias, Código Civil,
Código de Comercio y demás legislación vigente aplicable a las relaciones
comerciales entre empresas, renunciando expresamente a cualquier otro tipo de
legislación aplicable.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.55pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'>El
RESPONSABLE DE LA INFORMACIÓN, acepta en forma incondicional el presente
contrato, libre y voluntariamente, y expresa que lo ha leído, comprendido con
la decisión de ACEPTACIÓN.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><span lang=ES
style='font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>SAC<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>ENCARGADO DE LA INFORMACIÓN<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>ACEPTO:<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:5.95pt;margin-bottom:
0cm;margin-left:16.8pt;margin-bottom:.0001pt;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES style='font-family:"Arial Narrow",sans-serif;
mso-bidi-font-family:Tahoma'>RESPONSABLE DE LA INFORMACIÓN<o:p></o:p></span></b></p>

</div>

<b style='mso-bidi-font-weight:normal'><span lang=ES style='font-size:12.0pt;
line-height:150%;font-family:"Arial Narrow",sans-serif;mso-fareast-font-family:
Calibri;mso-bidi-font-family:Tahoma;mso-ansi-language:ES;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span></b>

<div class=WordSection2>

<p class=MsoNormal style='text-align:justify'><span lang=ES-TRAD
style='font-size:14.0pt;font-family:"Arial Narrow",sans-serif;mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></p>

</div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">POLÍTICAS Y CONDICIONES DE USO</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                               <div class=WordSection1>

<p class=MsoNormal align=center style='text-align:center;line-height:150%;
text-autospace:none'><b><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>POLÍTICA
DE SEGURIDAD DE LA INFORMACIÓN, PRIVACIDAD Y PROTECCIÓN DE DATOS PERSONALES </span></b></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>El
acceso a la consulta de información de conductores de vehículos de servicio
publico o privado, por Internet es un servicio de carácter permanente que
presta  </span><b><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>SAC</span></b><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'> como depositario
y/o encargado  del tratamiento de datos, </span><span lang=ES-TRAD
style='font-family:"Arial Narrow",sans-serif;background:white'>conforme a lo
establecido en la Ley 1581 de 2012,  su decreto reglamentario 1377 de 2013 y
demás disposiciones que los modifiquen, adicionen o complementen, para los
dueños y administradores de vehículos de transporte de servicio público o
privado y en general el comercio, que estén vinculados a <b>SAC</b>.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>El
uso de la información suministrada por </span><b><span lang=ES-TRAD
style='font-family:"Arial Narrow",sans-serif'>SAC </span></b><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>está
limitado a los fines contratados con el responsable de la información (dueños y
administradores de vehículos de servicio publico y privado).</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'><br>
<span style='background:white'>Esta consulta en línea cuenta con mecanismos de
seguridad para controlar el acceso y la utilización de la información
contenida, por lo tanto, </span></span><b><span lang=ES-TRAD style='font-family:
"Arial Narrow",sans-serif'>SAC</span></b><span lang=ES-TRAD style='font-family:
"Arial Narrow",sans-serif;background:white'> podrá bloquear el acceso a esta
página web por cualquier utilización que considere irregular y entablar las acciones
legales correspondientes, </span><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>con
fundamento en la ley 1273 de 2009.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>Las
personas naturales o jurídicas que tengan vínculo contractual vigente con <b>SAC</b>,
en calidad de responsables de la información de los conductores de vehículos de
servicio publico o privado, pueden tener acceso a la información trasladada, si
cumplen las siguientes <b>condiciones</b>:&nbsp;</span></p>

<ol start=1 type=1>
 <li class=MsoNormal style='text-align:justify;line-height:150%;background:
     white'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Es
     claro, que </span><b><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>SAC
     </span></b><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>no
     toma ni recomienda decisiones sobre la información que se traslada por
     parte de los, teniendo en cuenta que </span><b><span lang=ES-TRAD
     style='font-family:"Arial Narrow",sans-serif'>SAC</span></b><span
     lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'> es solo un
     depositario o encargado de la información.</span></li>
 <li class=MsoNormal style='text-align:justify;line-height:150%;background:
     white'><b><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Acepto</span></b><span
     lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'> que en
     cualquier momento y sin previo aviso, </span><b><span lang=ES-TRAD
     style='font-family:"Arial Narrow",sans-serif'>SAC</span></b><span
     lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'> puede
     modificar o actualizar la consulta en línea de los conductores de
     vehículos de servicio publico o privado de la manera que estime
     conveniente y que no tiene ninguna obligación de continuar el servicio en
     sus actuales condiciones.</span></li>
 <li class=MsoNormal style='text-align:justify;line-height:150%;background:
     white'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Entiendo
     que, en consecuencia, </span><b><span lang=ES-TRAD style='font-family:
     "Arial Narrow",sans-serif'>SAC</span></b><span lang=ES-TRAD
     style='font-family:"Arial Narrow",sans-serif'> es<b> </b>responsable por
     asegurar la concordancia entre los datos que le han sido entregados
     (trasladados) y los que divulga, pero no tiene ninguna responsabilidad por
     la veracidad de los mismos.</span></li>
 <li class=MsoNormal style='color:black;text-align:justify;line-height:150%;
     background:white'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Declaro
     que me hago responsable por el uso y cuidado de los datos que llegare a
     obtener, a través de la presente consulta en línea de la información. </span><span
     lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;color:windowtext'><br>
     <br>
     </span></li>
</ol>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;line-height:
150%;background:white'><b><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>SAC</span></b><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>,
se permite informar que:&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
background:white'>En cumplimiento a lo estipulado en la Ley Estatutaria 1581 de
2012, consecuentemente con lo previsto en el Decreto 1377 de 2013, y demás
normatividad legal vigente para el tratamiento de datos personales, <b>SAC</b> da
a conocer a las personas naturales o jurídicas con quienes tenga vinculo
contractual, la información de los conductores de vehículos de servicio público
o privado que fue trasladada a nuestras bases de datos, con los siguientes <b>fines</b>:&nbsp;</span></p>

<p class=MsoListParagraphCxSpFirst style='text-align:justify;line-height:150%;
text-autospace:none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-18.0pt;
line-height:150%;text-autospace:none'><span lang=ES-TRAD style='font-family:
"Arial",sans-serif'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
color:black'>Publicar la información de los conductores de vehículos de
servicio publico o privado de carácter estrictamente contractual, trasladada
por el responsable de la información, de acuerdo a los parámetros de la ley.</span></p>

<p class=MsoListParagraphCxSpMiddle style='text-align:justify;line-height:150%;
text-autospace:none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpLast style='text-align:justify;text-indent:-18.0pt;
line-height:150%;text-autospace:none'><span lang=ES-TRAD style='font-family:
"Arial",sans-serif'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Brindar
acceso a la información trasladada por parte del responsable. </span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'><br>
<span style='background:white'>El uso y manejo de los mismos, se efectúa bajo
estrictos estándares de responsabilidad, dentro de los cuales está el respeto
al debido proceso y a la protección de la información.&nbsp;</span></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'><br>
<span style='background:white'>En todo caso, en cualquier momento el titular de
la información podrá revocar su consentimiento y ejercer su derecho a la
supresión de datos personales consagrado en la <b>Ley Estatutaria 1581 de 2012</b>.&nbsp;</span></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>Como
<b>Política de  Seguridad de la Información y Protección de Datos, </b> </span><b><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>SAC, </span></b><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>celebra </span><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;color:black'>CONTRATO
DE TRANSMISIÓN DE INFORMACIÓN Y DATOS PERSONALES DE CONDUCTORES DE VEHÍCULOS DE
SERVICIO PUBLICO O PRIVADO, con los responsables de la información, ya sean
personas naturales o jurídicas<b> </b></span><span lang=ES-TRAD
style='font-family:"Arial Narrow",sans-serif'>públicas o privadas, en virtud de
los cuales se les permite<span class=apple-converted-space>&nbsp;</span><strong><span
style='font-family:"Arial Narrow",sans-serif'>REPORTAR</span></strong><span
class=apple-converted-space>&nbsp;</span>y/o<span class=apple-converted-space>&nbsp;</span><strong><span
style='font-family:"Arial Narrow",sans-serif'>CONSULTAR</span></strong><span
class=apple-converted-space>&nbsp;</span>la información trasladada.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>Para
que una persona natural o jurídica en su condición de responsable de la
información</span><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>,</span><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'> pueda
reportar información de conductores de vehículos de servicio público o privado
a nuestra base de datos es indispensable que tenga <b>consentimiento y/o autorización
previo, expresa y e informada</b> del titular de la información para llevar a
cabo el tratamiento de sus datos personales, conservándose debidamente la
prueba del otorgamiento de la autorización respectándose los principios de
confidencialidad y privacidad de la información.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;background:white'>&nbsp;</span></p>

<p style='margin-top:0cm;margin-right:0cm;margin-bottom:18.0pt;margin-left:
0cm;text-align:justify;line-height:150%;vertical-align:baseline'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>A nuestra base de
datos se reporta la información trasladada relativa al comportamiento contractual
de los de </span><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif;
background:white'>conductores de vehículos de servicio público o privado</span><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>. En tal sentido,<b>
SAC</b> se permite aclarar que en nuestras bases de datos no se puede confundir
con listas negras ni de deudores morosos, ya que nosotros somos exclusivamente
encargados de publicar la información trasladada por los responsables. SAC por
su condición de depositario y/o encargado de la información trasladada, no
asume ningún tipo de responsabilidad frente a reclamaciones del titular de la
información.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Finalmente,
en cuanto a las <b>políticas de privacidad y </b>condiciones de uso,  <b>SAC </b>informa
que el titular de los datos podrá actualizar y rectificar las informaciones
recogidas, pudiendo ejercer así, el derecho de Habeas Data tanto
presencialmente como por escrito tal y como lo contempla el artículo 15 de la
Constitución Política de Colombia.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>La
información registrada en éste sistema virtual de información, corresponde a
los datos efectivamente trasladados por el responsable. El usuario <b>acepta</b>
los términos y acciones legales contenidas en el artículo 288, 291 y 296 del
Código Penal ley 599 de 2000 referentes a la falsedad documental y personal.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Se
entiende y acepta que si por motivos de restructuración, mantenimiento, fallas
o errores técnicos tales como caída de línea o congestión en el sistema y no se
pudiera acceder al sitio web de  SAC, no se está coartando el derecho del
habeas data.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Se tiene
plena conciencia que, en cualquier momento <b>SAC</b> y sin previo aviso puede
modificar, terminar o posponer la prestación del servicio informático ofrecido
y sus actuales condiciones de uso si lo estimare conveniente o necesario.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%;text-autospace:
none'><span lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Derechos de Autor</span></b><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>: Todos los derechos
de autor de ésta página, secciones, objetos y demás pantallas que se muestran y
su disposición, así como los escudos, marcas, logos utilizados y la aplicación 
SAC, pertenece única y exclusivamente el ENCARGADO / DEPOSITARIO, por lo
anterior, queda rotundamente prohibido realizar copia del código fuente de la
aplicación, realizar modificaciones y/o realizar traducciones sin previa
autorización del ENCARGADO /DEPOSITARIO y/o SAC.</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>Por concepto de <b>precios
y pagos</b> por uso de la aplicación, no se debe realizar pagos de ningún tipo,
sin embargo se aclara, que si en el futuro, el ENCARGADO/ DEPOSITARIO y/o SAC
considera el cobro por alguno de los servicios ofrecidos, lo puede realizar. </span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b><span
lang=ES-TRAD style='font-family:"Arial Narrow",sans-serif'>ACEPTO.</span></b></p>

</div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                                                                
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.js" integrity="sha512-mKlod4zKRIIIrcTz1adxwkprNtUm1lZZL2yP+l9UEmK6mXndshkfPojjPkVOKOanqBM9b2Gc88eBjLCAgkWtHw==" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
    var md = new MobileDetect(window.navigator.userAgent)
    var movil = true;
    if (md.mobile() || md.tablet()) {
          $("#file").removeAttr("required");
          $("#div-file").hide();
          $("#plantilla").hide();
          
    }else{
        movil = false;
    }
    
 
     $('#fusuario').on('submit', function(event){
        event.preventDefault();
        if($("#pass").val()==$("#pass2").val()) {
        $.ajax({
            url: "<?php echo base_url();?>index.php/login/guardar_new_usuer/"+movil,
            method:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){
                         
                if(data=="2"){ alert("Usuario ya se encuentra registrado!");}
                    if(data=="1"){alert("Usuario guardado con exito, esperé aprobación del administrador!");
                        $('#fusuario')[0].reset();
                    }
            }
        });
    }else{
         alert("Las contraseñas no coinsiden");
        e.preventDefault();
    }
    });
        



     }); 

 function recargar(){
    window.location="<?php echo base_url();?>index.php/login/";
 }

</script>
</div>
</body>
</html>