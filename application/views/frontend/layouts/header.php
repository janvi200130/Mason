
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Business Consulting HTML Template">
    <meta name="description" content="Betbiz - Business Consulting HTML Template">

    <!-- title  -->
    <title>MASON</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/logos/favicon.png">
    <!-- <link rel="apple-touch-icon" href="</?=base_url();?>assets/img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="</?=base_url();?>assets/img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="</?=base_url();?>assets/img/logos/apple-touch-icon-114x114.png"> -->

    <!-- plugins -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="<?=base_url();?>assets/search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="<?=base_url();?>assets/quform/css/base.css">

    <!-- theme core css -->
    <link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <!-- <div id="preloader"></div> -->

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- START HEADER
        ================================================== -->
        <header class="header-style2">
            <div class="navbar-default border-bottom border-color-light-white">

                <!-- start top search -->
                <div class="top-search bg-secondary">
                    <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                        <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">
                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <h3 class="text-danger">MASON</h3>
                                        <!-- <a href="<?=base_url('/')?>" class="navbar-brand logodefault">
                                            <img id="logo" src="<?=base_url();?>assets/img/logos/logo.png" alt="logo">
                                        </a> -->
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler bg-dark"></div>

                                    <!-- start menu area -->
                                    <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                        <li>
                                            <a href="<?=base_url('/')?>">Home</a>
                                           
                                        </li>
                                        <li><a href="<?=base_url('about')?>">About Us</a></li>
                                        <li>
											<a href="<?= base_url('service') ?>">Services</a>
									
											<!-- <ul>
                                                <li><a href="<?=base_url('technology')?>">Technology</a></li>
                                                <li><a href="<?=base_url('manufacturing')?>">Manufacturing</a></li>
                                                <li><a href="<?=base_url('sales')?>">Sales</a></li>
                                            </ul> -->

									</li>
                                        <li><a href="<?=base_url('enquiry')?>">Quick Enquiry</a></li>
                                        <li><a href="<?=base_url('career')?>">Career</a></li>
                                        <li><a href="<?=base_url('contact')?>">Contact Us</a></li>
                                        
                                        <!-- <li>
                                            <a href="#!">Pages</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="#!">Our Services</a>
                                                    <ul>
                                                        <li><a href="services-01.html">Services 01</a></li>
                                                        <li><a href="services-02.html">Services 02</a></li>
                                                        <li><a href="services-03.html">Services 03</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="404-page.html">404 Page</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">Service</a>
                                            <ul>
                                                <li><a href="startup-consulting.html">Startup Consulting</a></li>
                                                <li><a href="business-strategy.html">Business Strategy</a></li>
                                                <li><a href="finance-solution.html">Finance Solution</a></li>
                                                <li><a href="market-research.html">Market Research</a></li>
                                                <li><a href="investment-plan.html">Investment Plan</a></li>
                                                <li><a href="detail-report.html">Detail Report</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">Portfolio</a>
                                            <ul>
                                                <li><a href="#!">Portfolio Grid</a>
                                                    <ul>
                                                        <li><a href="portfolio-two-columns.html">2 Columns</a></li>
                                                        <li><a href="portfolio.html">3 Columns - Standard</a></li>
                                                        <li><a href="portfolio-four-columns.html">4 Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">Blog</a>
                                            <ul>
                                                <li><a href="#!">Blog Grid</a>
                                                    <ul>
                                                        <li><a href="blog-grid-two-columns.html">2 Columns</a></li>
                                                        <li><a href="blog-grid-two-columns-left-sidebar.html">2 Col – Left Sidebar</a></li>
                                                        <li><a href="blog-grid-two-columns-right-sidebar.html">2 Col – Right Sidebar</a></li>
                                                        <li><a href="blog-grid.html">3 Columns - Standard</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li> -->
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <!-- <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                        <ul>
                                            <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                            <li class="d-none d-xl-inline-block"><a href="contact.html" class="butn md"><span>Free Quote</span></a></li>
                                        </ul>
                                    </div> -->
                                    <!-- end attribute navigation -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <!-- END HEADER
        ==================================================  -->
