<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

<main class="content">
	<div class="container-fluid p-0">
		<h5 class="right-aligned" style="float: right">
			<a href="#">Home</a> / <a href="#">Antenatal</a> / Data Antenatal
		</h5>
		<h1 class="h3 mb-3"><b>Data Antenatal</b></h1>
		<div class="col-md-6 mb-3">
			<div class="d-flex justify-content-start">
				<a href="<?= base_url('/dashboard/antenatal/add') ?>" type="button" class="btn btn-info me-2">
					<i class="align-middle" data-feather="plus-circle"></i>
					Tambah Data Antenatal
				</a>
				<a href="<?= base_url('/dashboard/antenatal/export') ?>" type="button" class="btn btn-success me-2">
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
							<h1 class="h3 mt-2">Data Antenatal</h1>
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
										<th>Tanggal Kunjungan</th>
										<th>Status Kunjungan Hamil</th>
										<th>Status Kunjungan Kehamilan</th>
										<th>Pemberian TTD</th>
										<th>Status Ibu Hamil RISTI</th>
										<th>Action</th>
									</tr>
								</thead>

								<!-- Fetch Data Start -->
								<tbody>
									<?php foreach ($antenatals as $ant) : ?>
										<tr>
											<td hidden></td>
											<td>
												<?= $ant['no_rm'] ?>
											</td>
											<td>
												<?= $ant['nama_pasien'] ?>
											</td>
											<td>
												<?= $ant['nama_suami'] ?>
											</td>
											<td>
												<?= $ant['alamat'] ?>
											</td>
											<td>
												<?= $ant['tgl_kunjungan'] ?>
											</td>
											<td>
												<?= $ant['stts_kunjungan_hamil'] ?>
											</td>
											<td>
												<?= $ant['stts_kunjungan_kehamilan'] ?>
											</td>
											<td>
												<?= $ant['pemberian_ttd'] ?>
											</td>
											<td>
												<?= $ant['stts_ibu_hamil'] ?>
											</td>
											<td>
												<!-- Tambahkan tombol atau link aksi sesuai kebutuhan -->
												<!-- Contoh: -->
												<a href="<?= base_url('/dashboard/antenatal/update/' . $ant['id_antenatal']) ?>" class="btn btn-info">Edit</a>
												<a href="<?= base_url('antenatal/delete/' . $ant['id_antenatal']) ?>" onclick="return confirmDelete(event)" class="btn btn-danger">Delete</a>
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
<script src="<?= base_url('js/antenatal/delete.js') ?>"></script>