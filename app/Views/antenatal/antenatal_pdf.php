<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Antenatal</title>
</head>

<body>
	<h1>Laporan Antenatal</h1>
	<table border="1">
		<thead>
			<tr>
				<th>Nomor RM</th>
				<th>Nama Lengkap Pasien</th>
				<th>Nama Suami</th>
				<th>Alamat</th>
				<th>Tanggal Kunjungan</th>
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