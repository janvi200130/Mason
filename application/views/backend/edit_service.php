<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<style>
		.active {
			display: block !important;
		}
	</style>
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


											<div class="col-md-12 mt-3">
												<label for="" class="form-label">Service Heading</label>
												<input type="text" class="form-control" name="" id="">
											</div>

											<div class="col-md-12 mt-3">
												<label for="" class="form-label">Service Image</label>
												<!-- <img src="" alt="">   paste image url -->
												<label for="" class="form-label">Upload New Image</label>
												<input type="file" class="form-control" name="" id="">
											</div>



											<div class="col-md-12 mt-3">
												<label for="" class="form-label">Description</label>
												<textarea class="form-control" name="intruduction" id="">

														</textarea>
												<input type="hidden" name="id" id="">
											</div>


											<button class="btn btn-success mt-3" type="submit" name="update">Save Changes</button>
										</div>


									</form>



									<!-- service features starts here -->

									<div class="row mt-5">
										<h4 class=""> Features</h4>
										<button class="btn btn-link" onclick="toggleService()">Edit Service</button>

										<div class="col-lg-12" style="display: none;" id="serviceFeaturesSection">

											<!-- first features -->
											<div>
												<div class="card p-4">
													<h5>Feature 1</h5>
													<div class="mt-3">
														<label for="" class="form-label">Feature Title</label>

														<input type="text" class="form-control" name="" id="">
													</div>

													<div class="mt-3">
														<label for="" class="form-label">Feature Description</label>
														<textarea name="" id=""></textarea>
													</div>
												</div>

												<!-- second feature -->
												<div class="card p-4">
													<h5>Feature 2</h5>
													<div class="mt-3">
														<label for="" class="form-label">Feature Title</label>

														<input type="text" class="form-control" name="" id="">
													</div>

													<div class="mt-3">
														<label for="" class="form-label">Feature Description</label>
														<textarea name="" id=""></textarea>
													</div>
												</div>

												<!-- third features -->

												<div class="card p-4">
													<h5>Feature 3</h5>
													<div class="mt-3">
														<label for="" class="form-label">Feature Title</label>

														<input type="text" class="form-control" name="" id="">
													</div>

													<div class="mt-3">
														<label for="" class="form-label">Feature Description</label>
														<textarea name="" id=""></textarea>
													</div>
												</div>

												<!-- fourth features -->

												<div class="card p-4">
													<h5>Feature 4</h5>
													<div class="mt-3">
														<label for="" class="form-label">Feature Title</label>

														<input type="text" class="form-control" name="" id="">
													</div>

													<div class="mt-3">
														<label for="" class="form-label">Feature Description</label>
														<textarea name="" id=""></textarea>
													</div>
												</div>

												<button type="submit" class="btn btn-success">Save Changes</button>
											</div>

										</div>
									</div>

									<!-- service features ends here -->


									<hr>
									<!-- service product starts here -->
									<div class="row mt-5">
										<h4 class=""> Products</h4>
										<button class="btn btn-link" onclick="toggleProduct()">Edit Products</button>

										<div class="col-lg-12">

											<!-- first features -->
											<div>
												<div class="card p-4">
													<h5>Product Details</h5>
													<div class="mt-3">
														<label for="" class="form-label">Product Name</label>
														<input type="text" class="form-control" name="" id="">
													</div>
													<div class="mt-3">
														<label for="" class="form-label">Product Image</label>
														<input type="file" class="form-control" name="" id="">
													</div>
												</div>

<button type="submit" class="btn btn-success">Save Product</button>
											</div>

										</div>


									</div>
									<!-- service product ends here -->


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

	<script>
		$(function() {
			// Summernote
			$('textarea').summernote()
		})

		const serviceFeaturesSection = document.getElementById('serviceFeaturesSection');

		function toggleService() {


			serviceFeaturesSection.classList.toggle('active');


		}
	</script>

</body>

</html>
