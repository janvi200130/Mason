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
							<h1 class="m-0 text-dark">Edit About</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
								<li class="breadcrumb-item active">About</li>
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


									<form action="<?= base_url('admin/updateAbout') ?>" method="post">
										<div class="row mt-3">

											<?php

											foreach ($records as $record) {
											?>

												<div class="col-md-12">
													<label for="" class="form-label">Introduction</label>
													<textarea class="form-control" name="intruduction" id="">
													<?= $record->intruduction ?>
														</textarea>
														<input type="hidden" name="id" value="<?= $record->id ?>" id="">
												</div>
												<div class="col-md-12">
													<label for="" class="form-label">Mission</label>
													<textarea class="form-control" name="mission" id="">
													<?= $record->mission ?>
										</textarea>
												</div>
												<div class="col-md-12">
													<label for="" class="form-label">Vision</label>
													<textarea class="form-control" name="vision" id="">
													<?= $record->vision ?>
										</textarea>
												</div>
												<button class="btn btn-success mt-3" type="submit" name="update">Save Changes</button>
										</div>

									<?php } ?>
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




		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<?php include('layouts/footer.php') ?>



</body>

</html>
