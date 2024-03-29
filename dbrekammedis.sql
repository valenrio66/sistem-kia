-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 09:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrekammedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `antenatal`
--

CREATE TABLE `antenatal` (
  `id_antenatal` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `stts_kunjungan_hamil` varchar(30) NOT NULL,
  `stts_kunjungan_kehamilan` varchar(20) NOT NULL,
  `pemberian_ttd` varchar(30) NOT NULL,
  `stts_ibu_hamil` varchar(30) NOT NULL,
  `catat_buku_kia` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antenatal`
--

INSERT INTO `antenatal` (`id_antenatal`, `no_rm`, `nama_pasien`, `nama_suami`, `alamat`, `tgl_kunjungan`, `stts_kunjungan_hamil`, `stts_kunjungan_kehamilan`, `pemberian_ttd`, `stts_ibu_hamil`, `catat_buku_kia`) VALUES
(2, '000001', 'Siti Khodijah', 'Abdullah', 'Sarijadi', '2024-03-24', 'Hamil Lama', 'K1', 'Fe3', 'Hamil', 'Ya'),
(3, '000002', 'Putri Koala', 'Sidiq', 'Sukajadi', '2024-03-24', 'Hamil Baru', 'K1', 'Fe3', 'Testing', 'Tidak'),
(4, '000003', 'Euis Rohmat', 'Eman', 'Sarijadi', '2024-03-26', 'Hamil Baru', 'K1', 'Fe3', 'Testing', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga_berencana`
--

CREATE TABLE `keluarga_berencana` (
  `id_kb` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jumlah_anak` int(3) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `catat_buku_kia` varchar(11) NOT NULL,
  `metode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keluarga_berencana`
--

INSERT INTO `keluarga_berencana` (`id_kb`, `no_rm`, `nama_pasien`, `nama_suami`, `alamat`, `jumlah_anak`, `status`, `tgl_kunjungan`, `catat_buku_kia`, `metode`) VALUES
(2, '000001', 'Euis', 'Abdullah', 'Sarijadi', 2, 'Peserta KB Aktif', '2024-03-29', 'Ya', 'Kondom');

-- --------------------------------------------------------

--
-- Table structure for table `kematian_bayi`
--

CREATE TABLE `kematian_bayi` (
  `id_kematian_bayi` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `catat_buku_kia` varchar(50) NOT NULL,
  `tanggal_jam_kematian` datetime NOT NULL,
  `penyebab_kematian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kematian_bayi`
--

INSERT INTO `kematian_bayi` (`id_kematian_bayi`, `no_rm`, `nama_pasien`, `umur`, `jenis_kelamin`, `tgl_lahir`, `nama_ibu`, `nama_ayah`, `alamat`, `catat_buku_kia`, `tanggal_jam_kematian`, `penyebab_kematian`) VALUES
(1, '1', 'test', 0, 'Ya', '2024-03-29', 'test', 'test', 'test', 'Ya', '2024-03-28 22:52:33', 'testits');

-- --------------------------------------------------------

--
-- Table structure for table `kematian_maternal`
--

CREATE TABLE `kematian_maternal` (
  `id_kematian_maternal` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `catat_buku_kia` varchar(11) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `jam_kematian` time NOT NULL,
  `penyebab_kematian` varchar(255) NOT NULL,
  `masa_kematian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kematian_maternal`
--

INSERT INTO `kematian_maternal` (`id_kematian_maternal`, `no_rm`, `nama_pasien`, `nama_suami`, `alamat`, `catat_buku_kia`, `tanggal_kematian`, `jam_kematian`, `penyebab_kematian`, `masa_kematian`) VALUES
(3, '000002', 'Putri Koala', 'Abdullah', 'Sarijadi', 'Ya', '2024-03-29', '02:30:00', 'Kelaparan', '10 Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `persalinan_nifas`
--

CREATE TABLE `persalinan_nifas` (
  `id_persalinan_nifas` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `catat_buku_kia` varchar(11) NOT NULL,
  `tgl_jam_bersalin` datetime NOT NULL,
  `penolong_persalinan` varchar(20) NOT NULL,
  `metode_persalinan` varchar(20) NOT NULL,
  `keadaan_ibu` varchar(20) NOT NULL,
  `status_komplikasi` varchar(20) NOT NULL,
  `jenis_kelamin_bayi` varchar(20) NOT NULL,
  `status_bayi` varchar(20) NOT NULL,
  `keadaan_bayi` varchar(20) NOT NULL,
  `stts_komplikasi_neonatus` varchar(20) NOT NULL,
  `kunjungan_nifas` varchar(11) NOT NULL,
  `vit_a_nifas` varchar(11) NOT NULL,
  `kunjungan_neonatus` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persalinan_nifas`
--

INSERT INTO `persalinan_nifas` (`id_persalinan_nifas`, `no_rm`, `nama_pasien`, `nama_suami`, `alamat`, `catat_buku_kia`, `tgl_jam_bersalin`, `penolong_persalinan`, `metode_persalinan`, `keadaan_ibu`, `status_komplikasi`, `jenis_kelamin_bayi`, `status_bayi`, `keadaan_bayi`, `stts_komplikasi_neonatus`, `kunjungan_nifas`, `vit_a_nifas`, `kunjungan_neonatus`) VALUES
(1, '000001', 'Siti', 'Rohman', 'Sarijadi', 'Ya', '2024-03-26 23:15:10', 'Dokter SPOG', 'Normal', 'Normal', 'Normal', 'Laki - Laki', 'Normal', 'Normal', 'Normal', 'KF1', 'Ya', 'KN1');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'Pasien'),
(3, 'Staff Pendaftaran'),
(4, 'Unit Medis'),
(5, 'Staff Instalasi RM'),
(6, 'Kepala Instalasi RM'),
(7, 'Karumit'),
(8, 'Dinkes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `no_hp` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_role`, `nama_user`, `username`, `password`, `tgl_lahir`, `alamat`, `nik`, `no_hp`, `email`) VALUES
(1, 1, 'Valen Rionald', 'admin', '$2y$10$a76t9jE8XVWng6PzFg//zOOWnQOXR8pQZltUnS5ca8Cvj5XxZn/8S', '2002-08-06', 'Jalan Mandor Aleh No. 225 RT.04/RW.04 Kel. Sepanjang Jaya', '123456789123456789', '628941248787', 'vrionald@gmail.com'),
(2, 1, 'Bachtiar Ramadhan', 'admin2', '$2y$10$PVXIldFP2k8FHYtOnMCTouukZWnRrBHn/AqfD98YFDNVGYtz5MXe2', '2000-12-21', 'Bandung, Jawa Barat', '3208072102000006', '6282513921331', 'bachtiarramadhan26@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antenatal`
--
ALTER TABLE `antenatal`
  ADD PRIMARY KEY (`id_antenatal`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `keluarga_berencana`
--
ALTER TABLE `keluarga_berencana`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indexes for table `kematian_bayi`
--
ALTER TABLE `kematian_bayi`
  ADD PRIMARY KEY (`id_kematian_bayi`);

--
-- Indexes for table `kematian_maternal`
--
ALTER TABLE `kematian_maternal`
  ADD PRIMARY KEY (`id_kematian_maternal`);

--
-- Indexes for table `persalinan_nifas`
--
ALTER TABLE `persalinan_nifas`
  ADD PRIMARY KEY (`id_persalinan_nifas`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antenatal`
--
ALTER TABLE `antenatal`
  MODIFY `id_antenatal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluarga_berencana`
--
ALTER TABLE `keluarga_berencana`
  MODIFY `id_kb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kematian_bayi`
--
ALTER TABLE `kematian_bayi`
  MODIFY `id_kematian_bayi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kematian_maternal`
--
ALTER TABLE `kematian_maternal`
  MODIFY `id_kematian_maternal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `persalinan_nifas`
--
ALTER TABLE `persalinan_nifas`
  MODIFY `id_persalinan_nifas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
