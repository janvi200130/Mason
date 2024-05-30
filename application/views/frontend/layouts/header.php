

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- metas -->
	<meta charset="utf-8">
	<meta name="author" content="Rays IT World & Design">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content="Mason - Technology & Services ">
	<meta name="description" content="Mason Company provides Technology and Services">

	<!-- title  -->
	<title>MASON</title>

	<!-- favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logos/<?= $settings['logo'] ?>">
	<!-- <link rel="apple-touch-icon" href="</?=base_url();?>assets/img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="</?=base_url();?>assets/img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="</?=base_url();?>assets/img/logos/apple-touch-icon-114x114.png"> -->

	<!-- plugins -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins.css">

	<!-- search css -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/search/search.css">

	<!-- quform css -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/quform/css/base.css">

	<!-- theme core css -->
	<link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet">

</head>

<body>

	<!-- PAGE LOADING
    ================================================== -->
	<!-- <div id="preloader"></div> -->

	<!-- MAIN WRAPPER
    ================================================== -->
	<div class="main-wrapper">

		<!-- START HEADER
        ================================================== -->
		<header class="header-style2">
			<div class="navbar-default border-bottom border-color-light-white">

				<!-- start top search -->
				<div class="top-search bg-secondary">
					<div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
						<form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
							<div class="input-group">
								<span class="input-group-addon cursor-pointer">
									<button class="search-form_submit fas fa-search text-white" type="submit"></button>
								</span>
								<input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
								<span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
							</div>
						</form>
					</div>
				</div>
				<!-- end top search -->

				<div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
					<div class="row align-items-center">
						<div class="col-12 col-lg-12">
							<div class="menu_area alt-font">
								<nav class="navbar navbar-expand-lg navbar-light p-0">
									<div class="navbar-header navbar-header-custom">
										<!-- start logo -->
										<a class="text-danger" href="<?= base_url('/') ?>">

											<img src="<?= base_url() ?>assets\img\logos\<?=  $settings['logo']; ?>" alt="" style="height: 80px;">
										</a>
										<!-- <a href="<?= base_url('/') ?>" class="navbar-brand logodefault">
                                            <img id="logo" src="<?= base_url(); ?>assets/img/logos/logo.png" alt="logo">
                                        </a> -->
										<!-- end logo -->
									</div>

									<div class="navbar-toggler bg-dark"></div>

									<!-- start menu area -->
									<ul class="navbar-nav ms-auto" id="nav" style="display: none;">
										<li>
											<a href="<?= base_url('/') ?>">Home</a>

										</li>
										<li><a href="<?= base_url('about') ?>">About Us</a></li>
										<li>
											<a href="<?= base_url('service') ?>">Services</a>

										</li>
										<li><a href="<?= base_url('enquiry') ?>">Quick Enquiry</a></li>
										<li><a href="<?= base_url('career') ?>">Career</a></li>
										<li><a href="<?= base_url('contact') ?>">Contact Us</a></li>

									
									</ul>
									<!-- end menu area -->

								
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- END HEADER
        ==================================================  -->
