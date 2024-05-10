<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Kematian Neonatal</title>
</head>

<body>
	<h1>Laporan Kematian Neonatal</h1>
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
				<th>Umur</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th>Nama Ibu</th>
				<th>Nama Ayah</th>
				<th>Alamat</th>
				<th>Catat Buku KIA</th>
				<th>Tanggal Jam Kematian</th>
				<th>Penyebab Kematian</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($kematian_bayi as $kb) : ?>
				<tr>
					<td><?= $kb['no_rm'] ?></td>
					<td><?= $kb['nama_pasien'] ?></td>
					<td><?= $kb['umur'] ?></td>
					<td><?= $kb['jenis_kelamin'] ?></td>
					<td><?= $kb['tgl_lahir'] ?></td>
					<td><?= $kb['nama_ibu'] ?></td>
					<td><?= $kb['nama_ayah'] ?></td>
					<td><?= $kb['alamat'] ?></td>
					<td><?= $kb['catat_buku_kia'] ?></td>
					<td><?= $kb['tanggal_jam_kematian'] ?></td>
					<td><?= $kb['penyebab_kematian'] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>

</html>