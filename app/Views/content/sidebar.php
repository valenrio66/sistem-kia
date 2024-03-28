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
		session_start(); // Mulai sesi jika belum dimulai

		// Periksa apakah user ID tersedia di sesi
		if (isset($_SESSION['user_id'])) {
			$userId = $_SESSION['user_id'];

			// Periksa apakah model user ada dan dapat digunakan
			if (class_exists('\App\Models\UserModel')) {
				$userModel = new \App\Models\UserModel();

				// Periksa apakah userRole dapat diambil dari model
				if (method_exists($userModel, 'getUserById')) {
					$userRole = $userModel->getUserById($userId);
				} else {
					$userRole['id_role'] = 0; // Jika method tidak ada, atur ke Guest
				}
			} else {
				$userRole['id_role'] = 0; // Jika model tidak ada, atur ke Guest
			}
		} else {
			$userRole['id_role'] = 0; // Jika user ID tidak tersedia di sesi, atur ke Guest
		}

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
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<?php if ($userRole['id_role'] == 1) : ?>
						<li class="sidebar-header">
							Submenu Admin
						</li>

						<li class="sidebar-item <?= isActive('user', $currentPage) ?>">
							<a class="sidebar-link" href="<?= base_url('/dashboard/user') ?>">
								<i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
							</a>
						</li>

						<li class="sidebar-item <?= isActive('role', $currentPage) ?>">
							<a class="sidebar-link" href="<?= base_url('/dashboard/role') ?>">
								<i class="align-middle" data-feather="users"></i> <span class="align-middle">Role</span>
							</a>
						</li>

						<!-- <li class="sidebar-item <?= isActive('antrian', $currentPage) ?>">
							<a class="sidebar-link" href="<?= base_url('/dashboard/antrian') ?>">
								<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Antrian</span>
							</a>
						</li> -->

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
								<i class="align-middle" data-feather="user"></i> <span class="align-middle">Kematian</span>
							</a>
						</li>

						<!-- Tambahkan item sidebar khusus admin di sini sesuai kebutuhan -->
					<?php elseif ($userRole['id_role'] == 2) : ?>
						<li class="sidebar-header">
							Submenu Pasien
						</li>

						<li class="sidebar-item <?= isActive('profile', $currentPage) ?>">
							<a class="sidebar-link" href="<?= base_url('/dashboard/profile') ?>">
								<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
							</a>
						</li>

						<li class="sidebar-item <?= isActive('create_antrian', $currentPage) ?>">
							<a class="sidebar-link" href="<?= base_url('/dashboard/pasien/antrian_create') ?>">
								<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Tambah Antrian</span>
							</a>
						</li>

						<!-- Tambahkan item sidebar khusus pasien di sini sesuai kebutuhan -->
					<?php else : ?>
						<li class="sidebar-item">
							<span class="sidebar-link">Anda tidak memiliki akses</span>
						</li>
					<?php endif; ?>

					<li class="sidebar-header">
						Submenu Umum
					</li>

					<li class="sidebar-item <?= isActive('laporan', $currentPage) ?>">
						<a class="sidebar-link" href="<?= base_url('/dashboard/laporan') ?>">
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
		<!-- Sidebar End -->