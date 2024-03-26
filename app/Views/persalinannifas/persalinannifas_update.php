<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="broker_view.html">Persalinan dan Nifas</a> / Update Persalinan dan Nifas
		</h5>
		<h1 class="h3 mb-3"><b>Update Persalinan dan Nifas</b></h1>
		<div class="row">
			<div class="col-12">
				<form id="updatePersalinanNifas" action="<?= base_url('persalinannifas/update/' . $persalinannifas['id_persalinan_nifas']) ?>" method="post">
					<div class="card">
						<div class="card-body">
							<!-- Inputan Data Persalinan dan Nifas -->
							<h5 class="card-title">Data Persalinan dan Nifas</h5>

							<h5 class="card-title">Nomor RM</h5>
							<input type="text" class="form-control" id="no_rm" name="no_rm" value="<?= esc($persalinannifas['no_rm']) ?>" />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Nama Lengkap Pasien -->
									<h5 class="card-title mt-2">Nama Lengkap Pasien</h5>
									<input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= esc($persalinannifas['nama_pasien']) ?>" />
								</div>
								<div class="col-md-6">
									<!-- Inputan Nama Suami -->
									<h5 class="card-title mt-2">Nama Suami</h5>
									<input type="text" class="form-control" id="nama_suami" name="nama_suami" value="<?= esc($persalinannifas['nama_suami']) ?>" />
								</div>
							</div>
							<h5 class="card-title mt-2">Alamat</h5>
							<textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3"><?= esc($persalinannifas['alamat']) ?></textarea>
							<h5 class="card-title mt-2">Catat Buku KIA</h5>
							<select id="catat_buku_kia" name="catat_buku_kia" class="form-control">
								<option value="Ya" <?= ($persalinannifas['catat_buku_kia'] == 'Ya') ? 'selected' : '' ?>>Ya</option>
								<option value="Tidak" <?= ($persalinannifas['catat_buku_kia'] == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
							</select>
							<h5 class="card-title">Tanggal Jam Bersalin</h5>
							<input type="datetime-local" class="form-control" id="tgl_jam_bersalin" name="tgl_jam_bersalin" value="<?= esc($persalinannifas['tgl_jam_bersalin']) ?>" />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Penolong Persalinan -->
									<h5 class="card-title mt-2">Penolong Persalinan</h5>
									<select id="penolong_persalinan" name="penolong_persalinan" class="form-control">
										<option value="Dokter SPOG" <?= ($persalinannifas['penolong_persalinan'] == 'Dokter SPOG') ? 'selected' : '' ?>>Dokter SPOG</option>
										<option value="Dokter Umum" <?= ($persalinannifas['penolong_persalinan'] == 'Dokter Umum') ? 'selected' : '' ?>>Dokter Umum</option>
										<option value="Bidan" <?= ($persalinannifas['penolong_persalinan'] == 'Bidan') ? 'selected' : '' ?>>Bidan</option>
										<option value="Lain - Lain" <?= ($persalinannifas['penolong_persalinan'] == 'Lain - Lain') ? 'selected' : '' ?>>Lain - Lain</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Metode Persalinan -->
									<h5 class="card-title mt-2">Metode Persalinan</h5>
									<select id="metode_persalinan" name="metode_persalinan" class="form-control">
										<option value="Normal" <?= ($persalinannifas['metode_persalinan'] == 'Normal') ? 'selected' : '' ?>>Normal</option>
										<option value="Sc" <?= ($persalinannifas['metode_persalinan'] == 'Sc') ? 'selected' : '' ?>>Sc</option>
										<option value="Lain - Lain" <?= ($persalinannifas['metode_persalinan'] == 'Lain - Lain') ? 'selected' : '' ?>>Lain - Lain</option>
									</select>
								</div>
							</div>
							<h5 class="card-title">Keadaan Ibu</h5>
							<input type="text" class="form-control" id="keadaan_ibu" name="keadaan_ibu" value="<?= esc($persalinannifas['keadaan_ibu']) ?>" />
							<h5 class="card-title">Status Komplikasi</h5>
							<input type="text" class="form-control" id="status_komplikasi" name="status_komplikasi" value="<?= esc($persalinannifas['status_komplikasi']) ?>" />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Jenis Kelamin Bayi -->
									<h5 class="card-title mt-2">Jenis Kelamin Bayi</h5>
									<select id="jenis_kelamin_bayi" name="jenis_kelamin_bayi" class="form-control">
										<option value="Laki - Laki" <?= ($persalinannifas['jenis_kelamin_bayi'] == 'Laki - Laki') ? 'selected' : '' ?>>Laki - Laki</option>
										<option value="Perempuan" <?= ($persalinannifas['jenis_kelamin_bayi'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Status Bayi -->
									<h5 class="card-title mt-2">Status Bayi</h5>
									<select id="status_bayi" name="status_bayi" class="form-control">
										<option value="Normal" <?= ($persalinannifas['status_bayi'] == 'Normal') ? 'selected' : '' ?>>Normal</option>
										<option value="BB < 37 Minggu" <?= ($persalinannifas['status_bayi'] == 'BB < 37 Minggu') ? 'selected' : '' ?>>BB < 37 Minggu</option>
										<option value="BB < 2500gr" <?= ($persalinannifas['status_bayi'] == 'BB < 2500gr') ? 'selected' : '' ?>>BB < 2500gr</option>
									</select>
								</div>
							</div>
							<h5 class="card-title">Keadaan Bayi Saat Lahir</h5>
							<input type="text" class="form-control" id="keadaan_bayi" name="keadaan_bayi" value="<?= esc($persalinannifas['keadaan_bayi']) ?>" />
							<h5 class="card-title">Status Komplikasi Neonatus</h5>
							<input type="text" class="form-control" id="stts_komplikasi_neonatus" name="stts_komplikasi_neonatus" value="<?= esc($persalinannifas['stts_komplikasi_neonatus']) ?>" />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Kunjungan Nifas -->
									<h5 class="card-title mt-2">Kunjungan Nifas</h5>
									<select id="kunjungan_nifas" name="kunjungan_nifas" class="form-control">
										<option value="KF1" <?= ($persalinannifas['kunjungan_nifas'] == 'KF1') ? 'selected' : '' ?>>KF1</option>
										<option value="KF2" <?= ($persalinannifas['kunjungan_nifas'] == 'KF2') ? 'selected' : '' ?>>KF2</option>
										<option value="KF3" <?= ($persalinannifas['kunjungan_nifas'] == 'KF3') ? 'selected' : '' ?>>KF3</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Vit A Nifas -->
									<h5 class="card-title mt-2">Vit A Nifas</h5>
									<select id="vit_a_nifas" name="vit_a_nifas" class="form-control">
										<option value="Ya" <?= ($persalinannifas['vit_a_nifas'] == 'Ya') ? 'selected' : '' ?>>Ya</option>
										<option value="Tidak" <?= ($persalinannifas['vit_a_nifas'] == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Kunjungan Neonatus -->
									<h5 class="card-title mt-2">Kunjungan Neonatus</h5>
									<select id="kunjungan_neonatus" name="kunjungan_neonatus" class="form-control">
										<option value="KN1" <?= ($persalinannifas['kunjungan_neonatus'] == 'KN1') ? 'selected' : '' ?>>KN1</option>
										<option value="KN2" <?= ($persalinannifas['kunjungan_neonatus'] == 'KN2') ? 'selected' : '' ?>>KN2</option>
										<option value="KN3" <?= ($persalinannifas['kunjungan_neonatus'] == 'KN3') ? 'selected' : '' ?>>KN3</option>
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
<script src="<?= base_url('js/antenatal/update.js') ?>"></script>