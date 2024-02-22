<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modernize Free</title>
	<link rel="shortcut icon" type="image/png" href="images/logos/favicon.png" />
	<link rel="stylesheet" href="css/styles.min.css" />
</head>

<body>
	<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
		<!-- Sidebar Start -->
		<aside class="left-sidebar">
			<!-- Sidebar scroll-->
			<div>
				<div class="brand-logo d-flex align-items-center justify-content-between">
					<a href="./index.html" class="text-nowrap logo-img">
						<img src="images/logos/dark-logo.svg" width="180" alt="" />
					</a>
					<div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
						<i class="ti ti-x fs-8"></i>
					</div>
				</div>
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
					<ul id="sidebarnav">
						<li class="nav-small-cap">
							<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
							<span class="hide-menu">Home</span>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= base_url('/dashboard') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-layout-dashboard"></i>
								</span>
								<span class="hide-menu">Dashboard</span>
							</a>
						</li>
						<li class="nav-small-cap">
							<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
							<span class="hide-menu">KEBUTUHAN USER</span>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
								<span>
									<i class="ti ti-user"></i>
								</span>
								<span class="hide-menu">User</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
								<span>
									<i class="ti ti-user-circle"></i>
								</span>
								<span class="hide-menu">Role</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
								<span>
									<i class="ti ti-line"></i>
								</span>
								<span class="hide-menu">Antrean</span>
							</a>
						</li>
						<li class="nav-small-cap">
							<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
							<span class="hide-menu">AUTH</span>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= base_url('/login') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-login"></i>
								</span>
								<span class="hide-menu">Login</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= base_url('/register') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-user-plus"></i>
								</span>
								<span class="hide-menu">Register</span>
							</a>
						</li>
						<li class="nav-small-cap">
							<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
							<span class="hide-menu">LAPORAN</span>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
								<span>
									<i class="ti ti-report"></i>
								</span>
								<span class="hide-menu">Laporan KIA</span>
							</a>
						</li>
					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!--  Sidebar End -->