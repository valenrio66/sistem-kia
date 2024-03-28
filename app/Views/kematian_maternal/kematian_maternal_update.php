<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="broker_view.html">Kematian Maternal</a> / Tambah Data Kematian Maternal
		</h5>
		<h1 class="h3 mb-3"><b>Tambah Data Kematian Maternal</b></h1>
		<div class="row">
			<div class="col-12">
				<form id="updateKematianMaternal" action="<?= base_url('kematian_maternal/update/' . $kematian_maternals['id_kematian_maternal']) ?>" method="post">
					<div class="card">
						<div class="card-body">
							<!-- Inputan Data Kematian Maternal -->
							<h5 class="card-title">Nomor RM</h5>
							<input type="text" class="form-control" id="no_rm" name="no_rm" value="<?= esc($kematian_maternals['no_rm']) ?>" />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Nama Lengkap Pasien -->
									<h5 class="card-title mt-2">Nama Lengkap Pasien</h5>
									<input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= esc($kematian_maternals['nama_pasien']) ?>" />
								</div>
								<div class="col-md-6">
									<!-- Inputan Nama Suami -->
									<h5 class="card-title mt-2">Nama Suami</h5>
									<input type="text" class="form-control" id="nama_suami" name="nama_suami" value="<?= esc($kematian_maternals['nama_suami']) ?>" />
								</div>
							</div>
                            <!-- Inputan Alamat -->
							<h5 class="card-title mt-2">Alamat</h5>
							<textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3" ><?= esc($kematian_maternals['alamat']) ?></textarea>
							<!-- Inputan Catat Buku KIA -->
                            <h5 class="card-title mt-2">Catat Buku KIA</h5>
							<select id="catat_buku_kia" name="catat_buku_kia" class="form-control">
								<option>Catat Buku KIA</option>
								<option value="Ya" <?= ($kematian_maternals['catat_buku_kia'] == 'Ya') ? 'selected' : '' ?>>Ya</option>
								<option value="Tidak" <?= ($kematian_maternals['catat_buku_kia'] == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
							</select>
                            <!-- Inputan Waktu Kematian Maternal -->
                            <div class="row mt-1">
								<div class="col-md-6">
                                    <h5 class="card-title mt-2">Tanggal Kematian</h5>
                                    <input type="date" class="form-control" id="tanggal_kematian" name="tanggal_kematian" value="<?= esc($kematian_maternals['tanggal_kematian']) ?>" />
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title mt-2">Jam Kematia</h5>
                                    <input type="time" class="form-control" id="jam_kematian" name="jam_kematian" value="<?= esc($kematian_maternals['jam_kematian']) ?>" />
                                </div>
                            </div>
                            <!-- Inputan Penyebab Kematian Maternal -->
                            <h5 class="card-title mt-2">Penyebab Kematian Maternal</h5>
                            <textarea class="form-control" id="penyebab_kematian" name="penyebab_kematian" cols="30" rows="3"><?= esc($kematian_maternals['penyebab_kematian']) ?></textarea>
                            <!-- Inputan Masa Kematian Maternal -->
                            <h5 class="card-title mt-2">Masa Kematian Maternal</h5>
                            <input type="text" class="form-control" id="masa_kematian" name="masa_kematian" value="<?= esc($kematian_maternals['masa_kematian']) ?>" />
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
<script src="<?= base_url('js/kematian_maternal/update.js') ?>"></script>