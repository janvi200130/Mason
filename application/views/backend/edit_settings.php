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
							<h1>Settings</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Settings</li>
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

									<?php
									foreach ($records as $record) {
									?>
										<div class="form-group row">
											<label for="inputName" class="col-sm-2 col-form-label">Website Name</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail" class="col-sm-2 col-form-label">Logo</label>
											<div class="col-sm-10">
												<img src="<?= $record->logo ?>" alt="">
												<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputName2" class="col-sm-2 col-form-label">Phone Number</label>
											<div class="col-sm-10">
											<input class="form-control" value="<?= $record->name ?>">
												
											</div>
										</div>
										<div class="form-group row">
											<label for="inputName2" class="col-sm-2 col-form-label">Phone Number (Optional)</label>
											<div class="col-sm-10">
											<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputName2" class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-10">
											<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputName2" class="col-sm-2 col-form-label">Email (Optional)</label>
											<div class="col-sm-10">
											<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
											<div class="col-sm-10">
												<textarea class="form-control" id="inputExperience" placeholder="Experience">
												 <?= $record->name ?>
												</textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputExperience" class="col-sm-2 col-form-label">Address (Optional)</label>
											<div class="col-sm-10">
												<textarea class="form-control" id="inputExperience" placeholder="Experience">
												<?= $record->name ?>
												</textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputSkills" class="col-sm-2 col-form-label">Google Map Link</label>
											<div class="col-sm-10">
											<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputSkills" class="col-sm-2 col-form-label">Youtube Link</label>
											<div class="col-sm-10">
											<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputSkills" class="col-sm-2 col-form-label">Facebook Link</label>
											<div class="col-sm-10">
											<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputSkills" class="col-sm-2 col-form-label">Instagram Link</label>
											<div class="col-sm-10">
											<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputSkills" class="col-sm-2 col-form-label">Twitter Link</label>
											<div class="col-sm-10">
											<input class="form-control" value="<?= $record->name ?>">
											</div>
										</div>

										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<button  class="btn btn-info">
												Save Changes
												</button>
											</div>
										</div>
									<?php } ?>
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
