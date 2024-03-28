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
				<form id="postKeluargaBerencana" action="<?= base_url('keluarga_berencana/create') ?>" method="post">
					<div class="card">
						<div class="card-body">
							<!-- Inputan Data Keluarga Berencana -->
							<h5 class="card-title">Nomor RM</h5>
							<input type="text" class="form-control" id="no_rm" name="no_rm" placeholder="Masukkan Nomor RM" required />
							<div class="row mt-1">
								<div class="col-md-6">
									<!-- Inputan Status Peserta KB -->
									<h5 class="card-title mt-2">Status Peserta KB</h5>
									<select id="status" name="status" class="form-control">
										<option selected>Status Peserta KB</option>
										<option value="Peserta KB Aktif">Peserta KB Aktif</option>
										<option value="Peserta KB Baru">Peserta KB Baru</option>
									</select>
								</div>
								<div class="col-md-6">
									<!-- Inputan Tanggal Kunjungan -->
									<h5 class="card-title mt-2">Tanggal Kunjungan</h5>
									<input type="date" class="form-control" id="tgl_kunjungan" name="tgl_kunjungan" required />
								</div>
							</div>
							<!-- Inputan Catat Buku KIA -->
							<h5 class="card-title mt-2">Catat Buku KIA</h5>
							<select id="catat_buku_kia" name="catat_buku_kia" class="form-control">
								<option selected>Catat Buku KIA</option>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
							</select>
							<h5 class="card-title">Nama Peserta KB</h5>
							<input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan Nama Peserta KB" required />
							<h5 class="card-title">Nama Suami</h5>
							<input type="text" class="form-control" id="nama_suami" name="nama_suami" placeholder="Masukkan Nama Suami" required />
							<!-- Inputan Alamat -->
							<h5 class="card-title mt-2">Alamat</h5>
							<textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3" placeholder="Masukkan Alamat"></textarea>
							<!-- Inputan Waktu Kematian Maternal -->
							<div class="row mt-1">
								<div class="col-md-6">
									<h5 class="card-title mt-2">Jumlah Anak</h5>
									<input type="text" class="form-control" id="jumlah_anak" name="jumlah_anak" placeholder="Masukkan Jumlah Anak" required />
								</div>
								<div class="col-md-6">
									<h5 class="card-title mt-2">Metode Kontrasepsi</h5>
									<select id="metode" name="metode" class="form-control">
										<option selected>Metode Kontrasepsi</option>
										<option value="Kondom">Kondom</option>
										<option value="Pil">Pil</option>
										<option value="Suntik">Suntik</option>
										<option value="AKDR">AKDR</option>
										<option value="Implan">Implan</option>
										<option value="MOW">MOW</option>
										<option value="MOP">MOP</option>
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
<script src="<?= base_url('js/keluarga_berencana/create.js') ?>"></script>