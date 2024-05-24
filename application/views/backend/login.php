<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mason | Admin</title>

	<link rel="stylesheet" href="../../../../css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/plugins/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/dist/css/adminlte.min.css?v=3.2.0">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Mason </b>Admin</a>
		</div>

		<div class="card">
			<?php

			if ($this->session->flashdata('msg')) {
			?>
				<div class="alert alert-danger">
					<?= $this->session->flashdata('msg') ?>
				</div>
			<?php
			}
			?>

		
			<div class="card-body login-card-body">
				<!-- <p class="login-box-msg">Sign in to start your session</p> -->
				<form action="<?= base_url('auth') ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username') ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<?= form_error('username') ?>
					<div class="input-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?= form_error('password') ?>
					<div class="row">


						<div class="col-4 mx-auto">
							<button type="submit" class="btn  btn-primary btn-block">Sign In</button>
						</div>

					</div>
				</form>
				<!-- <div class="social-auth-links text-center mb-3">
					<p>- OR -</p>
					<a href="#" class="btn btn-block btn-primary">
						<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
					</a>
					<a href="#" class="btn btn-block btn-danger">
						<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
					</a>
				</div> -->

				<!-- <p class="mb-1">
					<a href="forgot-password.html">I forgot my password</a>
				</p>
				<p class="mb-0">
					<a href="register.html" class="text-center">Register a new membership</a>
				</p> -->
			</div>

		</div>
	</div>


	<script src="<?= base_url() ?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>

	<script src="<?= base_url() ?>assets/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="<?= base_url() ?>assets/admin_assets/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
