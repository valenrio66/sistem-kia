<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Persalinan dan Nifas</title>
</head>

<body>
	<h1>Laporan Persalinan dan Nifas</h1>
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
				<th>Tanggal Jam Bersalin</th>
				<th>Penolong Persalinan</th>
				<th>Metode Persalinan</th>
				<th>Jenis Kelamin Bayi</th>
				<th>Kunjungan Nifas</th>
				<th>Kunjungan Neonatus</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($persalinannifas as $pn) : ?>
				<tr>
					<td><?= $pn['no_rm'] ?></td>
					<td><?= $pn['nama_pasien'] ?></td>
					<td><?= $pn['nama_suami'] ?></td>
					<td><?= $pn['alamat'] ?></td>
					<td><?= $pn['catat_buku_kia'] ?></td>
					<td><?= $pn['tgl_jam_bersalin'] ?></td>
					<td><?= $pn['penolong_persalinan'] ?></td>
					<td><?= $pn['metode_persalinan'] ?></td>
					<td><?= $pn['jenis_kelamin_bayi'] ?></td>
					<td><?= $pn['kunjungan_nifas'] ?></td>
					<td><?= $pn['kunjungan_neonatus'] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>Jumlah: <?= $totalData ?></p>
	<p>Normal: <?= $jumlahNormal ?>, Sc: <?= $jumlahSc ?>, Lain - Lain: <?= $jumlahLainLain ?></p>
</body>

</html>