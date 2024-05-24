<?php include('layouts/header.php') ?>

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background mx-lg-1-6 mx-xl-2-5 mx-xxl-2-9 border-lg-radius-10" data-overlay-dark="3" data-background="<?= base_url(); ?>assets/img/banner/about.jpg">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h1>Career</h1>
			</div>
		</div>
	</div>
</section>
<br>


<section>
	<div class="container">
		<div class="sec-title03 mb-1-9 mb-md-5 text-center">
			<span class="sm-title">Join Us</span>
			<h2 class="display-5 mb-0 lh-1 font-weight-800 mt-2 w-md-65 w-xl-50 mx-auto">Career</h2>
		</div>
		<div class="row mt-n1-9">


			<div class="col-md-12 col-lg-12 col-xl-12">
				<div class="ps-lg-4">
					<div class="primary-shadow p-1-9 p-md-5">

						<form class="contact " action="<?= base_url('save-career') ?>" method="post" enctype="multipart/form-data" onclick="">
							<div class="quform-elements">
								<div class="row">

									<!-- Begin Text input element -->
									<div class="col-md-6">
										<div class="quform-element form-group">
											<label for="name">Your Name <span class="quform-required">*</span></label>
											<div class="quform-input">
												<input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
											</div>
										</div>
									</div>
									<!-- End Text input element -->

									<!-- Begin Text input element -->
									<div class="col-md-6">
										<div class="quform-element form-group">
											<label for="email">Your Email <span class="quform-required">*</span></label>
											<div class="quform-input">
												<input class="form-control" id="email" type="text" name="email" placeholder="Your email here" />
											</div>
										</div>
									</div>
									<!-- End Text input element -->


									<!-- Begin Text input element -->
									<div class="col-md-6">
										<div class="quform-element form-group">
											<label for="phone">Contact Number</label>
											<div class="quform-input">
												<input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here" />
											</div>
										</div>
									</div>
									<!-- End Text input element -->

									<!-- Begin Text input element -->
									<div class="col-md-6">
										<div class="quform-element form-group">
											<label for="phone">Date Of Birth</label>
											<div class="quform-input">
												<input class="form-control" id="phone" type="date" name="dob" placeholder="Date Of Birth" />
											</div>
										</div>
									</div>
									<!-- End Text input element -->

									<!-- Begin Text input element -->
									<div class="col-md-6">
										<div class="quform-element form-group">
											<label for="phone">Qualification</label>
											<div class="quform-input">
												<input class="form-control" id="phone" type="text" name="qualification" placeholder="Your Qualification Here" />
											</div>
										</div>
									</div>
									<!-- End Text input element -->

									<!-- Begin Text input element -->
									<div class="col-md-6">
										<div class="quform-element form-group">
											<label for="phone">Upload Document [Resume,CV]</label>
											<div class="quform-input">
												<input class="form-control" id="phone" type="file" name="document" placeholder="Your phone here" />
											</div>
										</div>
									</div>
									<!-- End Text input element -->


									<div class="col-md-12">
										<div class="quform-element form-group">
											<label for="phone">Address</label>
											<div class="quform-input">
												<textarea class="form-control"  name="address" id="" >

												</textarea>
											</div>
										</div>
									</div>



									<!-- Begin Submit button -->
									<div class="col-md-12">
										<div class="quform-submit-inner">
											<button class="butn md" type="submit"><span>Send Message</span></button>
										</div>

									</div>
									<!-- End Submit button -->

								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>






<?php include('layouts/footer.php') ?>
