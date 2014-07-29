<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
    <title><?php echo $this->lang->line('site_title'); ?></title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=1.0, maximum-scale=5.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />

    <!-- Bootstrap Extended -->
    <link href="<?php echo base_url() ?>assets/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/scripts/select2/select2.css"/>

    <!-- JQueryUI v1.9.2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />

    <!-- Glyphicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/css/glyphicons.css" />

    <!-- DataTables -->
    <link rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/theme/scripts/DataTables/media/css/DT_bootstrap.css" />

    <!-- Bootstrap Extended -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/extend/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />

    <!-- Uniform -->
    <link rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />

    <!-- JQuery v1.8.2 -->
    <script src="<?php echo base_url() ?>assets/theme/scripts/jquery-1.8.2.min.js"></script>

    <!-- Modernizr -->
    <script src="<?php echo base_url() ?>assets/theme/scripts/modernizr.custom.76094.js"></script>
    <!-- jCarousel -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/theme/scripts/jquery.jcarousel.min.js"></script>
    <!-- MiniColors -->
    <link rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/theme/scripts/jquery-miniColors/jquery.miniColors.css" />

    <!-- Theme -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/css/style.min.css?1363272430" />

    <!-- LESS 2 CSS -->
    <script src="<?php echo base_url() ?>assets/theme/scripts/less-1.3.3.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/print.css" media="print"/>

</head>
<body>

<!-- Start Content -->
<?php echo $content_for_layout; ?>
<!-- Sticky Footer -->
<div id="footer" class="visible-desktop">
    <div class="wrap">

    </div>
</div>

</div>

<!-- JQueryUI v1.9.2 -->
<script src="<?php echo base_url() ?>assets/theme/scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>

<!--&lt;!&ndash; JQueryUI Touch Punch &ndash;&gt;-->
<!--&lt;!&ndash; small hack that enables the use of touch events on sites using the jQuery UI user interface library &ndash;&gt;-->
<!--<script src="<?php //echo base_url() ?>/assets/theme/scripts/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>-->

<!-- DataTables -->
<!--<script src="--><?php //echo base_url() ?><!--assets/theme/scripts/DataTables/media/js/jquery.dataTables.min.js"></script>-->
<!--<script src="--><?php //echo base_url() ?><!--assets/theme/scripts/DataTables/media/js/DT_bootstrap.js"></script>-->



<!-- MiniColors -->
<script src="<?php echo base_url() ?>assets/theme/scripts/jquery-miniColors/jquery.miniColors.js"></script>


<script src="<?php echo base_url() ?>assets/theme/scripts/select2/select2.js"></script>

<!-- Themer -->
<script>
    var themerPrimaryColor = '#DA4C4C';
</script>
<script src="<?php echo base_url() ?>assets/theme/scripts/jquery.cookie.js"></script>
<script src="<?php echo base_url() ?>assets/theme/scripts/themer.js"></script>

<!-- jQuery Validate -->


<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/validationEngine.jquery.css" type="text/css">
<script src="<?php echo base_url()?>assets/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url()?>assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

<!-- Form Elements Custom script -->
<script src="<?php echo base_url() ?>assets/theme/scripts/form_elements.js" type="text/javascript"></script>
<!-- Resize Script -->
<script src="<?php echo base_url() ?>assets/theme/scripts/jquery.ba-resize.js"></script>

<!-- Uniform -->
<script src="<?php echo base_url() ?>assets/theme/scripts/pixelmatrix-uniform/jquery.uniform.min.js"></script>

<!-- Bootstrap Script -->
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Bootstrap Extended -->
<script src="<?php echo base_url() ?>assets/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/extend/bootbox.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/js/jquery.wheelzoom.js"></script>

<!-- Theme -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css?var=1" />

<!-- Custom Onload Script -->
<script src="<?php echo base_url() ?>assets/theme/scripts/load.js"></script>
<script src="<?php echo base_url() ?>assets/theme/scripts/custom.js"></script>
<!--Layout Options-->
<!--<script src="<?php //echo base_url() ?>/assets/theme/scripts/layout.js"></script>-->
<link rel="stylesheet" type="text/css" href="/assets/multi-datepicker/css/mdp.css">
<script language="javascript">
$(document).ready(function(){
    $('.popup-gallery .current-img img').wheelzoom();

    // or zoom sets the zoom percent.
    $('.popup-gallery .current-img img').wheelzoom({zoom:0.05});

    // zooming out can be triggered by calling 'wheelzoom.reset'
    $('.popup-gallery .current-img img').trigger('wheelzoom.reset')
});
</script>
</body>
</html>