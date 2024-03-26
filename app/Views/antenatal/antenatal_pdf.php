<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Antenatal</title>
</head>

<body>
	<h1>Laporan Antenatal</h1>
	<?php
	// Mendapatkan nama bulan dalam bahasa Indonesia
	$bulanIndonesia = [
		1 => 'Januari', 2 => 'Februari', 3 => 'Maret',
		4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli',
		8 => 'Agustus', 9 => 'September', 10 => 'Oktober',
		11 => 'November', 12 => 'Desember'
	];

	// Menentukan nama bulan berdasarkan angka bulan saat ini
	$bulanSekarang = date('n');
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
				<th>Tanggal Kunjungan</th>
				<th>Catat Buku KIA</th>
				<th>Status Kunjungan Hamil</th>
				<th>Status Kunjungan Kehamilan</th>
				<th>Pemberian TTD</th>
				<th>Status Ibu Hamil RISTI</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($antenatals as $ant) : ?>
				<tr>
					<td><?= $ant['no_rm'] ?></td>
					<td><?= $ant['nama_pasien'] ?></td>
					<td><?= $ant['nama_suami'] ?></td>
					<td><?= $ant['alamat'] ?></td>
					<td><?= $ant['tgl_kunjungan'] ?></td>
					<td><?= $ant['catat_buku_kia'] ?></td>
					<td><?= $ant['stts_kunjungan_hamil'] ?></td>
					<td><?= $ant['stts_kunjungan_kehamilan'] ?></td>
					<td><?= $ant['pemberian_ttd'] ?></td>
					<td><?= $ant['stts_ibu_hamil'] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>Jumlah: <?= $totalData ?></p>
	<p>Hamil Baru: <?= $jumlahHamilBaru ?>, Hamil Lama: <?= $jumlahHamilLama ?></p>
</body>

</html>