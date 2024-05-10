<!-- Content Login Start -->
<?= $this->include('auth/header-login') ?>

<main class="d-flex w-100">
	<div class="container d-flex flex-column">
		<div class="row vh-100">
			<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4">
						<h1 class="h2">Selamat Datang!</h1>
						<p class="lead">
							Sistem Kesehatan Ibu & Anak
						</p>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="m-sm-3">
								<form id="loginForm" action="<?= site_url('auth/attemptLogin'); ?>" method="post">
									<div class="mb-3">
										<label class="form-label">Username</label>
										<input class="form-control form-control-lg" type="text" id="username" name="username" placeholder="Masukkan Username" />
									</div>
									<div class="mb-3">
										<label class="form-label">Password</label>
										<input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Masukkan Password" />
									</div>
									<div class="d-grid gap-2 mt-5">
										<button type="submit" class="btn btn-lg btn-primary">Log In</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- <div class="text-center mb-3">
						Belum Punya Akun? <a href="<?= base_url('/register') ?>">Register</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</main>

<?= $this->include('auth/footer-login') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Content Login End -->

<script>
	document.addEventListener('DOMContentLoaded', function() {
		<?php if (session()->getFlashdata('success')) : ?>
			Swal.fire({
				title: 'Sukses!',
				text: '<?= session()->getFlashdata('success') ?>',
				icon: 'success',
				showConfirmButton: false,
				timer: 1000
			}).then((result) => {
				if (result.dismiss === Swal.DismissReason.timer) {
					window.location.href = "/dashboard";
				}
			});
		<?php elseif (session()->getFlashdata('msg')) : ?>
			Swal.fire({
				title: 'Gagal!',
				text: '<?= session()->getFlashdata('msg') ?>',
				icon: 'error'
			});
		<?php endif; ?>
	});
</script>