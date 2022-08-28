<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Basic Form Elements | Bootstrap Based Admin Template - Material Design</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url() ?>assets/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo base_url() ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo base_url() ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Bootstrap Material Datetime Picker Css -->
	<link href="<?php echo base_url() ?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

	<!-- Bootstrap DatePicker Css -->
	<link href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

	<!-- Wait Me Css -->
	<link href="<?php echo base_url() ?>assets/plugins/waitme/waitMe.css" rel="stylesheet" />

	<!-- Bootstrap Select Css -->
	<link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?php echo base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body>

	<!-- Navbar -->
	<?php $this->load->view('layouts/_navbar') ?>
	<!-- End of Navbar -->

	<!-- Section -->
	<?php $this->load->view('layouts/_section') ?>
	<!-- EndSection -->

	<!-- Content -->
	<?php $this->load->view($page) ?>
	<!-- End for Content -->


	<!-- JS -->
	<!-- Jquery Core Js -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Select Plugin Js -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url() ?>assets/plugins/node-waves/waves.js"></script>

	<!-- Autosize Plugin Js -->
	<script src="<?php echo base_url() ?>assets/plugins/autosize/autosize.js"></script>

	<!-- Moment Plugin Js -->
	<script src="<?php echo base_url() ?>assets/plugins/momentjs/moment.js"></script>

	<!-- Bootstrap Material Datetime Picker Plugin Js -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

	<!-- Bootstrap Datepicker Plugin Js -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

	<!-- Custom Js -->
	<script src="<?php echo base_url() ?>assets/js/admin.js"></script>
	<script src="<?php echo base_url() ?>assets/js/pages/forms/basic-form-elements.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url() ?>assets/js/demo.js"></script>
</body>

</html>
