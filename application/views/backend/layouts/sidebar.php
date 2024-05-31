	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>

		</ul>



		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">

			<!-- Profile Dropdown Menu -->
			<li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="far fa-user"></i>

				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">


					<a href="<?= base_url('admin/profile') ?>" class="dropdown-item">
	
						<i class="fas mr-2 fa-user-alt"></i>
						Profile
					</a>
					<div class="dropdown-divider"></div>

					<a href="<?= base_url('logout') ?>" class="dropdown-item">
					<i class="fas fa-sign-out-alt mr-2"></i>
						Logout
					</a>
				</div>
			</li>

		</ul>
	</nav>
	<!-- /.navbar -->



	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="<?= base_url('admin/dashboard') ?>" class="brand-link">
			<img src="<?= base_url() ?>assets\img\logos/mts logo.jpg" alt="Masan Logo" class="brand-image  elevation-3" style="">
			<span class="brand-text font-weight-light">Masan Admin</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/admin_assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

					<li class="nav-item">
						<a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Home
							</p>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?= base_url('admin/about') ?>" class="nav-link">
						<i class="fas fa-edit nav-icon"></i>
							<p>
								About
							</p>
						</a>
					</li>

					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
						
							<i class="fas nav-icon fa-image"></i>
							<p>
								Slider
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= base_url('admin/add-slider') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Add Slider</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('admin/slider') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>All Slider</p>
								</a>
							</li>

						</ul>
					</li>

					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>
								Service
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= base_url('admin/add-service') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Add Service</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('admin/services') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>All Service</p>
								</a>
							</li>

						</ul>
					</li>


					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
						<i class="far fa-question-circle nav-icon"></i>
							<p>
								Faq
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= base_url('admin/add-faq') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Add Faq</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('admin/faq') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>All Faq</p>
								</a>
							</li>

						</ul>
					</li>

					<li class="nav-item">
						<a href="<?= base_url('admin/contact') ?>" class="nav-link">
		
							<i class="fas fa-address-book nav-icon"></i>
							<p>
								Contact
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/enquiry') ?>" class="nav-link">
						<i class="fas nav-icon fa-list-alt"></i>
							<p>
								Quick Enquiry
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/career') ?>" class="nav-link">
						<i class="fas nav-icon fa-address-card"></i>
							<p>
								Career
							</p>
						</a>
					</li>

					<li class="nav-header">Extra</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/profile') ?>" class="nav-link">
			
							<i class="fas nav-icon fa-user-alt"></i>
							<p>
								Profile
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/settings') ?>" class="nav-link">
						<i class="fas fa-info-circle nav-icon"></i>
							<p>
								Website Settings
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('logout') ?>" class="nav-link">
						<i class="fas fa-sign-out-alt nav-icon"></i>
							<p>
								Logout
							</p>
						</a>
					</li>


				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
