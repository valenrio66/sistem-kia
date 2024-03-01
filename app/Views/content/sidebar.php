<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="<?= base_url('img/icons/icon-48x48.png') ?>" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Sistem Kesehatan Ibu & Anak</title>

	<link href="<?= base_url('css/app.css') ?>" rel="stylesheet">
	<link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" style="text-align: center;" href="index.html">
          <span class="align-middle">SISTEM KIA</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Home
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('/dashboard') ?>">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

                    <li class="sidebar-header">
						Submenu User
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('/dashboard/user') ?>">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('/dashboard/role') ?>">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Role</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Antrian</span>
            </a>
					</li>

                    <li class="sidebar-header">
						Submenu Laporan
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Laporan KIA</span>
            </a>
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div>
			</div>
		</nav>