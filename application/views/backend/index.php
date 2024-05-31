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
							<h1 class="m-0 text-dark">Dashboard</h1>
						</div><!-- /.col -->
						<div class=" col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-info"> 
								<div class="inner">
									<h3><?= $services ?></h3>

									<p>Total Service</p>
								</div>
								<div class="icon">
									<i class="fa fa-user"></i>
								</div>
								<a href="<?= base_url('admin/services') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-success">
								<div class="inner">
									<h3><?= $contact ?></h3>

									<p>Total Contact</p>
								</div>
								<div class="icon">
									<i class="fa fa-user"></i>
								</div>
								<a href="<?= base_url('admin/contact') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-warning">
								<div class="inner">
									<h3><?= $career ?></h3>

									<p>Total Career </p>
								</div>
								<div class="icon">
									<i class="fa fa-user"></i>
								</div>
								<a href="<?= base_url('admin/career') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-danger">
								<div class="inner">
									<h3><?= $enquiry ?></h3>

									<p>Total Enquiry</p>
								</div>
								<div class="icon">
									<i class="fa fa-user"></i>
								</div>
								<a href="<?= base_url('admin/enquiry') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
					</div>
					<!-- /.row -->

				</div><!-- /.container-fluid -->
			</section>
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
