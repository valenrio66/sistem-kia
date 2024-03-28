<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="#">Keluarga Berencana</a> / Data Keluarga Berencana
		</h5>
		<h1 class="h3 mb-3"><b>Data Keluarga Berencana</b></h1>
		<div class="col-md-6 mb-3">
			<div class="d-flex justify-content-start">
				<a href="<?= base_url('/dashboard/keluarga_berencana/add') ?>" type="button" class="btn btn-info me-2">
					<i class="align-middle" data-feather="plus-circle"></i>
					Tambah Data Keluarga Berencana
				</a>
				<a href="<?= base_url('/dashboard/keluarga_berencana/export') ?>" type="button" class="btn btn-success me-2">
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
							<h1 class="h3 mt-2">Data Keluarga Berencana</h1>
						</div>

						<hr />
						<div class="table-container">
							<table id="example" class="table table-striped" style="width: 100%">
								<thead>
									<tr style="text-align: center; vertical-align: middle">
										<th hidden></th>
										<th>Nomor RM</th>
										<th>Nama Peserta KB</th>
										<th>Nama Suami</th>
										<th>Alamat</th>
										<th>Jumlah Anak</th>
										<th>Status Peserta KB</th>
										<th>Tanggal Kunjungan</th>
										<th>Catat Buku KIA</th>
										<th>Metode Kontrasepsi</th>
										<th>Action</th>
									</tr>
								</thead>
								<!-- Fetch Data Start -->
								<tbody>
									<?php foreach ($keluarga_berencana as $kb) : ?>
										<tr>
											<td hidden></td>
											<td>
												<?= $kb['no_rm'] ?>
											</td>
											<td>
												<?= $kb['nama_pasien'] ?>
											</td>
											<td>
												<?= $kb['nama_suami'] ?>
											</td>
											<td>
												<?= $kb['alamat'] ?>
											</td>
											<td>
												<?= $kb['jumlah_anak'] ?>
											</td>
											<td>
												<?= $kb['status'] ?>
											</td>
											<td>
												<?= $kb['tgl_kunjungan'] ?>
											</td>
											<td>
												<?= $kb['catat_buku_kia'] ?>
											</td>
											<td>
												<?= $kb['metode'] ?>
											</td>
											<td>
												<!-- Tambahkan tombol atau link aksi sesuai kebutuhan -->
												<!-- Contoh: -->
												<a href="<?= base_url('/dashboard/keluarga_berencana/update/' . $kb['id_kb']) ?>" class="btn btn-info">Edit</a>
												<a href="<?= base_url('keluarga_berencana/delete/' . $kb['id_kb']) ?>" onclick="return confirmDelete(event)" class="btn btn-danger">Delete</a>
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
<script src="<?= base_url('js/keluarga_berencana/delete.js') ?>"></script>