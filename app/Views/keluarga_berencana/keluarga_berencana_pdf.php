<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Keluarga Berencana</title>
</head>

<body>
	<h1>Laporan Keluarga Berencana</h1>
	<?php
	// Mendapatkan nama bulan dalam bahasa Indonesia
	$bulanIndonesia = [
		1 => 'Januari', 2 => 'Februari', 3 => 'Maret',
		4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli',
		8 => 'Agustus', 9 => 'September', 10 => 'Oktober',
		11 => 'November', 12 => 'Desember'
	];

	// Menentukan nama bulan berdasarkan angka bulan saat ini
	// $bulanSekarang = date('n');
	$bulanSekarang = 2;
	$namaBulan = $bulanIndonesia[$bulanSekarang];

	// Menentukan tahun saat ini
	$tahun = date('Y');
	?>
	<p>Bulan: <?= $namaBulan ?>, Tahun: <?= $tahun ?></p>
	<table border="1">
		<thead>
			<tr>
				<th>Nomor RM</th>
				<th>Nama Lengkap Pasien</th>
				<th>Nama Suami</th>
				<th>Alamat</th>
				<th>Jumlah Anak</th>
				<th>Status</th>
				<th>Tanggal Kunjungan</th>
				<th>Catat Buku KIA</th>
				<th>Metode Kontrasepsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($keluarga_berencana as $kb) : ?>
				<tr>
					<td><?= $kb['no_rm'] ?></td>
					<td><?= $kb['nama_pasien'] ?></td>
					<td><?= $kb['nama_suami'] ?></td>
					<td><?= $kb['alamat'] ?></td>
					<td><?= $kb['jumlah_anak'] ?></td>
					<td><?= $kb['status'] ?></td>
					<td><?= $kb['tgl_kunjungan'] ?></td>
					<td><?= $kb['catat_buku_kia'] ?></td>
					<td><?= $kb['metode'] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>

</html>