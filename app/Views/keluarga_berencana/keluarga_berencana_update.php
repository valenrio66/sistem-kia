<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="broker_view.html">Keluarga Berencana</a> / Tambah Data Keluarga Berencana
		</h5>
		<h1 class="h3 mb-3"><b>Tambah Data Keluarga Berencana</b></h1>
		<div class="row">
			<div class="col-12">
				<form id="updateKeluargaBerencana" action="<?= base_url('keluarga_berencana/update/' . $keluarga_berencana['id_kb']) ?>" method="post">
					<div class="card">
						<div class="card-body">
							<!-- Inputan Data Keluarga Berencana -->
							<h5 class="card-title">Nomor RM</h5>
							<input type="text" class="form-control" id="no_rm" name="no_rm" value="<?= esc($keluarga_berencana['no_rm']) ?>" />
							<div class="row mt-1">
								<div class="col-md-6">
									<h5 class="card-title mt-2">Status Peserta KB</h5>
									<select id="status" name="status" class="form-control">
										<option>Status Peserta KB</option>
										<option value="Peserta KB Aktif" <?= ($keluarga_berencana['status'] == 'Peserta KB Aktif') ? 'selected' : '' ?>>Peserta KB Aktif</option>
										<option value="Peserta KB Baru" <?= ($keluarga_berencana['status'] == 'Peserta KB Baru') ? 'selected' : '' ?>>Peserta KB Baru</option>
									</select>
								</div>
								<div class="col-md-6">
									<h5 class="card-title mt-2">Tanggal Kunjungan</h5>
									<input type="date" class="form-control" id="tgl_kunjungan" name="tgl_kunjungan" value="<?= esc($keluarga_berencana['tgl_kunjungan']) ?>" />
								</div>
							</div>
							<!-- Inputan Catat Buku KIA -->
							<h5 class="card-title mt-2">Catat Buku KIA</h5>
							<select id="catat_buku_kia" name="catat_buku_kia" class="form-control">
								<option>Catat Buku KIA</option>
								<option value="Ya" <?= ($keluarga_berencana['catat_buku_kia'] == 'Ya') ? 'selected' : '' ?>>Ya</option>
								<option value="Tidak" <?= ($keluarga_berencana['catat_buku_kia'] == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
							</select>
							<!-- Inputan Nama Lengkap Pasien -->
							<h5 class="card-title mt-2">Nama Lengkap Pasien</h5>
							<input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= esc($keluarga_berencana['nama_pasien']) ?>" />
							<!-- Inputan Nama Suami -->
							<h5 class="card-title mt-2">Nama Suami</h5>
							<input type="text" class="form-control" id="nama_suami" name="nama_suami" value="<?= esc($keluarga_berencana['nama_suami']) ?>" />
							<!-- Inputan Alamat -->
							<h5 class="card-title mt-2">Alamat</h5>
							<textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3"><?= esc($keluarga_berencana['alamat']) ?></textarea>
							<!-- Inputan Waktu Kematian Maternal -->
							<div class="row mt-1">
								<div class="col-md-6">
									<h5 class="card-title mt-2">Jumlah Anak</h5>
									<input type="text" class="form-control" id="jumlah_anak" name="jumlah_anak" value="<?= esc($keluarga_berencana['jumlah_anak']) ?>" />
								</div>
								<div class="col-md-6">
									<h5 class="card-title mt-2">Metode Kontrasepsi</h5>
									<select id="metode" name="metode" class="form-control">
										<option>Metode Kontrasepsi</option>
										<option value="Kondom" <?= ($keluarga_berencana['metode'] == 'Kondom') ? 'selected' : '' ?>>Kondom</option>
										<option value="Pil" <?= ($keluarga_berencana['metode'] == 'Pil') ? 'selected' : '' ?>>Pil</option>
										<option value="Suntik" <?= ($keluarga_berencana['metode'] == 'Suntik') ? 'selected' : '' ?>>Suntik</option>
										<option value="AKDR" <?= ($keluarga_berencana['metode'] == 'AKDR') ? 'selected' : '' ?>>AKDR</option>
										<option value="Implan" <?= ($keluarga_berencana['metode'] == 'Implan') ? 'selected' : '' ?>>Implan</option>
										<option value="MOW" <?= ($keluarga_berencana['metode'] == 'MOW') ? 'selected' : '' ?>>MOW</option>
										<option value="MOP" <?= ($keluarga_berencana['metode'] == 'MOP') ? 'selected' : '' ?>>MOP</option>
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
<script src="<?= base_url('js/keluarga_berencana/update.js') ?>"></script>