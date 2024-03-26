<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="broker_view.html">Persalinan dan Nifas</a> / Tambah Data Persalinan dan Nifas
		</h5>
		<h1 class="h3 mb-3"><b>Tambah Data Persalinan dan Nifas</b></h1>
		<div class="row">
			<div class="col-12">
				<form id="postPersalinanNifas" action="<?= base_url('persalinannifas/create') ?>" method="post">
					<div class="card">
						<div class="card-body">
							<!-- Inputan Data Persalinan dan Nifas -->
							<h5 class="card-title">Nomor RM</h5>
							<input type="text" class="form-control" id="no_rm" name="no_rm" placeholder="Masukkan Nomor RM" required />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Nama Lengkap Pasien -->
									<h5 class="card-title mt-2">Nama Lengkap Pasien</h5>
									<input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan Nama Lengkap Pasien" required />
								</div>
								<div class="col-md-6">
									<!-- Inputan Nama Suami -->
									<h5 class="card-title mt-2">Nama Suami</h5>
									<input type="text" class="form-control" id="nama_suami" name="nama_suami" placeholder="Masukkan Nama Suami" required />
								</div>
							</div>
							<h5 class="card-title mt-2">Alamat</h5>
							<textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3" placeholder="Masukkan Alamat"></textarea>
							<h5 class="card-title mt-2">Catat Buku KIA</h5>
							<select id="catat_buku_kia" name="catat_buku_kia" class="form-control">
								<option selected>Catat Buku KIA</option>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
							</select>
							<h5 class="card-title">Tanggal Jam Bersalin</h5>
							<input type="datetime-local" class="form-control" id="tgl_jam_bersalin" name="tgl_jam_bersalin" required />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Penolong Persalinan -->
									<h5 class="card-title mt-2">Penolong Persalinan</h5>
									<select id="penolong_persalinan" name="penolong_persalinan" class="form-control">
										<option selected>Pilih Penolong Persalinan</option>
										<option value="Dokter SPOG">Dokter SPOG</option>
										<option value="Dokter Umum">Dokter Umum</option>
										<option value="Bidan">Bidan</option>
										<option value="Lain - Lain">Lain - Lain</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Metode Persalinan -->
									<h5 class="card-title mt-2">Metode Persalinan</h5>
									<select id="metode_persalinan" name="metode_persalinan" class="form-control">
										<option selected>Pilih Metode Persalinan</option>
										<option value="Normal">Normal</option>
										<option value="Sc">Sc</option>
										<option value="Lain - Lain">Lain - Lain</option>
									</select>
								</div>
							</div>
							<h5 class="card-title">Keadaan Ibu</h5>
							<input type="text" class="form-control" id="keadaan_ibu" name="keadaan_ibu" placeholder="Masukkan Keadaan Ibu" required />
							<h5 class="card-title">Status Komplikasi</h5>
							<input type="text" class="form-control" id="status_komplikasi" name="status_komplikasi" placeholder="Masukkan Status Komplikasi" required />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Jenis Kelamin Bayi -->
									<h5 class="card-title mt-2">Jenis Kelamin Bayi</h5>
									<select id="jenis_kelamin_bayi" name="jenis_kelamin_bayi" class="form-control">
										<option selected>Pilih Jenis Kelamin Bayi</option>
										<option value="Laki - Laki">Laki - Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Status Bayi -->
									<h5 class="card-title mt-2">Status Bayi</h5>
									<select id="status_bayi" name="status_bayi" class="form-control">
										<option selected>Pilih Status Bayi</option>
										<option value="Normal">Normal</option>
										<option value="BB < 37 Minggu">BB < 37 Minggu</option>
										<option value="BB < 2500gr">BB < 2500gr</option>
									</select>
								</div>
							</div>
							<h5 class="card-title">Keadaan Bayi Saat Lahir</h5>
							<input type="text" class="form-control" id="keadaan_bayi" name="keadaan_bayi" placeholder="Masukkan Keadaan Bayi Saat Lahir" required />
							<h5 class="card-title">Status Komplikasi Neonatus</h5>
							<input type="text" class="form-control" id="stts_komplikasi_neonatus" name="stts_komplikasi_neonatus" placeholder="Masukkan Status Komplikasi Neonatus" required />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Kunjungan Nifas -->
									<h5 class="card-title mt-2">Kunjungan Nifas</h5>
									<select id="kunjungan_nifas" name="kunjungan_nifas" class="form-control">
										<option selected>Pilih Kunjungan Nifas</option>
										<option value="KF1">KF1</option>
										<option value="KF2">KF2</option>
										<option value="KF3">KF3</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Vit A Nifas -->
									<h5 class="card-title mt-2">Vit A Nifas</h5>
									<select id="vit_a_nifas" name="vit_a_nifas" class="form-control">
										<option selected>Pilih Vit A Nifas</option>
										<option value="Ya">Ya</option>
										<option value="Tidak">Tidak</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Kunjungan Neonatus -->
									<h5 class="card-title mt-2">Kunjungan Neonatus</h5>
									<select id="kunjungan_neonatus" name="kunjungan_neonatus" class="form-control">
										<option selected>Pilih Kunjungan Neonatus</option>
										<option value="KN1">KN1</option>
										<option value="KN2">KN2</option>
										<option value="KN3">KN3</option>
									</select>
								</div>
							</div>

							<!-- Button Submit -->
							<div style="
                                    position: relative;
                                    text-align: right;
                                    margin-top: 20px;
                                ">
								<a href="#" type="button" onclick="history.back()" class="btn btn-info">
									Cancel
								</a>
								<button type="submit" class="btn btn-primary" id="submitButton">
									Simpan
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>

<?= $this->include('content/footer') ?>
<script src="<?= base_url('js/persalinannifas/create.js') ?>"></script>