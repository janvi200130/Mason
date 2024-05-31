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
							<h1 class="m-0 text-dark">Slider</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
								<li class="breadcrumb-item active">Slider</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->
			<section class="content">
				<div class="container-fluid">

					<div class="row">

						<div class="col-md-12">


							<div class="card">

							<?php if ($this->session->flashdata('error') != "") {
								?>
									<div class="alert alert-success"><?php echo $this->session->flashdata('error') ?></div>
								<?php				} ?>
								<div class="card-body">
									<h5>
										Upload Slider
									</h5>

									<form action="<?= base_url('admin/save-slider') ?>" method="post" enctype="multipart/form-data">
										<div>
											<label for="slider">Slider Image</label>
											<input type="file" required class="form-control" name="sliderimage" id="">
										</div>
										<div class="mt-2">
											<label for="slider">Title Text</label>
											<input type="text" class="form-control" name="title_text" id="">
										</div>
								
										<div class="mt-2">
											<label for="slider">Sub Title Text</label>
											<input type="text" class="form-control" name="subtitle_text" id="">
										</div>

										<div class="mt-2">
											<label for="slider">Button Text</label>
											<input type="text" class="form-control" name="btn_text" id="">
										</div>

										<div class="mt-2">
											<label for="slider">Button Link</label>
											<input type="text" class="form-control" name="btn_link" id="">
										</div>

										<button type="submit"  class=" mt-3 btn btn-success" >Upload Slider</button>

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

	<script>
		$(function() {
			$("#example1").DataTable({
				"responsive": true,
				"lengthChange": false,
				"autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

		});
	</script>

	<script>
		function deleteSlider(id) {
			if (confirm('are you sure to delete this record')) {
				window.location.href = '<?php echo base_url() . 'admin/deleteSlider?id=' ?>' + id;
			}
		}
	</script>

</body>

</html>
