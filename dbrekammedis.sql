-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 05:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
  `stts_ibu_hamil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antenatal`
--

INSERT INTO `antenatal` (`id_antenatal`, `no_rm`, `nama_pasien`, `nama_suami`, `alamat`, `tgl_kunjungan`, `stts_kunjungan_hamil`, `stts_kunjungan_kehamilan`, `pemberian_ttd`, `stts_ibu_hamil`) VALUES
(2, '000001', 'Siti Khodijah', 'Abdullah', 'Sarijadi', '2024-03-24', 'Hamil Lama', 'K1', 'Fe3', 'Hamil'),
(3, '000002', 'Putri Koala', 'Sidiq', 'Sukajadi', '2024-03-24', 'Hamil Baru', 'K1', 'Fe3', 'Testing');

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
(2, 1, 'Bachtiar Ramadhan', 'admin2', '$2y$10$PVXIldFP2k8FHYtOnMCTouukZWnRrBHn/AqfD98YFDNVGYtz5MXe2', NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id_antenatal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT;

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
