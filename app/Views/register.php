    <!-- Content Register Start -->
    <?= $this->include('auth/header-register') ?>

    <main class="d-flex w-100">
    	<div class="container d-flex flex-column">
    		<div class="row vh-100">
    			<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
    				<div class="d-table-cell align-middle">

    					<div class="text-center mt-4">
    						<h1 class="h2">Buat Akun!</h1>
    						<p class="lead">
    							Sistem Kesehatan Ibu & Anak
    						</p>
    					</div>

    					<div class="card">
    						<div class="card-body">
    							<div class="m-sm-3">
    								<form action="<?= site_url('auth/attemptRegister'); ?>" method="post">
    									<div class="mb-3">
    										<label class="form-label">Nama Lengkap</label>
    										<input class="form-control form-control-lg" type="text" id="nama_user" name="nama_user" placeholder="Masukkan Nama Lengkap" />
    									</div>
    									<div class="mb-3">
    										<label class="form-label">Username</label>
    										<input class="form-control form-control-lg" type="text" id="username" name="username" placeholder="Masukkan Username" />
    									</div>
    									<div class="mb-3">
    										<label class="form-label">Password</label>
    										<input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Masukkan Password" />
    									</div>
    									<div class="d-grid gap-2 mt-3">
    										<button type="submit" class="btn btn-lg btn-primary">Buat Akun</button>
    									</div>
    								</form>
    							</div>
    						</div>
    					</div>
    					<div class="text-center mb-3">
    						Sudah Punya Akun? <a href="<?= base_url('/login') ?>">Log In</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </main>

    <?= $this->include('auth/footer-register') ?>
    <!-- Content Register End -->