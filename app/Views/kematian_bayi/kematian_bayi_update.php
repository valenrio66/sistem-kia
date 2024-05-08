<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="#">Kematian Maternal</a> / Tambah Data Kematian Maternal
		</h5>
		<h1 class="h3 mb-3"><b>Tambah Data Kematian Maternal</b></h1>
		<div class="row">
			<div class="col-12">
				<form id="updateKematianBayi" action="<?= base_url('kematian_bayi/update/' . $kematian_bayi['id_kematian_bayi']) ?>" method="post">
					<div class="card">
						<div class="card-body">
							<!-- Inputan Data Kematian Maternal -->
							<h5 class="card-title">Nomor RM</h5>
							<input type="text" class="form-control" id="no_rm" name="no_rm" value="<?= esc($kematian_bayi['no_rm']) ?>" required />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Nama Lengkap Pasien -->
									<h5 class="card-title mt-2">Nama Lengkap Pasien</h5>
									<input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= esc($kematian_bayi['nama_pasien']) ?>" required />
								</div>
								<div class="col-md-6">
									<!-- Inputan Umur -->
									<h5 class="card-title mt-2">Umur</h5>
									<select id="umur" name="umur" class="form-control">
                                        <option value="Neonatal" <?= ($kematian_bayi['umur'] == 'Neonatal') ? 'selected' : '' ?>>Neonatal (0-7 Hari)</option>
								        <option value="Neonatal Lanjut" <?= ($kematian_bayi['umur'] == 'Neonatal Lanjut') ? 'selected' : '' ?>>Neonatal Lanjut (8-28 Hari)</option>
                                        <option value="Bayi" <?= ($kematian_bayi['umur'] == 'Bayi') ? 'selected' : '' ?>>Bayi (29 Hari - 11 Bulan)</option>
                                        <option value="Balita" <?= ($kematian_bayi['umur'] == 'Balita') ? 'selected' : '' ?>>Balita (12 Bulan - 59 Bulan)</option>
                                    </select>
								</div>
							</div>
                            <div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Nama Ayah -->
									<h5 class="card-title mt-2">Nama Ayah</h5>
									<input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= esc($kematian_bayi['nama_ayah']) ?>" required />
								</div>
								<div class="col-md-6">
									<!-- Inputan Nama Ibu -->
									<h5 class="card-title mt-2">Nama Ibu</h5>
									<input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= esc($kematian_bayi['nama_ibu']) ?>" required />
								</div>
							</div>
                            <!-- Inputan Alamat -->
							<h5 class="card-title mt-2">Alamat</h5>
							<textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3"><?= esc($kematian_bayi['alamat']) ?></textarea>
                            <!-- Inputan Jenis Kelamin -->
                            <h5 class="card-title mt-2">Jenis Kelamin</h5>
							<select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                <option value="Ya" <?= ($kematian_bayi['jenis_kelamin'] == 'Laki-Laki') ? 'selected' : '' ?>>Laki-Laki</option>
								<option value="Tidak" <?= ($kematian_bayi['jenis_kelamin'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
							</select>
							<!-- Inputan Catat Buku KIA -->
                            <h5 class="card-title mt-2">Catat Buku KIA</h5>
							<select id="catat_buku_kia" name="catat_buku_kia" class="form-control">
								<option value="Ya" <?= ($kematian_bayi['catat_buku_kia'] == 'Ya') ? 'selected' : '' ?>>Ya</option>
								<option value="Tidak" <?= ($kematian_bayi['catat_buku_kia'] == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
							</select>
                            <div class="row mt-1">
                                <!-- Inputan Tanggal Lahir -->
								<div class="col-md-6">
                                    <h5 class="card-title mt-2">Tanggal Lahir</h5>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= esc($kematian_bayi['tgl_lahir']) ?>" required />
                                </div>
                                <!-- Inputan Tanggal Jam Kematian -->
                                <div class="col-md-6">
                                    <h5 class="card-title mt-2">Tanggal Jam Kematian</h5>
                                    <input type="datetime-local" class="form-control" id="tanggal_jam_kematian" name="tanggal_jam_kematian" value="<?= esc($kematian_bayi['tanggal_jam_kematian']) ?>" required />
                                </div>
                            </div>
                            <!-- Inputan Penyebab Kematian Bayi -->
                            <h5 class="card-title mt-2">Penyebab Kematian Bayi</h5>
                            <textarea class="form-control" id="penyebab_kematian" name="penyebab_kematian" cols="30" rows="3"><?= esc($kematian_bayi['penyebab_kematian']) ?></textarea>
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
<script src="<?= base_url('js/kematian_bayi/update.js') ?>"></script>