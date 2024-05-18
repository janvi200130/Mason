
<?php include('layouts/header.php')?>

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background mx-lg-1-6 mx-xl-2-5 mx-xxl-2-9 border-lg-radius-10" data-overlay-dark="3" data-background="<?=base_url();?>assets/img/banner/about.jpg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>FAQ's</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>FAQ's</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ'S
        ================================================== -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div>
                            <div id="accordion" class="accordion-style1">
                                <div class="card mb-2">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                1. How might I buy this template ?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Tempora incidunt ut labore et dolore exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                2. Are guarantees offered on the things?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Neque porro quisquam est quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                3. Am I permitted to change the thing that I bought?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                4. What does the template license permit me to do?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Neque porro quisquam est quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                5. Are you ready to buy this theme?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT
        ================================================== -->
        <section class="bg-img cover-background contact-style01" data-background="<?=base_url();?>assets/img/bg/bg-03.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-6">
                        <div class="bg-white p-1-9 p-md-5">
                            <div class="sec-title03 mb-1-9">
                                <span class="sm-title">Contact Us</span>
                                <h2 class="display-5 mb-0 lh-1 font-weight-800 mt-2">Have a any questions? Get in touch!</h2>
                            </div>
                            <form class="contact quform" action="quform/contact.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row gx-3">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Your email here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Captcha element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="form-group">
                                                    <div class="quform-input">
                                                        <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="quform-captcha">
                                                        <div class="quform-captcha-inner">
                                                            <img src="quform/images/captcha/courier-new-light.png" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Captcha element -->

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
        </section>

        <!-- PROCESS
        ================================================== -->
        <section class="process-style1 second">
            <div class="container">
                <div class="sec-title03 mb-1-9 mb-md-5 text-center">
                    <span class="sm-title">Our Process</span>
                    <h2 class="display-5 mb-0 lh-1 font-weight-800 mt-2 w-md-65 w-lg-50 mx-auto">Our Working Plan</h2>
                </div>
                <div class="row mt-n2-9">
                    <div class="col-sm-6 col-lg-3 mt-2-9">
                        <div class="text-center process-box odd">
                            <div class="inner-box">
                                <div class="process-img">
                                    <img src="<?=base_url();?>assets/img/content/process-01.jpg" alt="...">
                                </div>
                                <div class="process-no">
                                    <span>01</span>
                                </div>
                            </div>
                            <h3 class="h5 mb-0">Client Needs</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-2-9">
                        <div class="text-center process-box">
                            <div class="inner-box">
                                <div class="process-img">
                                    <img src="<?=base_url();?>assets/img/content/process-02.jpg" alt="...">
                                </div>
                                <div class="process-no">
                                    <span>02</span>
                                </div>
                            </div>
                            <h3 class="h5 mb-0">Design</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-2-9">
                        <div class="text-center process-box odd">
                            <div class="inner-box">
                                <div class="process-img">
                                    <img src="<?=base_url();?>assets/img/content/process-03.jpg" alt="...">
                                </div>
                                <div class="process-no">
                                    <span>03</span>
                                </div>
                            </div>
                            <h3 class="h5 mb-0">Testing</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-2-9">
                        <div class="text-center process-box">
                            <div class="inner-box">
                                <div class="process-img">
                                    <img src="<?=base_url();?>assets/img/content/process-04.jpg" alt="...">
                                </div>
                                <div class="process-no">
                                    <span>04</span>
                                </div>
                            </div>
                            <h3 class="h5 mb-0">Go-Live</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php include('layouts/footer.php')?>
        