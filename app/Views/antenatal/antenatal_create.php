<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="broker_view.html">Antenatal</a> / Tambah Data Antenatal
		</h5>
		<h1 class="h3 mb-3"><b>Tambah Data Antenatal</b></h1>
		<div class="row">
			<div class="col-12">
				<form id="postAntenatal" action="<?= base_url('antenatal/create') ?>" method="post">
					<div class="card">
						<div class="card-body">
							<!-- Inputan Data Antenatal -->
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
							<h5 class="card-title">Tanggal Kunjungan</h5>
							<input type="date" class="form-control" id="tgl_kunjungan" name="tgl_kunjungan" required />
							<h5 class="card-title mt-2">Catat Buku KIA</h5>
							<select id="catat_buku_kia" name="catat_buku_kia" class="form-control">
								<option selected>Catat Buku KIA</option>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
							</select>
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Status Kunjungan Hamil -->
									<h5 class="card-title mt-2">Status Kunjungan Hamil</h5>
									<select id="stts_kunjungan_hamil" name="stts_kunjungan_hamil" class="form-control">
										<option selected>Pilih Status</option>
										<option value="Hamil Baru">Hamil Baru</option>
										<option value="Hamil Lama">Hamil Lama</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Status Kunjungan Kehamilan -->
									<h5 class="card-title mt-2">Status Kunjungan Kehamilan</h5>
									<select id="stts_kunjungan_kehamilan" name="stts_kunjungan_kehamilan" class="form-control">
										<option selected>Pilih Status</option>
										<option value="K1">K1</option>
										<option value="K4">K4</option>
									</select>
								</div>
							</div>
							<h5 class="card-title">Pemberian TTD (Tablet Tambah Darah)</h5>
							<select id="pemberian_ttd" name="pemberian_ttd" class="form-control">
								<option selected>Pilih TTD</option>
								<option value="Fe1">Fe1</option>
								<option value="Fe3">Fe3</option>
							</select>
							<h5 class="card-title">Status Ibu Hamil</h5>
							<input type="text" class="form-control" id="stts_ibu_hamil" name="stts_ibu_hamil" placeholder="Masukkan Status Ibu Hamil" required />

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
<script src="<?= base_url('js/antenatal/create.js') ?>"></script>