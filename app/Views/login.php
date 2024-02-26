<?= $this->include('auth/header-login') ?>

<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
	data-sidebar-position="fixed" data-header-position="fixed">
	<div
		class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
		<div class="d-flex align-items-center justify-content-center w-100">
			<div class="row justify-content-center w-100">
				<div class="col-md-8 col-lg-6 col-xxl-3">
					<div class="card mb-0">
						<div class="card-body">
							<a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
								<img src="images/logos/dark-logo.svg" width="180" alt="">
							</a>
							<p class="text-center">Kesehatan Ibu dan Anak</p>
							<form action="<?= site_url('auth/attemptLogin'); ?>" method="post">
								<div class="mb-3">
									<label for="username" class="form-label">Username</label>
									<input type="text" class="form-control" id="username" name="username">
								</div>
								<div class="mb-4">
									<label for="password" class="form-label">Password</label>
									<input type="password" class="form-control" id="password" name="password">
								</div>
								<button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign
									In</button>
								<div class="d-flex align-items-center justify-content-center">
									<p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
									<a class="text-primary fw-bold ms-2" href="<?= base_url('/register') ?>">Create an
										account</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->include('auth/footer-login') ?>