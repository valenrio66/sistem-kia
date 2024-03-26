<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="broker_view.html">Antenatal</a> / Update Antenatal
		</h5>
		<h1 class="h3 mb-3"><b>Update Antenatal</b></h1>
		<div class="row">
			<div class="col-12">
				<form id="updateAntenatal" action="<?= base_url('antenatal/update/' . $antenatals['id_antenatal']) ?>" method="post">
					<div class="card">
						<div class="card-body">
							<!-- Inputan Data Antenatal -->
							<h5 class="card-title">Data Antenatal</h5>

							<h5 class="card-title">Nomor RM</h5>
							<input type="text" class="form-control" id="no_rm" name="no_rm" value="<?= esc($antenatals['no_rm']) ?>" />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Nama Lengkap Pasien -->
									<h5 class="card-title mt-2">Nama Lengkap Pasien</h5>
									<input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= esc($antenatals['nama_pasien']) ?>" />
								</div>
								<div class="col-md-6">
									<!-- Inputan Nama Suami -->
									<h5 class="card-title mt-2">Nama Suami</h5>
									<input type="text" class="form-control" id="nama_suami" name="nama_suami" value="<?= esc($antenatals['nama_suami']) ?>" />
								</div>
							</div>
							<h5 class="card-title mt-2">Alamat</h5>
							<textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3"><?= esc($antenatals['alamat']) ?></textarea>
							<h5 class="card-title">Tanggal Kunjungan</h5>
							<input type="date" class="form-control" id="tgl_kunjungan" name="tgl_kunjungan" value="<?= esc($antenatals['tgl_kunjungan']) ?>" />
							<h5 class="card-title mt-2">Catat Buku KIA</h5>
							<select id="catat_buku_kia" name="catat_buku_kia" class="form-control">
								<option value="Ya" <?= ($antenatals['catat_buku_kia'] == 'Ya') ? 'selected' : '' ?>>Ya</option>
								<option value="Tidak" <?= ($antenatals['catat_buku_kia'] == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
							</select>
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Status Kunjungan Hamil -->
									<h5 class="card-title mt-2">Status Kunjungan Hamil</h5>
									<select id="stts_kunjungan_hamil" name="stts_kunjungan_hamil" class="form-control">
										<option value="Hamil Baru" <?= ($antenatals['stts_kunjungan_hamil'] == 'Hamil Baru') ? 'selected' : '' ?>>Hamil Baru</option>
										<option value="Hamil Lama" <?= ($antenatals['stts_kunjungan_hamil'] == 'Hamil Lama') ? 'selected' : '' ?>>Hamil Lama</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Status Kunjungan Kehamilan -->
									<h5 class="card-title mt-2">Status Kunjungan Kehamilan</h5>
									<select id="stts_kunjungan_kehamilan" name="stts_kunjungan_kehamilan" class="form-control">
										<option value="K1" <?= ($antenatals['stts_kunjungan_kehamilan'] == 'K1') ? 'selected' : '' ?>>K1</option>
										<option value="K4" <?= ($antenatals['stts_kunjungan_kehamilan'] == 'K4') ? 'selected' : '' ?>>K4</option>
									</select>
								</div>
							</div>
							<h5 class="card-title">Pemberian TTD (Tablet Tambah Darah)</h5>
							<select id="pemberian_ttd" name="pemberian_ttd" class="form-control">
								<option value="Fe1" <?= ($antenatals['pemberian_ttd'] == 'Fe1') ? 'selected' : '' ?>>Fe1</option>
								<option value="Fe3" <?= ($antenatals['pemberian_ttd'] == 'Fe3') ? 'selected' : '' ?>>Fe3</option>
							</select>
							<h5 class="card-title">Status Ibu Hamil</h5>
							<input type="text" class="form-control" id="stts_ibu_hamil" name="stts_ibu_hamil" value="<?= esc($antenatals['stts_ibu_hamil']) ?>" />

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