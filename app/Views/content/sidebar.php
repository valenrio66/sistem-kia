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

		<?php

		// Menentukan link aktif berdasarkan halaman yang sedang dibuka
		$currentPage = basename($_SERVER['REQUEST_URI']);

		// Tentukan link yang akan di-highlight sesuai dengan halaman yang sedang dibuka
		function isActive($page, $currentPage)
		{
			return ($page === $currentPage) ? 'active' : '';
		}
		?>

		<!-- Sidebar Start -->
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" style="text-align: center;" href="index.html">
					<span class="align-middle">SISTEM KIA</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Home
					</li>

					<li class="sidebar-item <?= isActive('dashboard', $currentPage) ?>">
						<a class="sidebar-link" href="<?= base_url('/dashboard') ?>">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Menu Utama</span>
						</a>
					</li>

					<li class="sidebar-header">
						Submenu Admin
					</li>

					<li class="sidebar-item <?= isActive('user', $currentPage) ?>">
						<a class="sidebar-link" href="<?= base_url('/dashboard/user') ?>">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
						</a>
					</li>

					<li class="sidebar-header">
						Data Pelayanan Kesehatan Ibu
					</li>

					<li class="sidebar-item <?= isActive('antenatal', $currentPage) ?>">
						<a class="sidebar-link" href="<?= base_url('/dashboard/antenatal') ?>">
							<i class="align-middle" data-feather="activity"></i> <span class="align-middle">Antenatal</span>
						</a>
					</li>

					<li class="sidebar-item <?= isActive('persalinannifas', $currentPage) ?>">
						<a class="sidebar-link" href="<?= base_url('/dashboard/persalinannifas') ?>">
							<i class="align-middle" data-feather="activity"></i> <span class="align-middle">Persalinan dan Nifas</span>
						</a>
					</li>

					<li class="sidebar-item <?= isActive('kematian_maternal', $currentPage) ?>">
						<a class="sidebar-link" href="<?= base_url('/dashboard/kematian_maternal') ?>">
							<i class="align-middle" data-feather="activity"></i> <span class="align-middle">Kematian Maternal</span>
						</a>
					</li>

					<li class="sidebar-item <?= isActive('keluargaberencana', $currentPage) ?>">
						<a class="sidebar-link" href="<?= base_url('/dashboard/keluarga_berencana') ?>">
							<i class="align-middle" data-feather="activity"></i> <span class="align-middle">Keluarga Berencana</span>
						</a>
					</li>

					<li class="sidebar-header">
						Data Kematian Neonatal Bayi dan Balita
					</li>

					<li class="sidebar-item <?= isActive('kematian_bayi', $currentPage) ?>">
						<a class="sidebar-link" href="<?= base_url('/dashboard/kematian_bayi') ?>">
							<i class="align-middle" data-feather="activity"></i> <span class="align-middle">Kematian</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Sidebar End -->