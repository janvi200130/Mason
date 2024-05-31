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
							<h1 class="m-0 text-dark">Faq</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Faq</li>
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
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
											<th>ID</th>
												<th>Question</th>
												<th>Answer</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
									<tbody>
									<?php $i=1; foreach ($records as $row) {  ?>
												<tr>
													<td><?= $i ?></td>
													<td><?= $row->question ?></td>
													<td><?= $row->answer ?></td>
													<td> <?= $row->date ?></td>
													<td>
														<!-- <a href="<?= base_url('admin/deleteContact/'.$row->id) ?>"><i class="fa fa-trash"></i></a> -->
												
													<a href="javascript:void(0);" onclick="deleteFaq(<?php echo $row->id ?>)" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> </a>
												
												</td>
												</tr>
											<?php } $i++;?>
									</tbody>
									
									</table>
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
	function deleteFaq(id) {
		if (confirm('are you sure to delete this record')) {
			window.location.href = '<?php echo base_url() . 'admin/deleteFaq?id='?>' + id;
		}
	}
</script>

</body>

</html>
