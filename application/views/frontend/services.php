
<?php include('layouts/header.php')?>

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background mx-lg-1-6 mx-xl-2-5 mx-xxl-2-9 border-lg-radius-10" data-overlay-dark="3" data-background="<?=base_url();?>assets/img/banner/about.jpg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Services</h1>
                        <!-- <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Services 01</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES 01
        ================================================== -->
        <section>
            <div class="container">
                <div class="sec-title03 mb-1-9 mb-md-5 text-center">
                    <span class="sm-title">What We Do</span>
                    <h2 class="display-5 mb-0 lh-1 font-weight-800 mt-2 w-md-65 w-xl-50 mx-auto">Our Services</h2>
                </div>
                <div class="row mt-n1-9">
                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="card card-style01">
                            <div class="card-body p-0">
							<div class="card-icon" style="height: unset;width:unset">
								<img src="<?=base_url();?>assets/img/icons/technology.gif" alt="..." class="position-relative z-index-9 w-150px">
                                </div>
                                <div class="position-relative service-content z-index-9">
                                    <h3 class="h4" data-title="Technology"><a href="<?= base_url('technology') ?>"><span>Technology</span></a></h3>
                                
                                    <a href="<?= base_url('technology') ?>" class="read-more">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="card card-style01">
                            <div class="card-body p-0">
                                <div class="card-icon" style="height: unset;width:unset">
                                    <img src="<?=base_url();?>assets/img/icons/manifturing.gif" alt="..." class="position-relative z-index-9 w-150px">

                                </div>
                                <div class="position-relative service-content">
                                    <h3 class="h4" data-title="Manufacturing"><a href="<?= base_url('manufacturing') ?>"><span>Manufacturing</span></a></h3>
                                
                                    <a href="<?= base_url('manufacturing') ?>" class="read-more">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="card card-style01">
                            <div class="card-body p-0">
							<div class="card-icon" style="height: unset;width:unset">
								<img src="<?=base_url();?>assets/img/icons/sales.gif" alt="..." class="position-relative z-index-9 w-150px">
                                </div>
                                <div class="position-relative service-content">
                                    <h3 class="h4" data-title="Sales"><a href="<?= base_url('sales') ?>"><span>Sales</span></a></h3>
                                   
                                    <a href="<?= base_url('sales') ?>" class="read-more">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

      

    <?php include('layouts/footer.php')?>
        