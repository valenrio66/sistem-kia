<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Kematian Maternal</title>
</head>

<body>
	<h1>Laporan Kematian Maternal</h1>
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
				<th>Catat Buku KIA</th>
				<th>Tanggal Kematian</th>
				<th>Jam Kematian</th>
				<th>Penyebab Kematian</th>
				<th>Masa Kematian</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($kematian_maternals as $km) : ?>
				<tr>
					<td><?= $km['no_rm'] ?></td>
					<td><?= $km['nama_pasien'] ?></td>
					<td><?= $km['nama_suami'] ?></td>
					<td><?= $km['alamat'] ?></td>
					<td><?= $km['catat_buku_kia'] ?></td>
					<td><?= $km['tanggal_kematian'] ?></td>
					<td><?= $km['jam_kematian'] ?></td>
					<td><?= $km['penyebab_kematian'] ?></td>
					<td><?= $km['masa_kematian'] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>

</html>