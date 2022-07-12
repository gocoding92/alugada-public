-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 10:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alugada`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenisiklan`
--

CREATE TABLE `tbl_jenisiklan` (
  `id` int(11) NOT NULL,
  `jenisiklan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenisiklan`
--

INSERT INTO `tbl_jenisiklan` (`id`, `jenisiklan`) VALUES
(1, 'Cari Kerja'),
(2, 'Info Kost dan Kontrakan'),
(3, 'Property'),
(4, 'Mobil - Motor'),
(5, 'Bangunan Komersial');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id` int(11) NOT NULL,
  `nolayanan` int(11) NOT NULL,
  `layanan` varchar(64) NOT NULL,
  `detaillayanan` varchar(264) NOT NULL,
  `gambar` varchar(128) DEFAULT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id`, `nolayanan`, `layanan`, `detaillayanan`, `gambar`, `url`, `is_active`) VALUES
(1, 100, 'Tenaga Ahli', 'Engineering, Production, Project, Programmer, Finance, Marketing dan sebagainya ', 'ahli.png', 'ahli', 1),
(2, 200, 'Tenaga Terampil', 'Sales Promotion Girl/Boy, Babysitter, Asisten Rumah Tangga, Perawat Lansia, Driver, Office Boy/Girl', 'terampil.png', 'terampil', 1),
(3, 300, 'Kost & Kontrakan', 'Informasi Rumah Kost & Kontrakan', 'kostkontrakan.png', 'kost', 1),
(4, 400, 'Property dijual', 'Rumah, Tanah, Apartemen, Ruko dijual', 'propertyjual.png', 'rumahdijual', 1),
(5, 500, 'Property disewakan', 'Rumah, Tanah, Apartemen, Ruko disewakan', 'propertysewa.png', 'rumahdisewakan', 1),
(6, 600, 'Mobil & Motor dijual', 'Data mobil dijual', 'mobilmotorjual.png', 'mobildijual', 1),
(7, 700, 'Mobil & Motor disewakan', 'Data mobil disewakan', 'mobilmotorsewa.png', 'mobildisewakan', 1),
(10, 800, 'Semua Layanan', 'Semua Layanan', 'semualayanan.png', 'semualayanan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sublayanan`
--

CREATE TABLE `tbl_sublayanan` (
  `id` int(11) NOT NULL,
  `nolayanan` int(11) NOT NULL,
  `nosublayanan` int(11) NOT NULL,
  `sublayanan` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sublayanan`
--

INSERT INTO `tbl_sublayanan` (`id`, `nolayanan`, `nosublayanan`, `sublayanan`, `gambar`, `url`, `is_active`) VALUES
(1, 100, 101, 'Engineering', 'engineering.png', 'engineering', 1),
(5, 100, 102, 'Production', 'production.png', 'production', 0),
(6, 100, 103, 'Construction', 'construction.png', 'construction', 1),
(7, 100, 104, 'Marketing', 'marketing.png', 'marketing', 1),
(8, 100, 105, 'Finance', 'finance.png', 'finance', 1),
(9, 200, 201, 'Driver', 'driver.png', 'driver', 1),
(10, 300, 301, 'Info Rumah Kost', 'kost.png', 'kost', 1),
(11, 400, 401, 'Rumah Dijual', 'rumahdijual.png', 'rumahdijual', 1),
(12, 500, 501, 'Rumah Disewakan', 'rumahdisewakan.png', 'rumahdisewakan', 1),
(13, 200, 202, 'Sales Promotion Girl / Boy', 'spg.png', 'spg', 1),
(14, 200, 203, 'Babysitter', 'babysitter.png', 'babysitter', 1),
(15, 200, 204, 'Perawat Lansia', 'perawatlansia.png', 'perawatlansia', 1),
(16, 200, 205, 'Asisten Rumah Tangga', 'art.png', 'art', 1),
(17, 200, 206, 'Office Boy / Girl', 'ob.png', 'ob', 1),
(18, 300, 302, 'Info Kontrakan', 'kontrakan.png', 'kontrakan', 1),
(19, 500, 502, 'Tanah Disewakan', 'tanahdisewakan.png', 'tanahdisewakan', 1),
(20, 400, 402, 'Apartemen Dijual', 'apartemendijual.png', 'apartemendijual', 1),
(21, 500, 503, 'Apartemen Disewakan', 'apartemendisewakan.png', 'apartemendisewakan', 1),
(22, 400, 403, 'Ruko Dijual', 'rukodijual.png', 'rukodijual', 1),
(23, 500, 504, 'Ruko Disewakan', 'rukodisewakan.png', 'rukodisewakan', 1),
(24, 400, 404, 'Tanah Dijual', 'tanahdijual.png', 'tanahdijual', 1),
(26, 600, 601, 'Mobil Dijual', 'mobildijual.png', 'mobildijual', 1),
(27, 600, 602, 'Motor Dijual', 'motordijual.png', 'motordijual', 1),
(28, 700, 701, 'Mobil Disewakan', 'mobildisewakan.png', 'mobildisewakan', 1),
(29, 700, 702, 'Motor Disewakan', 'motordisewakan.png', 'motordisewakan', 1),
(30, 400, 405, 'Bangunan Komersial Dijual', 'komersialjual_1.png', 'komersialjual', 1),
(31, 500, 505, 'Bangunan Komersial Disewakan', 'komersialsewa_1.png', 'komersialsewa', 1),
(32, 100, 106, 'Computer & Programming', 'programmer_1.png', 'programming', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tgllahir` date DEFAULT NULL,
  `jeniskelamin` varchar(8) DEFAULT NULL,
  `nohp` varchar(32) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(24) NOT NULL,
  `role` int(11) NOT NULL,
  `norek` varchar(64) DEFAULT NULL,
  `gopay` varchar(64) DEFAULT NULL,
  `ovo` varchar(64) DEFAULT NULL,
  `suspend` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `profile` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `tgllahir`, `jeniskelamin`, `nohp`, `email`, `password`, `role`, `norek`, `gopay`, `ovo`, `suspend`, `is_active`, `created_at`, `updated_at`, `keterangan`, `profile`) VALUES
(1, 'Pakde Harto', NULL, NULL, '08111041381', 'suharto.muh@gmail.com', '1234', 1, NULL, NULL, NULL, 0, 1, '2022-06-23 16:24:43', '2022-06-23 16:24:43', NULL, 'pengunjung.png'),
(2, 'Pengunjung', NULL, NULL, '123', NULL, '1234', 10, NULL, NULL, NULL, 0, 1, '2022-06-23 16:27:37', '2022-06-23 16:27:37', NULL, 'pengunjung.png'),
(3, 'Bambang', NULL, NULL, '081310419181', 'bambang@yahoo.com', '1234', 10, NULL, NULL, NULL, 0, 1, '2022-07-11 13:32:08', '2022-07-11 13:32:08', NULL, 'pengunjung.png'),
(4, 'Didik', NULL, NULL, '08131041918101', 'didik@yahoo.com', '1234', 10, NULL, NULL, NULL, 0, 1, '2022-07-11 13:50:22', '2022-07-11 13:50:22', NULL, 'pengunjung.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jenisiklan`
--
ALTER TABLE `tbl_jenisiklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sublayanan`
--
ALTER TABLE `tbl_sublayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jenisiklan`
--
ALTER TABLE `tbl_jenisiklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sublayanan`
--
ALTER TABLE `tbl_sublayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
