<?php include('layouts/header.php') ?>

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background mx-lg-1-6 mx-xl-2-5 mx-xxl-2-9 border-lg-radius-10" data-overlay-dark="3" data-background="<?= base_url(); ?>assets/img/banner/about.jpg">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h1>Contact Us</h1>
				<!-- <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul> -->
			</div>
		</div>
	</div>
</section>

<!-- CONTACT DETAILS
        ================================================== -->
<section class="contact-style02">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-xl-4">
				<div>
					<div class="d-flex primary-shadow p-1-6 p-sm-1-9 mb-1-6 contact-box">
						<div class="flex-shrink-0 me-3">
							<i class="ti-location-pin icon"></i>
						</div>
						<div class="flex-grow-1">
							<h4 class="h5">Location</h4>
							<span>66 Guild Street 512B, Great North Town.</span>
						</div>
					</div>
					<div class="d-flex primary-shadow p-1-6 p-sm-1-9 mb-1-6 contact-box">
						<div class="flex-shrink-0 me-3">
							<i class="ti-mobile icon"></i>
						</div>
						<div class="flex-grow-1">
							<h4 class="h5">Phone Number</h4>
							<span class="d-block">(+44) 123 456 789</span>
							<span>(+1) 234-567-9874</span>
						</div>
					</div>
					<div class="d-flex primary-shadow p-1-6 p-sm-1-9 mb-1-6 contact-box">
						<div class="flex-shrink-0 me-3">
							<i class="ti-email icon"></i>
						</div>
						<div class="flex-grow-1">
							<h4 class="h5">Email Address</h4>
							<span class="d-block">example@yourdomain.com</span>
							<span>info@yourdomain.com</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-xl-8">
				<div class="ps-lg-4">
					<div class="primary-shadow p-1-9 p-md-5">
						<div class="sec-title03 mb-1-9">
							<h2 class="display-6 mb-0 lh-1 font-weight-800">Contact Us</h2>
						</div>
						<form class="contact" action="<?= base_url('save-contact') ?>" method="post" enctype="multipart/form-data" onclick="">
							<div class="quform-elements">
								<div class="row">
									<?php
									if ($this->session->flashdata('success')) {
									?>
										<div class="alert alert-success">
											<?php echo $this->session->flashdata('success'); ?>
										</div>
									<?php } ?>

									<?php
									if ($this->session->flashdata('error')) {
									?>
										<div class="alert alert-success">
											<?php echo $this->session->flashdata('error'); ?>
										</div>
									<?php } ?>

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
											<label for="subject">Your Subject <span class="quform-required">*</span></label>
											<div class="quform-input">
												<input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" />
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

									<!-- Begin Textarea element -->
									<div class="col-md-12">
										<div class="quform-element form-group">
											<label for="message">Message <span class="quform-required">*</span></label>
											<div class="quform-input">
												<textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
											</div>
										</div>
									</div>
									<!-- End Textarea element -->




									<!-- Begin Submit button -->
									<div class="col-md-12">
										<div class="quform-submit-inner">
											<button class="butn md" type="submit"><span>Send Message</span></button>
										</div>
										<div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
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

<!-- MAP
        ================================================== -->
<div class="container">
	<iframe class="contact-map border-radius-5" id="gmap_canvas" src="https://maps.google.com/maps?q=london&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
</div><br>

<?php include('layouts/footer.php') ?>
