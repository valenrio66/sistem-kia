<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="#">Persalinan dan Nifas</a> / Data Persalinan dan Nifas
		</h5>
		<h1 class="h3 mb-3"><b>Data Persalinan dan Nifas</b></h1>
		<div class="col-md-6 mb-3">
			<div class="d-flex justify-content-start">
				<a href="<?= base_url('/dashboard/persalinannifas/add') ?>" type="button" class="btn btn-info me-2">
					<i class="align-middle" data-feather="plus-circle"></i>
					Tambah Data Persalinan dan Nifas
				</a>
				<a href="<?= base_url('/dashboard/persalinannifas/export') ?>" type="button" class="btn btn-success me-2">
					<i class="align-middle" data-feather="file-text"></i>
					Generate Laporan
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<div class="row no-gutters" style="height: 40px">
							<h1 class="h3 mt-2">Data Persalinan dan Nifas</h1>
						</div>

						<hr />
						<div class="table-container">
							<table id="example" class="table table-striped" style="width: 100%">
								<thead>
									<tr style="text-align: center; vertical-align: middle">
										<th hidden></th>
										<th>Nomor RM</th>
										<th>Nama Lengkap Pasien</th>
										<th>Nama Suami</th>
										<th>Alamat</th>
										<th>Catat Buku KIA</th>
										<th>Tanggal Jam Bersalin</th>
										<th>Penolong Persalinan</th>
										<th>Metode Persalinan</th>
										<th>Keadaan Ibu</th>
										<th>Status Komplikasi</th>
										<th>Jenis Kelamin Bayi</th>
										<th>Status Bayi</th>
										<th>Keadaan Bayi Saat Lahir</th>
										<th>Status Komplikasi Neonatus</th>
										<th>Kunjungan Nifas</th>
										<th>Vit A Nifas</th>
										<th>Kunjungan Neonatus</th>
										<th>Action</th>
									</tr>
								</thead>

								<!-- Fetch Data Start -->
								<tbody>
									<?php foreach ($persalinannifas as $pn) : ?>
										<tr>
											<td hidden></td>
											<td>
												<?= $pn['no_rm'] ?>
											</td>
											<td>
												<?= $pn['nama_pasien'] ?>
											</td>
											<td>
												<?= $pn['nama_suami'] ?>
											</td>
											<td>
												<?= $pn['alamat'] ?>
											</td>
											<td>
												<?= $pn['catat_buku_kia'] ?>
											</td>
											<td>
												<?= $pn['tgl_jam_bersalin'] ?>
											</td>
											<td>
												<?= $pn['penolong_persalinan'] ?>
											</td>
											<td>
												<?= $pn['metode_persalinan'] ?>
											</td>
											<td>
												<?= $pn['keadaan_ibu'] ?>
											</td>
											<td>
												<?= $pn['status_komplikasi'] ?>
											</td>
											<td>
												<?= $pn['jenis_kelamin_bayi'] ?>
											</td>
											<td>
												<?= $pn['status_bayi'] ?>
											</td>
											<td>
												<?= $pn['keadaan_bayi'] ?>
											</td>
											<td>
												<?= $pn['stts_komplikasi_neonatus'] ?>
											</td>
											<td>
												<?= $pn['kunjungan_nifas'] ?>
											</td>
											<td>
												<?= $pn['vit_a_nifas'] ?>
											</td>
											<td>
												<?= $pn['kunjungan_neonatus'] ?>
											</td>
											<td>
												<!-- Tambahkan tombol atau link aksi sesuai kebutuhan -->
												<!-- Contoh: -->
												<a href="<?= base_url('/dashboard/persalinannifas/update/' . $pn['id_persalinan_nifas']) ?>" class="btn btn-info">Edit</a>
												<a href="<?= base_url('persalinannifas/delete/' . $pn['id_persalinan_nifas']) ?>" onclick="return confirmDelete(event)" class="btn btn-danger">Delete</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<!-- Fetch Data End -->

							</table>
						</div>
						<div class="row mt-3">
							<div class="col-md-6">
								<div class="pagination">
									<button id="prevPageBtn" class="btn btn-primary">
										Previous
									</button>
									<span id="currentPage" class="mx-2">Halaman 1</span>
									<button id="nextPageBtn" class="btn btn-primary">
										Next
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?= $this->include('content/footer') ?>
<script src="<?= base_url('js/persalinannifas/delete.js') ?>"></script>