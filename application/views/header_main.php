<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>Carbon Footprint</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/co2.png">
  	
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/open-sans/style.min.css"> <!-- common font  styles  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/universe-admin/style.css"> <!-- universeadmin icon font styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/mdi/css/materialdesignicons.min.css"> <!-- meterialdesignicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/iconfont/style.css"> <!-- DEPRECATED iconmonstr -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/flatpickr/flatpickr.min.css"> <!-- original flatpickr plugin (datepicker) styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/simplebar/simplebar.css"> <!-- original simplebar plugin (scrollbar) styles  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/tagify/tagify.css"> <!-- styles for tags -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/tippyjs/tippy.css"> <!-- original tippy plugin (tooltip) styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/select2/css/select2.min.css"> <!-- original select2 plugin styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css"> <!-- original bootstrap styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css" id="stylesheet"> <!-- universeadmin styles -->

	<!-- for printing purpose -->
	<style>
		@page { size: auto;  margin: 0mm; }
	</style>
	<style type="text/css" media="print">
	    .page-content {margin-left:0px;width:100%;}
	   	.no-print { display: none; }
	</style>
	<!-- for printing purpose -->

	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/ie.assign.fix.min.js"></script>	

	<script src="https://d3js.org/d3.v4.min.js"></script>
</head>

<body class="js-loading "> <!-- add for rounded corners: form-controls-rounded -->

	<div class="page-preloader js-page-preloader">
		<div class="page-preloader__loader">
			<div class="page-preloader__loader-heading">System Loading</div>
			<div class="progress progress-rounded page-preloader__loader-progress">
				<div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
	</div>
	
	<div class="navbar navbar-light navbar-expand-lg no-print">
		<button class="sidebar-toggler" type="button">
			<span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
			<span class="ua-icon-alert-close sidebar-toggler__close"></span>
		</button>

		<span class="navbar-brand">
			<a href="/">Carbon Footprint</a>
		</span>

		<span class="navbar-brand-sm">
			<a href="/">Carbon Footprint</a>
		</span>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
			<span class="ua-icon-navbar-open navbar-toggler__open"></span>
			<span class="ua-icon-alert-close navbar-toggler__close"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbar-collapse">
			<div class="navbar__menu">
				<ul class="navbar-nav">
					<li class="nav-item navbar__menu-item">
						<a class="nav-link" href="<?php echo site_url('materials_construction'); ?>">MATERIALS & CONSTRUCTION</a>
					</li>
					<li class="nav-item navbar__menu-item">
						<a class="nav-link" href="<?php echo site_url('operation'); ?>">OPERATION</a>
					</li>
					<li class="nav-item navbar__menu-item">
						<a class="nav-link" href="<?php echo site_url('summary'); ?>">SUMMARY</a>
					</li>
					<li class="nav-item navbar__menu-item">
						<a class="nav-link" href="<?php echo site_url('factors'); ?>">EMISSION FACTORS</a>
					</li>
					<li class="nav-item navbar__menu-item">
						<a class="nav-link" href="<?php echo site_url('configuration'); ?>">CONFIGURATION</a>
					</li>
				</ul>
			</div>
			
			<div class="dropdown navbar-dropdown">
				<a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user" data-toggle="dropdown" href="#">
					<img src="<?php echo base_url(); ?>assets/img/user.png" alt="" class="navbar-dropdown-toggle__user-avatar">
					<span class="navbar-dropdown__user-name"><?php echo $username; ?></span>
				</a>
				<div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user">
					<a class="dropdown-item navbar-dropdown__item" href="<?php echo site_url('signin/logout'); ?>">Sign Out</a>
				</div>
			</div>
		</div>
	</div>

	<?php if($page_no == 1){ ?>
	<form id="project_form" method="post" action="<?php echo site_url('materials_construction/insert_data'); ?>">
	<input type="hidden" name="proj_url" value="<?php echo site_url('materials_construction'); ?>" >
	<?php }elseif($page_no == 2){ ?>
	<form id="project_form" method="post" action="<?php echo site_url('operation/insert_data'); ?>">
	<input type="hidden" name="proj_url" value="<?php echo site_url('operation'); ?>" >
	<?php }elseif($page_no == 4){ ?>
	<form id="project_form" method="post" action="<?php echo site_url('factors'); ?>">	
		<input type="hidden" name="project_id" value="<?php echo $project_id; ?>" >
		<input type="hidden" name="proj_url" value="<?php echo site_url('factors'); ?>" >
	</form>

	<?php } elseif($page_no == 6){ ?>
		<form id="project_form" method="post" action="<?php echo site_url('configuration'); ?>">	
			<input type="hidden" name="project_id" value="<?php echo $project_id; ?>" >
			<input type="hidden" name="proj_url" value="<?php echo site_url('configuration'); ?>" >
		</form>
		<?php echo form_open('configuration/update_configuration'); ?>
	<?php } else 

	{ ?>
	<form id="project_form" method="post" >
	<input type="hidden" name="proj_url" value="<?php echo site_url('summary'); ?>" >
	<?php } ?>


	<div class="page-wrap">
	  
		<div class="sidebar-section no-print">
			<div class="sidebar-section__scroll">    
				<div class="sidebar-user-a">
					<img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="" class="sidebar-user-a__avatar rounded-circle">
					<div class="sidebar-user-a__name" style="color:#fff">
						Project Name
						<span id="new_project" class="badge badge-danger badge-sm badge-rounded ml-3" style="cursor: pointer;" data-toggle="modal" data-target="#modal-newproject">New</span>
					</div>
					<div class="form-group mt-3 w-100">
						<input type="hidden" name="project_id" value="<?php echo $project_id; ?>" >
						<select id="proj_select" name="p_name0" class="form-control">
							<option value=""></option>
							
							
							<?php foreach($projects as $key => $val) { ?>
							<?php if($val == $p_name0){?>
							<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
							<?php }else{ ?>
							<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
							<?php } ?>
							<?php } ?>
						</select>
					</div>	
					<div class="form-group">
						<label style="color:#fff">Date : </label>
						<input class="form-control" type="text" placeholder="" name="p_date0" value="<?php echo $p_date0; ?>" >
					</div>
					<?php if($p_name0 != ""){ ?>
					<div class="form-group d-flex mt-3">
						<button type="submit" class="btn btn-info btn-sm mr-3">Submit</button>
						<button type="reset" class="btn btn-info btn-sm">Reset</button>
					</div>
					<?php } ?>
					<?php if ($project_id){ ?>
					<div class="form-group text-center">
						<button type="button" class="btn btn-danger btn-sm " id="btn-delete-project" >Delete</button>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<script>
			$('#proj_select').on("change", function () { 
				$("input[name='project_id']").val($(this).val());
				$('#project_form').attr('action', $("input[name='proj_url']").val());
				$('#project_form').submit();
			});
		</script>
