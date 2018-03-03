<!DOCTYPE html>
<html lang="en">
	<head>
		   <!-- Google Fonts -->
   <link href="<?= base_url() ?>layout/css/font1.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>layout/css/font2.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url() ?>layout/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url() ?>layout/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url() ?>layout/plugins/animate-css/animate.css" rel="stylesheet" />
        
        <!-- JQuery DataTable Css -->
   <link href="<?= base_url() ?>layout/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="<?= base_url() ?>layout/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url() ?>layout/css/style.css" rel="stylesheet">
        
         <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?= base_url() ?>layout/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
        
         <!-- Wait Me Css -->
    <link href="<?= base_url() ?>layout/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= base_url() ?>layout/css/themes/all-themes.css" rel="stylesheet" />
    
  <body class="theme-red">
		<div class="wrapper" style="height: auto;">
			 <?php if($this->session->flashdata('msg') != ''): ?>
			    <div class="alert alert-warning flash-msg alert-dismissible">
			      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			      <h4> Success!</h4>
			      <?= $this->session->flashdata('msg'); ?> 
			    </div>
			  <?php endif; ?> 
			
			<section id="container">
				<!--header start-->
				<header class="header white-bg">
					<?php include('include/navbar.php'); ?>
				</header>
				<!--header end-->
				<!--sidebar start-->
				<aside>
					<?php include('include/sidebar.php'); ?>
				</aside>
				<!--sidebar end-->
				<!--main content start-->
				<section id="main-content">
					<div class="content-wrapper" style="min-height: 394px; padding:15px;">
						<!-- page start-->
						<?php $this->load->view($view);?>
						<!-- page end-->
					</div>
				</section>
				<!--main content end-->
				<!--footer start-->
				<footer class="main-footer">
					<strong>xcode___ © 2018 <a href="https://hmifitenas.com">HMIF</a></strong> All rights
					reserved.
				</footer>
				<!--footer end-->
			</section>

			<!-- /.control-sidebar -->
			<?php include('include/control_sidebar.php'); ?>

	</div>	
        
         <!-- Jquery Core Js -->
    <script src="<?= base_url() ?>layout/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url() ?>layout/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/node-waves/waves.js"></script>


    <!-- Morris Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url() ?>layout/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?= base_url() ?>layout/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?= base_url() ?>layout/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?= base_url() ?>layout/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>layout/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?= base_url() ?>layout/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <script src="<?= base_url() ?>layout/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>layout/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?= base_url() ?>layout/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>layout/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>layout/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?= base_url() ?>layout/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>layout/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>layout/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>layout/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url() ?>layout/js/admin.js"></script>
    <script src="<?= base_url() ?>layout/js/pages/index.js"></script>
    <script src="<?= base_url() ?>layout/js/pages/tables/jquery-datatable.js"></script>
    <script src="<?= base_url() ?>layout/js/pages/forms/basic-form-elements.js"></script>

      <!-- Jquery CountTo Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/jquery-countto/jquery.countTo.js"></script>
      
    <!-- Demo Js -->
    <script src="<?= base_url() ?>layout/js/demo.js"></script>
    
       <!-- Autosize Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/autosize/autosize.js"></script>
      
      <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
      <!-- Moment Plugin Js -->
    <script src="<?= base_url() ?>layout/plugins/momentjs/moment.js"></script>
   
	</body>
</html>