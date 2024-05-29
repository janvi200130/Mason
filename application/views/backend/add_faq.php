<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>AdminLTE 3 | User Profile</title>
	<?php include('layouts/header.php') ?>
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">


		<?php include('layouts/sidebar.php') ?>


		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>FAQ</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Faq</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<form action="<?= base_url('admin/save-faq') ?>" method="post">


										<div class="form-group row">
											<label for="inputExperience" class="col-sm-2 col-form-label">Question</label>
											<div class="col-sm-10">
												<textarea class="form-control" required name="question" id="inputExperience" placeholder="Question"></textarea>
											</div>
										</div>


										<div class="form-group row">
											<label for="inputExperience" class="col-sm-2 col-form-label">Answer</label>
											<div class="col-sm-10">
												<textarea class="form-control" required name="answer" id="inputExperience" placeholder="Answer"></textarea>
											</div>
										</div>


										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<button type="submit" class="btn btn-danger">
													Add Faq
												</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>


		<aside class="control-sidebar control-sidebar-dark"></aside>
	</div>
	<?php include('layouts/footer.php') ?>
</body>

</html>
