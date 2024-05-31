<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php include('layouts/header.php') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">


		<?php include('layouts/sidebar.php') ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">Profile</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
								<li class="breadcrumb-item active">Profile</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">


							<div class="card">
								<?php if ($this->session->flashdata('success') != "") {
								?>
									<div class="alert alert-success"><?php echo $this->session->flashdata('success') ?></div>
								<?php				} ?>

								<div class="card-body">
									
									<div>
										<h5>Update Password</h5>
									</div>
									<form action="">
										<div class="row mt-3">
											<div class="col-md-12">
												<label for="" class="form-label">Enter Current Password</label>
												<input type="text" name="" class="form-control" id="">
											</div>
											<div class="col-md-12">
												<label for="" class="form-label">Enter New Password</label>
												<input type="text" name="" class="form-control" id="">
											</div>
											<div class="col-md-12">
												<label for="" class="form-label">Confirm New Password</label>
												<input type="text" name="" class="form-control" id="">
											</div>
											<button class="btn btn-success mt-3" type="submit" name="updatePassword">Update Password</button>
										</div>
									</form>
								</div>

							</div>

						</div>

					</div>

				</div>

			</section>
			<!-- Main content -->

			<!-- /.content -->
		</div>

		<!-- /.content-wrapper -->
		<!-- <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="http://adminlte.io">Rays IT World Design and World</a>.</strong>
    All rights reserved.
   
  </footer> -->


		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<?php include('layouts/footer.php') ?>



</body>

</html>
