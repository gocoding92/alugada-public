-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2022 at 07:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

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
-- Table structure for table `tbl_apartemen`
--

CREATE TABLE `tbl_apartemen` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(11) NOT NULL,
  `nosublayanan` int(11) NOT NULL,
  `juduliklan` varchar(512) NOT NULL,
  `luas` int(11) NOT NULL,
  `kepemilikan` varchar(128) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `kamarmandi` int(11) NOT NULL,
  `listrik` int(11) NOT NULL,
  `alamatlokasi` varchar(256) NOT NULL,
  `kecamatan` varchar(64) NOT NULL,
  `kabupaten` varchar(64) NOT NULL,
  `propinsi` varchar(64) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `suspend` int(11) NOT NULL,
  `checked` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apartemen`
--

INSERT INTO `tbl_apartemen` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `juduliklan`, `luas`, `kepemilikan`, `bedroom`, `kamarmandi`, `listrik`, `alamatlokasi`, `kecamatan`, `kabupaten`, `propinsi`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `path_folder`, `deskripsi`, `harga`, `is_active`, `suspend`, `checked`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 403, 'Apartemen Tekuk Intan', 4000, 'SHM Strata tittle', 20, 10, 2000, 'Tangerang', 'Tajurhalang', 'Kertajati', 'jawa barat', '[\"1663814312_48d9391d15b92dd48581.jpg\",\"1663814312_74ea0551247a827074c2.jpg\"]', '', '', '', '', '', '', 'Dijual secepatnya', 30000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, 400, 403, '', 0, '', 0, 0, 0, '', '', '', '', 'Screenshot (39).png', 'latihan7_8.png', 'latihan7_7.png', 'latihan7_6.png', 'latihan7_5.png', 'latihan7_4.png', '', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, 400, 403, '', 0, '', 0, 0, 0, '', '', '', '', 'Screenshot (39).png', 'latihan7_8.png', 'latihan7_7.png', 'latihan7_6.png', 'latihan7_5.png', 'latihan7_4.png', '', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 28, 400, 403, '', 0, '', 0, 0, 0, '', '', '', '', '2022-08-05 10.41.18.jpg', '', '', '', '', '', 'apartemen', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 28, 400, 403, 'Apartemen Murah Meriah', 30, 'HGB', 30, 20, 10, 'Kebun Jeruk', 'Sasak Panjang', 'Bogor', 'DKI Jakarta', '0224-org-asing-punya-apartemen-s-20210224072141.jpeg', '', '', '', '', '', 'apartemen', 'Apartemen murah, kamar 2 dan halaman luas', 4000000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bangunankomersial`
--

CREATE TABLE `tbl_bangunankomersial` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(5) NOT NULL,
  `nosublayanan` int(5) NOT NULL,
  `jualsewa` int(2) NOT NULL,
  `juduliklan` varchar(512) NOT NULL,
  `luastanah` int(9) NOT NULL,
  `luasbangunan` int(6) NOT NULL,
  `kepemilikan` varchar(16) NOT NULL,
  `jumlahlantai` int(3) NOT NULL,
  `listrik` int(6) NOT NULL,
  `carport` int(2) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `kecamatan` varchar(32) NOT NULL,
  `kabupaten` varchar(32) NOT NULL,
  `propinsi` varchar(32) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `suspend` int(11) NOT NULL,
  `checked1` datetime NOT NULL,
  `checked2` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bangunankomersial`
--

INSERT INTO `tbl_bangunankomersial` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jualsewa`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `path_folder`, `deskripsi`, `harga`, `is_active`, `suspend`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 405, 0, 'Bangunan Komersial Di Kawasan Mandiri', 300, 200, 'SHM Strata tittl', 2000, 200, 3000, 'Bogor', 'Majalengka', 'Bogor', 'jawa barat', '[\"1663814759_3efc5b5605e21e11cbae.jpg\",\"1663814759_e86b3f838c5189442d7f.jpg\"]', '', '', '', '', '', '', 'Disewakan', 2147483647, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, 400, 405, 0, '', 0, 0, '', 0, 0, 0, '', '', '', '', 'latihan7_1.png', 'latihan7_2.png', 'latihan7_3.png', 'latihan7_4.png', 'latihan7_5.png', 'latihan7_6.png', '', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 28, 400, 405, 0, '', 0, 0, '', 0, 0, 0, '', '', '', '', '2022-08-05 10.41.18.jpg', '', '', '', '', '', 'bangunan_komersial', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 28, 400, 405, 0, 'Bangunan Kokoh 3 Lantai', 200, 222, 'HGB', 20, 20, 30, 'Jakarta Barat', 'Sasak Panjang', 'Tajurhalang', 'DKI Jakarta', '0224-org-asing-punya-apartemen-s-20210224072141.jpeg', '', '', '', '', '', 'bangunan_komersial', 'Bangunan Kokoh tempat strategis', 300000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenisiklan`
--

CREATE TABLE `tbl_jenisiklan` (
  `id` int(11) NOT NULL,
  `jenisiklan` varchar(64) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenisiklan`
--

INSERT INTO `tbl_jenisiklan` (`id`, `jenisiklan`, `is_active`) VALUES
(1, 'Cari Kerja', 1),
(2, 'Info Kost & Kontrakan', 1),
(3, 'Property', 1),
(4, 'Mobil & Motor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak_kami`
--

CREATE TABLE `tbl_kontak_kami` (
  `id_kontak_kami` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pesan` text NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kontak_kami`
--

INSERT INTO `tbl_kontak_kami` (`id_kontak_kami`, `nama`, `telepon`, `email`, `alamat`, `pesan`, `created_time`) VALUES
(1, 'Abdul Rahman', '085809052137', 'amangokil@gmail.com', 'Komplek Inkopad Blok O5 No 17', 'Apakah Bisa bekerja sama?', '2022-09-22 05:38:19'),
(2, 'Abdul Rahman', '085809052137', 'amangokil@gmail.com', 'Komplek Inkopad Blok O5 No 17', 'Apakah Bisa bekerja sama?', '2022-09-22 05:38:46'),
(3, '1', '1', '1', '1', '1', '2022-10-12 13:26:00'),
(4, '', '', '', 'komplek inkopad', '', '2022-11-03 20:40:10'),
(5, '', '', '', '', 'saya tidak mau barang saya pecah\r\n', '2022-11-03 20:41:10'),
(6, '', '', '', '', 'ajasb', '2022-11-03 20:42:48'),
(7, 'pajau', '08767', 'aman@gmail.com', 'alamat', 'pesan', '2022-11-03 20:56:04'),
(8, 'Abdul Rahman edit', '085809052137', 'abdulrahman251201@gmail.com', 'alamat', 'pesan', '2022-11-04 13:57:21'),
(9, 'aman', '23', 'abdulrahman251201@gmail.com', 'sa', 'sad', '2022-11-04 14:33:16'),
(10, 'aman', '23', 'abdulrahman251201@gmail.com', 'sa', 'sad', '2022-11-04 14:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kostkontrakan`
--

CREATE TABLE `tbl_kostkontrakan` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(5) NOT NULL,
  `nosublayanan` int(5) NOT NULL,
  `judul_iklan` varchar(255) NOT NULL,
  `jumlah_kamar` varchar(255) NOT NULL,
  `kamar_kosong` varchar(255) NOT NULL,
  `listrik` varchar(255) NOT NULL,
  `kamar_mandi` varchar(255) NOT NULL,
  `ac` varchar(255) NOT NULL,
  `water_heater` varchar(255) NOT NULL,
  `tempat_tidur` varchar(255) NOT NULL,
  `meja_kursi` varchar(255) NOT NULL,
  `almari` varchar(255) NOT NULL,
  `alamat_lokasi` text NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `perbulan` varchar(255) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL,
  `suspend` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kostkontrakan`
--

INSERT INTO `tbl_kostkontrakan` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `judul_iklan`, `jumlah_kamar`, `kamar_kosong`, `listrik`, `kamar_mandi`, `ac`, `water_heater`, `tempat_tidur`, `meja_kursi`, `almari`, `alamat_lokasi`, `kecamatan`, `kabupaten`, `provinsi`, `harga`, `perbulan`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `path_folder`, `is_active`, `suspend`, `created_time`) VALUES
(1, 0, 300, 301, 'Kost Dekat Mall Stadion', '2', '2', 'Token tiap kamar/kontrakan', 'Kamar mandi dalam', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Jakarta', 'Cibitung', 'kab. Bekasi', 'Jawa Barat', '200000', 'Per Tahun', '[\"1663812534_da7ac70d4516a034313c.jpg\",\"1663812534_fb66d7926721a966f04c.jpg\"]', '', '', '', '', '', '', 0, 0, '2022-09-22 09:08:54'),
(2, 0, 300, 301, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Intro YouTube Gaya Hidup Minimalisme Krem dan Hijau.png', 'alam.jpg', 'senja 1.jpg', 'ruko.jpg', 'senja.jpg', 'pexels-photo-3683735.webp', '', 0, 0, '2022-11-26 01:11:01'),
(3, 0, 300, 301, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Intro YouTube Gaya Hidup Minimalisme Krem dan Hijau.png', 'alam.jpg', 'senja 1.jpg', 'ruko.jpg', 'senja.jpg', 'pexels-photo-3683735.webp', '', 0, 0, '2022-11-26 01:11:56'),
(4, 28, 300, 301, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-08-05 10.41.18.jpg', '', '', '', '', '', 'kost_kontrakan', 0, 0, '2022-12-02 09:50:12'),
(5, 28, 300, 301, 'Kontrakan Murah 700 Ribu', '2', '2', 'Token tiap kamar/kontrakan', 'Diluar / bersama', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Graha Sentana, Jl. Warung Buncit Raya N0.2, Jl. Warung Buncit Raya No.2, RT.3/RW.2, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12740', 'Sasak Panjang', 'Bogor', 'Jawa Barat', '700000', 'Per Bulan', 'k1.jpeg', '', '', '', '', '', 'kost_kontrakan', 2, 0, '2022-12-07 08:54:38');

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
(4, 400, 'Property', 'Rumah, Tanah, Apartemen, Ruko', 'property.png', 'property', 1),
(6, 500, 'Mobil', 'Data mobil', 'mobil.png', 'mobil', 1),
(7, 600, 'Motor', 'Data Motor', 'motor.png', 'motor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(5) NOT NULL,
  `nosublayanan` int(5) NOT NULL,
  `judul_iklan` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `plat` varchar(255) NOT NULL,
  `odometer` varchar(255) NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `suspend` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `judul_iklan`, `merk`, `type`, `tahun`, `warna`, `plat`, `odometer`, `bahan_bakar`, `lokasi`, `kecamatan`, `kabupaten`, `provinsi`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `path_folder`, `deskripsi`, `harga`, `is_active`, `suspend`, `created_time`) VALUES
(1, 0, 500, 501, 'Mobil Avanza', 'Avanza', 'Toyota', '2010', 'Putih', '298 TPLP 890', '140200', 'pertalite', '', 'Tajurhalang', 'Kertajati', 'Jawa Barat', '[\"1663815315_254aac080787301e5426.jpg\",\"1663815315_28adc02f10ed2ce73efd.jpg\"]', '', '', '', '', '', '', 'Dijual Cepat', '170000000', 0, 0, '2022-09-22 09:55:15'),
(2, 0, 500, 501, '', '', '', '', '', '', '', '', '', '', '', '', '099382600_1579095950-nature-3616194_1920.jpg', 'alam.jpg', 'jakaet.jpg', 'senja 1.jpg', 'Untitled.png', 'jeans.jpg', '', '', '', 0, 0, '2022-11-26 02:14:02'),
(3, 28, 500, 501, '', '', '', '', '', '', '', '', '', '', '', '', '2022-08-05 10.41.18.jpg', '', '', '', '', '', 'mobil', '', '', 0, 0, '2022-12-02 09:57:08'),
(4, 28, 500, 501, '', '', '', '', '', '', '', '', '', '', '', '', '2022-08-05 10.41.18.jpg', '', '', '', '', '', 'mobil', '', '', 0, 0, '2022-12-02 09:57:26'),
(5, 28, 500, 501, '', '', '', '', '', '', '', '', '', '', '', '', '2022-08-05 10.41.18.jpg', '', '', '', '', '', 'mobil', '', '', 0, 0, '2022-12-02 09:58:10'),
(6, 28, 500, 501, 'Mobil Dijual Cepat', 'Honda', 'Type 2022', '2000', 'Merah', '1020292 AB', '30', 'Pertamina', 'Jakarta Selatan', 'Sasak Panjang', 'Kabupaten', 'Jawa Barat', 'mobil.jpeg', '', '', '', '', '', 'mobil', 'Mobil yang ramah lingkungan', '4000000', 0, 0, '2022-12-08 09:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_motor`
--

CREATE TABLE `tbl_motor` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(5) NOT NULL,
  `nosublayanan` int(5) NOT NULL,
  `judul_iklan` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `plat` varchar(255) NOT NULL,
  `odometer` varchar(255) NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `path_folder` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `suspend` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_motor`
--

INSERT INTO `tbl_motor` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `judul_iklan`, `merk`, `type`, `tahun`, `warna`, `plat`, `odometer`, `bahan_bakar`, `lokasi`, `kecamatan`, `kabupaten`, `provinsi`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `deskripsi`, `harga`, `path_folder`, `is_active`, `suspend`, `created_time`) VALUES
(1, 28, 600, 406, 'Motor N - Max', 'Honda', 'Kawasaki', '2022', 'Merah', '1020292 AB', '30', 'Pertamina', 'Puskesmas kecamatan Tebet', 'Sasak Panjang', 'Kabupaten', 'Tangerang Kota', 'motor.jpeg', '', '', '', '', '', 'Motor ramah lingkungan', '3000000', 'motor', 0, 0, '2022-12-08 10:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan_komen`
--

CREATE TABLE `tbl_pesan_komen` (
  `id_pesan_komen` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekomendasi_iklan`
--

CREATE TABLE `tbl_rekomendasi_iklan` (
  `id_rekomendasi_iklan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nolayanan` int(11) NOT NULL,
  `nosublayanan` int(11) NOT NULL,
  `type_rekomendasi_iklan` varchar(50) NOT NULL,
  `id_iklan` int(11) NOT NULL,
  `nama_iklan` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `alamat` text NOT NULL,
  `image` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `table_iklan` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(5) NOT NULL,
  `suspend` int(5) NOT NULL,
  `count_suspend` int(11) NOT NULL,
  `checked` int(5) NOT NULL,
  `id_checker` int(5) NOT NULL,
  `keterangan_suspend` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rekomendasi_iklan`
--

INSERT INTO `tbl_rekomendasi_iklan` (`id_rekomendasi_iklan`, `user_id`, `nolayanan`, `nosublayanan`, `type_rekomendasi_iklan`, `id_iklan`, `nama_iklan`, `description`, `alamat`, `image`, `path_folder`, `table_iklan`, `create_at`, `is_active`, `suspend`, `count_suspend`, `checked`, `id_checker`, `keterangan_suspend`) VALUES
(1, 28, 100, 101, 'tenaga_ahli', 1, 'Achmad Rizky', 'Bidang Profesi : Adm - Finance Tanggal Lahir : 1992-10-08 Pendidikan : S1 Jurusan : Teknik Informatika', 'Tangerang, Indonesia', '2022-08-05 10.41.18.jpg', '', 'tbl_tenagaahli', '2022-12-06 14:16:47', 1, 0, 2, 0, 0, ''),
(2, 28, 100, 101, 'tenaga_ahli', 2, 'Ratih Merdikawati', 'Bidang Profesi : Project Tanggal Lahir : 1989-10-17 Pendidikan : S1 Jurusan : Akuntasi', 'Jakarta Tenggara', '97f9005b-883e-4020-a3e9-c9c543e77a46.jpeg', '', 'tbl_tenagaahli', '2022-12-06 14:36:34', 1, 0, 0, 0, 0, ''),
(3, 28, 200, 201, 'tenaga_terampil', 3, 'Nadiem Karim 1', 'Profesi : Babysitter Tanggal Lahir : 2022-12-08 Pendidikan : SMA Pengalaman : < 1 Tahun Tempat Lahir : 2022-12-08', ' Bekasi Timur', 'ojek1.jpg', '', 'tbl_tenagaterampil', '2022-12-07 08:47:17', 1, 0, 0, 0, 0, ''),
(4, 28, 300, 301, 'kost&kontrakan', 5, 'Kontrakan Murah 700 Ribu', 'Jumlah Kamar : 2 Kamar Kosong : 2 Listrik : Token tiap kamar/kontrakan Kamar Mandi : Diluar / bersama', 'Graha Sentana, Jl. Warung Buncit Raya N0.2, Jl. Warung Buncit Raya No.2, RT.3/RW.2, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12740', 'k1.jpeg', '', 'tbl_kostkontrakan', '2022-12-07 08:54:38', 2, 0, 0, 0, 0, ''),
(5, 28, 200, 204, 'tenaga_terampil', 7, 'Rosiana Pertiwi 1', 'Profesi : Office Girl/Boy Tanggal Lahir : 2022-12-14 Pendidikan : SMP Pengalaman : 1 - 3 Tahun Tempat Lahir : 2022-12-14', '  Pamulang Barat', 'bo3bB2m4fj83k7CJob92QE.jpeg', '', 'tbl_tenagaterampil', '2022-12-07 09:24:35', 1, 0, 0, 0, 0, ''),
(6, 28, 400, 401, 'rumah', 8, 'Rumah Jual Cepat', 'Luas Tanah : 20 Luas Bangunan : 30 Kepemilikan : Girik Jumlah Lantai : 20', 'Jakarta Selatan', '1.jpeg', '', 'tbl_rumah', '2022-12-07 09:34:38', 1, 0, 0, 0, 0, ''),
(7, 28, 400, 401, 'rumah', 9, 'Rumah Lantai 2', 'Luas Tanah : 30 Luas Bangunan : 20 Kepemilikan : AJB Jumlah Lantai : 20 Listrik : 20 Kamar Tidur : 20', 'Jakarta Barat', 'k1.jpeg', '', 'tbl_rumah', '2022-12-07 09:39:05', 1, 0, 0, 0, 0, ''),
(8, 28, 400, 402, 'tanah', 4, 'Tanah Lapang 300 M\n', 'Luas Tanah : 20 Kepemilikan : AJB Akses Mobil : Masuk Mobil Deskripsi : Tanah dekat lapangan', 'Bogor Utara', 'tanah.jpeg', '', 'tbl_tanah', '2022-12-07 09:46:22', 1, 0, 0, 0, 0, ''),
(9, 28, 400, 403, 'apartemen', 5, 'Apartemen Murah Meriah', 'Luas : 30 Kepemilikan : HGB Bedroom : 30 Kamar Mandi : 20 Deskripsi : Apartemen murah, kamar 2 dan halaman luas', 'Kebun Jeruk', '0224-org-asing-punya-apartemen-s-20210224072141.jpeg', '', 'tbl_apartemen', '2022-12-08 08:54:25', 1, 0, 0, 0, 0, ''),
(11, 28, 400, 404, 'ruko', 8, 'Ruko Dijual Cepat', 'Luas Tanah : 30 Luas Bangunan : 20 Kepemilikan : SHM Strata tittle Jumlah Lantai : 2 Deskripsi : Ruko tempat yang strategis', 'Jakarta Selatan', 'Ruko-Graha-Mulia-99-Jakarta-Selatan-Indonesia.jpeg', '', 'tbl_ruko', '2022-12-08 09:01:27', 1, 0, 0, 0, 0, ''),
(13, 28, 400, 405, 'bangunan_komersial', 5, 'Bangunan Kokoh 3 Lantai', 'Luas Tanah : 200 Luas Bangunan : 222 Kepemilikan : HGB Jumlah Lantai : 20 Deskripsi : Bangunan Kokoh tempat strategis', 'Jakarta Barat', '0224-org-asing-punya-apartemen-s-20210224072141.jpeg', '', 'tbl_bangunankomersial', '2022-12-08 09:21:12', 1, 0, 0, 0, 0, ''),
(14, 28, 500, 501, 'mobil', 6, 'Mobil Dijual Cepat', 'Merek : Honda Type : Type 2022 Tahun : 2000 Warna : Merah Deskripsi : Mobil yang ramah lingkungan', 'Jakarta Selatan', 'mobil.jpeg', '', 'tbl_mobil', '2022-12-08 09:36:43', 1, 0, 0, 0, 0, ''),
(16, 28, 600, 406, 'motor', 1, 'Motor N - Max', 'Merek : Honda Type : Kawasaki Tahun : 2022 Warna : Merah Deskripsi : Motor ramah lingkungan', 'Puskesmas kecamatan Tebet', 'motor.jpeg', '', 'tbl_motor', '2022-12-08 10:26:21', 1, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruko`
--

CREATE TABLE `tbl_ruko` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(5) NOT NULL,
  `nosublayanan` int(5) NOT NULL,
  `jualsewa` int(2) NOT NULL,
  `juduliklan` varchar(512) NOT NULL,
  `luastanah` int(9) NOT NULL,
  `luasbangunan` int(6) NOT NULL,
  `kepemilikan` varchar(100) NOT NULL,
  `jumlahlantai` int(3) NOT NULL,
  `listrik` int(6) NOT NULL,
  `kamarmandi` int(2) NOT NULL,
  `carport` int(2) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `kecamatan` varchar(32) NOT NULL,
  `kabupaten` varchar(32) NOT NULL,
  `propinsi` varchar(32) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` int(11) NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `suspend` int(11) NOT NULL,
  `checked1` datetime NOT NULL,
  `checked2` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ruko`
--

INSERT INTO `tbl_ruko` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jualsewa`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `kamarmandi`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `path_folder`, `deskripsi`, `harga`, `is_active`, `suspend`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 404, 0, 'Ruko besar', 2000, 2000, '', 1, 200, 2, 2, 'Parung Dekat Kantor Pos', 'Cibitung', 'Kertajati', 'jawa barat', '[\"1663814531_4b4f1d64d5290dd48fa9.jpg\",\"1663814531_110365e259007331778f.jpg\"]', '', 0, '', '', '', '', 'Disewakan cepat', 300000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, 400, 404, 0, 'Ruko ', 200, 200, 'SHM Strata tittl', 2, 2, 2, 2, 'Parung', 'kemang', 'bogor', 'jawa barat', '[\"1665412467_bcba8bebdae5d3aa03fe.jpg\"]', '', 0, '', '', '', '', 'Disewakeun', 20000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, 400, 404, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', '', '', 'latihan7_1.png', 'latihan7_2.png', 0, 'latihan7_4.png', 'latihan7_5.png', 'latihan7_6.png', '', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 0, 400, 404, 0, 'Ruko 4 pintu', 200, 200, 'SHM Strata tittl', 2, 2, 2, 2, 'Kemang', 'kemang', 'Kemang', 'jawa barat', 'alam - Copy.jpg', 'alam.jpg', 99382600, 'Circle-icons-profile.svg.png', 'Untitled.png', 'senja.jpg', '', 'Silahkan di survei', 2000000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 0, 400, 404, 0, 'Ruko 4 pintu', 200, 200, 'SHM Strata tittl', 2, 2, 2, 2, 'Kemang', 'kemang', 'Kemang', 'jawa barat', 'alam - Copy.jpg', 'alam.jpg', 99382600, 'Circle-icons-profile.svg.png', 'Untitled.png', 'senja.jpg', '', 'Silahkan di survei', 2000000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 0, 400, 404, 0, 'Ruko 4 pintu', 200, 200, 'SHM Strata tittl', 2, 2, 2, 2, 'Kemang', 'kemang', 'Kemang', 'jawa barat', 'alam - Copy.jpg', 'alam.jpg', 99382600, 'Circle-icons-profile.svg.png', 'Untitled.png', 'senja.jpg', '', 'Silahkan di survei', 2000000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 28, 400, 404, 0, '', 0, 0, '', 0, 0, 0, 0, '', '', '', '', '2022-08-05 10.41.18.jpg', '', 0, '', '', '', 'ruko', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 28, 400, 404, 0, 'Ruko Dijual Cepat', 30, 20, 'SHM Strata tittl', 2, 22, 3, 22, 'Jakarta Selatan', 'Sasak Panjang', 'Tajurhalang', 'DKI Jakarta', 'Ruko-Graha-Mulia-99-Jakarta-Selatan-Indonesia.jpeg', '', 0, '', '', '', 'ruko', 'Ruko tempat yang strategis', 3000000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rumah`
--

CREATE TABLE `tbl_rumah` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(5) NOT NULL,
  `nosublayanan` int(5) NOT NULL,
  `jenispengiklan` int(2) NOT NULL,
  `juduliklan` varchar(512) NOT NULL,
  `luastanah` int(9) NOT NULL,
  `luasbangunan` int(6) NOT NULL,
  `kepemilikan` varchar(16) NOT NULL,
  `jumlahlantai` int(3) NOT NULL,
  `listrik` int(6) NOT NULL,
  `ruangtamu` varchar(16) NOT NULL,
  `ruangkeluarga` varchar(16) NOT NULL,
  `kamartidur` int(3) NOT NULL,
  `kamarpembantu` int(2) NOT NULL,
  `kamarmandi` int(2) NOT NULL,
  `teras` varchar(16) NOT NULL,
  `taman` varchar(16) NOT NULL,
  `aksesmobil` varchar(24) NOT NULL,
  `garasi` varchar(32) NOT NULL,
  `carport` varchar(32) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `kecamatan` varchar(32) NOT NULL,
  `kabupaten` varchar(32) NOT NULL,
  `propinsi` varchar(32) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `suspend` int(11) NOT NULL,
  `checked` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rumah`
--

INSERT INTO `tbl_rumah` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jenispengiklan`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `ruangtamu`, `ruangkeluarga`, `kamartidur`, `kamarpembantu`, `kamarmandi`, `teras`, `taman`, `aksesmobil`, `garasi`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `path_folder`, `deskripsi`, `harga`, `is_active`, `suspend`, `checked`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 401, 0, 'Rumah Dekat SPBU', 2000, 2000, 'Sertifikat', 2, 1, 'Ada', 'Ada', 1, 2, 2, 'Ada', 'Ada', 'Masuk Mobil', '2', '1', 'Komplek inkopad', 'Majalengka', 'Bogor', 'jawa barat', '[\"1663813643_23ff5f4b68b2114f443e.jpg\",\"1663813643_1bf3725bcf85312832b2.jpg\"]', '', '', '', '', '', '', 'Silahkan dibeli ', 200000, 0, 0, NULL, NULL, NULL),
(2, 0, 400, 401, 0, '', 0, 0, '', 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, NULL, NULL, NULL),
(3, 0, 400, 401, 0, '', 0, 0, '', 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, NULL, NULL, NULL),
(4, 0, 400, 401, 0, '', 0, 0, '', 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, NULL, NULL, NULL),
(5, 0, 400, 401, 0, '', 0, 0, '', 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, NULL, NULL, NULL),
(6, 0, 400, 401, 0, '', 0, 0, '', 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 'latihan7_1.png', 'latihan7_2.png', 'latihan7_3.png', 'latihan7_4.png', 'latihan7_5.png', 'latihan7_7.png', '', '', 0, 0, 0, NULL, NULL, NULL),
(7, 28, 400, 401, 0, '', 0, 0, '', 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '2022-08-05 10.41.18.jpg', '', '', '', '', '', 'rumah', '', 0, 0, 0, NULL, NULL, NULL),
(8, 28, 400, 401, 0, 'Rumah Jual Cepat', 20, 30, 'Girik', 20, 20, 'Ada', 'Ada', 2, 1, 1, 'Ada', 'Ada', 'Masuk Mobil', '2', '3', 'Jakarta Selatan', 'Sasak Panjang', 'Kabupaten', 'Bogor', '1.jpeg', '', '', '', '', '', 'rumah', 'Deskripsi', 2147483647, 0, 0, NULL, NULL, NULL),
(9, 28, 400, 401, 0, 'Rumah Elastis', 30, 20, 'AJB', 20, 20, 'Ada', 'Ada', 20, 2, 1, 'Ada', 'Ada', 'Masuk Mobil', '2', '1', 'Jakarta Barat', 'Sasak Panjang', 'Kabupaten', 'Bogor', 'k1.jpeg', '', '', '', '', '', 'rumah', 'Ruma elastis cocok untuk keluarga', 2147483647, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `description`, `gambar`, `created_time`) VALUES
(1, 'slider 1', 'Deskripsi 1', 'https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/03/10102902/Tinggal-di-Rumah-Kontrakan.png', '2022-10-10 22:04:08'),
(2, 'Slider 2', 'Deskripsi 2', 'https://asset.kompas.com/crops/DxwtyJuwM9ssm09VOD1gWDwTlDk=/0x0:800x533/750x500/data/photo/2022/01/14/61e0e9c807858.jpg', '2022-10-10 22:04:08'),
(3, 'Slider 3', 'Deskripsi 3', 'https://flashproperty.id/media/property/623800d971dfd987921211.png', '2022-10-10 22:07:15');

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
(1, 100, 101, 'Engineering ', 'engineering.png', 'tenaga_ahli', 1),
(2, 200, 201, 'Driver', 'driver.png', 'tenaga_terampil', 1),
(3, 300, 301, 'Kost & Kontrakan', 'kost.jpg', 'kost_kontrakan', 1),
(4, 400, 401, 'Rumah', 'rumah.png', 'rumah', 1),
(5, 500, 501, 'Mobil', 'mobil.png', 'mobil', 1),
(16, 100, 102, 'Production', 'production.png', 'tenaga_ahli', 1),
(17, 100, 103, 'Construction', 'construction.png', 'tenaga_ahli', 1),
(18, 100, 104, 'Finance', 'finance.png', 'tenaga_ahli', 1),
(19, 100, 105, 'Marketing', 'marketing.png', 'tenaga_ahli', 1),
(20, 100, 106, 'Programming', 'programming.png', 'tenaga_ahli', 1),
(21, 200, 202, 'Babysitter', 'babysitter.png', 'tenaga_terampil', 1),
(22, 200, 203, 'Perawat Lansia', 'perawatlansia.png', 'tenaga_terampil', 1),
(23, 200, 204, 'Asisten Rumah Tangga', 'art.png', 'tenaga_terampil', 1),
(24, 200, 205, 'Office Boy - Girl', 'ob.png', 'tenaga_terampil', 1),
(25, 400, 402, 'Tanah', 'tanah.png', 'tanah', 1),
(26, 400, 403, 'Apartemen', 'apartemen.png', 'apartemen', 1),
(27, 400, 404, 'Ruko', 'ruko.png', 'ruko', 1),
(28, 400, 405, 'Bangunan Komersial', 'komersial.png', 'bangunan_komersial', 1),
(32, 600, 406, 'Motor', 'motor.png', 'motor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanah`
--

CREATE TABLE `tbl_tanah` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(5) NOT NULL,
  `nosublayanan` int(5) NOT NULL,
  `jualsewa` int(2) NOT NULL,
  `juduliklan` varchar(512) NOT NULL,
  `luastanah` int(9) NOT NULL,
  `kepemilikan` varchar(16) NOT NULL,
  `aksesmobil` varchar(24) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `kecamatan` varchar(32) NOT NULL,
  `kabupaten` varchar(32) NOT NULL,
  `propinsi` varchar(32) NOT NULL,
  `gambar1` varchar(64) NOT NULL,
  `gambar6` varchar(64) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `suspend` int(11) NOT NULL,
  `checked1` datetime NOT NULL,
  `checked2` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tanah`
--

INSERT INTO `tbl_tanah` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jualsewa`, `juduliklan`, `luastanah`, `kepemilikan`, `aksesmobil`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `gambar1`, `gambar6`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `path_folder`, `deskripsi`, `harga`, `is_active`, `suspend`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 402, 0, 'Tanah Lapang', 3000, 'Sertifikat', 'Masuk Mobil', 'Bogor ', 'Tajurhalang', 'Bogor', 'jawa barat', '', '', '[\"1663814021_46b87affcf08c7e80440.jpeg\",\"1663814021_a787f08394d03508d151.jpg\"]', '', '', '', '', '', '', 'Silahkan Dibeli', 50000000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, 400, 402, 0, '', 0, '', '', '', '', '', '', '', '', 'latihan7_2.png', 'latihan7_1.png', 'latihan7_4.png', 'latihan7_5.png', 'Screenshot (1).png', 'Screenshot (4).png', '', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 28, 400, 402, 0, '', 0, '', '', '', '', '', '', '', '', '2022-08-05 10.41.18.jpg', '', '', '', '', '', 'tanah', '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 28, 400, 402, 0, 'Tanah Di Jual', 20, 'AJB', 'Masuk Mobil', 'Bogor Utara', 'Sasak Panjang', 'Kabupaten', 'Bogor', '', '', 'tanah.jpeg', '', '', '', '', '', 'tanah', 'Tanah dekat lapangan', 3000000, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tenagaahli`
--

CREATE TABLE `tbl_tenagaahli` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(5) NOT NULL,
  `nosublayanan` int(5) NOT NULL,
  `bidang_profesi` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `pengalaman_kerja` varchar(255) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `curiculum_vitae` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `suspend` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tenagaahli`
--

INSERT INTO `tbl_tenagaahli` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `bidang_profesi`, `nama_lengkap`, `tanggal_lahir`, `pendidikan`, `jurusan`, `pengalaman_kerja`, `domisili`, `kecamatan`, `kabupaten`, `provinsi`, `deskripsi`, `gaji`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `path_folder`, `curiculum_vitae`, `is_active`, `suspend`, `created_time`) VALUES
(1, 28, 100, 101, 'Adm - Finance', 'Achmad Rizky', '1992-10-08', 'S1', 'Teknik Informatika', '3 - 5 Tahun', 'Tangerang, Indonesia', 'Sasak Panjang', 'Tajurhalang', 'Tangerang Kota', 'Menguasai HTML, CSS, PHP, Javacript, ReactJS', '7000000', '2022-08-05 10.41.18.jpg', 'img2.jpeg', 'WhatsApp Image 2022-08-02 at 23.50.37.jpeg', '', '', '', 'tenaga_ahli', 'CV Rizky.pdf', 1, 0, '2022-12-06 14:16:47'),
(2, 28, 100, 101, 'Project', 'Ratih Merdikawati', '1989-10-17', 'S1', 'Akuntasi', '3 - 5 Tahun', 'Jakarta Tenggara', 'Tenggarong', 'Muncul Selatan', 'Jawa Timur', 'S1 Mampu pengoparsian komputer office', '3000000', '97f9005b-883e-4020-a3e9-c9c543e77a46.jpeg', '97f9005b-883e-4020-a3e9-c9c543e77a46.jpeg', '', '', '', '', 'tenaga_ahli', 'CV Rizky.pdf', 1, 0, '2022-12-06 14:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tenagaterampil`
--

CREATE TABLE `tbl_tenagaterampil` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(5) NOT NULL,
  `nosublayanan` int(5) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `pengalaman_kerja` varchar(255) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `image_6` text NOT NULL,
  `path_folder` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL,
  `suspend` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tenagaterampil`
--

INSERT INTO `tbl_tenagaterampil` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `profesi`, `nama_lengkap`, `tempat_lahir`, `pendidikan`, `pengalaman_kerja`, `domisili`, `kecamatan`, `kabupaten`, `provinsi`, `deskripsi`, `gaji`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `path_folder`, `is_active`, `suspend`, `created_time`) VALUES
(1, 0, 200, 203, 'Perawat Jompo/Lansia', 'Saipul Kufron', '2004-06-09', 'SMP', '1 - 3 Tahun', 'Gang Tengah', 'Majalengka', 'Kertajati', 'Jawa Barat', 'Sabar Dalam Mengurusi', '7000000', '[\"1663811908_f3c284ceec7a3e06dcc1.jpg\",\"1663811908_af53f0a8070df5a37333.jpg\"]', '', '', '', '', '', '', 0, 0, '2022-09-22 08:58:28'),
(2, 0, 200, 201, '', '', '', '', '', '', '', '', '', '', '', 'latihan7_5.png', 'latihan7_6.png', 'latihan7_7.png', 'Screenshot (4).png', 'Screenshot (3).png', 'Screenshot (24).png', '', 0, 0, '2022-11-25 20:16:38'),
(3, 0, 200, 201, 'Perawat Jompo/Lansia', 'mas fikri', '2022-11-20', 'SD', '5 Tahun', 'Bogor', 'kemang', 'Bogor', 'Jawa Barat', 'Sabar', '200000', '099382600_1579095950-nature-3616194_1920.jpg', 'alam.jpg', 'Circle-icons-profile.svg.png', 'Circle-icons-profile.svg.png', 'download.jpg', 'Untitled.png', 'tenaga_terampil', 1, 0, '2022-11-26 13:22:06'),
(4, 0, 200, 201, 'Perawat Jompo/Lansia', 'mas fikri', '2022-11-20', 'SD', '5 Tahun', 'Bogor', 'kemang', 'Bogor', 'Jawa Barat', 'Sabar', '200000', '099382600_1579095950-nature-3616194_1920.jpg', 'alam.jpg', 'Circle-icons-profile.svg.png', 'Circle-icons-profile.svg.png', 'download.jpg', 'Untitled.png', 'tenaga_terampil', 0, 0, '2022-11-26 13:22:08'),
(5, 28, 200, 201, '', '', '', '', '', '', '', '', '', '', '', '2022-08-05 10.41.18.jpg', '', '', '', '', '', 'tenaga_terampil', 0, 0, '2022-12-02 09:47:35'),
(6, 28, 200, 201, 'Babysitter', 'Nadiem Karim 1', '2022-12-08', 'SMA', '< 1 Tahun', ' Bekasi Timur', ' Laladon', ' Bekasi Simular', ' Jawa Barat', 'Pengalaman 3 Tahun menjadi ojke online, membuat saya jaog naik motor', '4000000', 'ojek1.jpg', '', '', '', '', '', 'tenaga_terampil', 0, 0, '2022-12-07 08:47:17'),
(7, 28, 200, 204, 'Office Girl/Boy', 'Rosiana Pertiwi 1', '2022-12-14', 'SMP', '1 - 3 Tahun', '  Pamulang Barat', '  Kecamatan', '  DKI Jakarta', '  Jawa Barat', '3 Tahun pengalaman menjadi asisten rumah tangga', '4000000', 'bo3bB2m4fj83k7CJob92QE.jpeg', '', '', '', '', '', 'tenaga_terampil', 0, 0, '2022-12-07 09:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `generate_code_verifikasi` varchar(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tgllahir` date DEFAULT NULL,
  `jeniskelamin` varchar(8) DEFAULT NULL,
  `nohp` varchar(32) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(24) NOT NULL,
  `role` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `norek` varchar(64) DEFAULT NULL,
  `gopay` varchar(64) DEFAULT NULL,
  `ovo` varchar(64) DEFAULT NULL,
  `suspend` int(11) NOT NULL,
  `count_suspend` int(11) NOT NULL,
  `is_active` int(11) NOT NULL COMMENT '1 = active belum verified 2 = verified',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `gambar` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `generate_code_verifikasi`, `nama`, `tgllahir`, `jeniskelamin`, `nohp`, `email`, `password`, `role`, `alamat`, `deskripsi`, `norek`, `gopay`, `ovo`, `suspend`, `count_suspend`, `is_active`, `created_at`, `updated_at`, `perusahaan`, `gambar`) VALUES
(7, '1234', 'Achmad Rizky', NULL, NULL, '1234', 'rizky271092@gmail.com', '', 0, '', '0', NULL, NULL, NULL, 1, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(9, '1234', 'Ratih', NULL, NULL, '0101', 'ratih@gmail.com', '', 0, '', '0', NULL, NULL, NULL, 0, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(12, '1234', 'Achmad Gozali', NULL, NULL, '0858', 'rizky@meenistry.com', '1', 0, '', '0', NULL, NULL, NULL, 0, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(14, '1234', 'Buhari', NULL, NULL, '123456789', 'buhari@gmail.com', '', 0, '', '0', NULL, NULL, NULL, 0, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(15, '1234', '', NULL, NULL, '081234', NULL, '', 0, '', '0', NULL, NULL, NULL, 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(16, '1234', 'Hasan', NULL, NULL, '0858123', 'hasan@gmail.com', '', 0, '', '0', NULL, NULL, NULL, 0, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(18, '1708', 'Abdul Fajar', NULL, NULL, '08811501574', 'fajar@gmail.com', 'Fajar', 0, 'Komplek Inkopad Blok O5 No 17', '0', NULL, NULL, NULL, 0, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(19, '1893', 'Rizki Kurniawan', NULL, NULL, '085809052137', 'aman@gmail.com', 'iki', 0, 'alamat', 'alamat', NULL, NULL, NULL, 0, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(28, '221', 'Achmad Rizky', NULL, NULL, '085894222865', 'rizky@meenistry.com', '1', 0, 'Komplek Inkopad, Parung Bogor', '', NULL, NULL, NULL, 0, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'ojek1.jpg'),
(29, '0', 'lock screen', NULL, NULL, '0', '', '123', 0, '', '0', NULL, NULL, NULL, 0, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(30, '2309', 'Reza', NULL, NULL, '0858942228651', '', '1233', 0, '', '', NULL, NULL, NULL, 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apartemen`
--
ALTER TABLE `tbl_apartemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bangunankomersial`
--
ALTER TABLE `tbl_bangunankomersial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenisiklan`
--
ALTER TABLE `tbl_jenisiklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kontak_kami`
--
ALTER TABLE `tbl_kontak_kami`
  ADD PRIMARY KEY (`id_kontak_kami`);

--
-- Indexes for table `tbl_kostkontrakan`
--
ALTER TABLE `tbl_kostkontrakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_motor`
--
ALTER TABLE `tbl_motor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_pesan_komen`
--
ALTER TABLE `tbl_pesan_komen`
  ADD PRIMARY KEY (`id_pesan_komen`);

--
-- Indexes for table `tbl_rekomendasi_iklan`
--
ALTER TABLE `tbl_rekomendasi_iklan`
  ADD PRIMARY KEY (`id_rekomendasi_iklan`);

--
-- Indexes for table `tbl_ruko`
--
ALTER TABLE `tbl_ruko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rumah`
--
ALTER TABLE `tbl_rumah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sublayanan`
--
ALTER TABLE `tbl_sublayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tanah`
--
ALTER TABLE `tbl_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tenagaahli`
--
ALTER TABLE `tbl_tenagaahli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tenagaterampil`
--
ALTER TABLE `tbl_tenagaterampil`
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
-- AUTO_INCREMENT for table `tbl_apartemen`
--
ALTER TABLE `tbl_apartemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_bangunankomersial`
--
ALTER TABLE `tbl_bangunankomersial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jenisiklan`
--
ALTER TABLE `tbl_jenisiklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kontak_kami`
--
ALTER TABLE `tbl_kontak_kami`
  MODIFY `id_kontak_kami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kostkontrakan`
--
ALTER TABLE `tbl_kostkontrakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_motor`
--
ALTER TABLE `tbl_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pesan_komen`
--
ALTER TABLE `tbl_pesan_komen`
  MODIFY `id_pesan_komen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rekomendasi_iklan`
--
ALTER TABLE `tbl_rekomendasi_iklan`
  MODIFY `id_rekomendasi_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_ruko`
--
ALTER TABLE `tbl_ruko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_rumah`
--
ALTER TABLE `tbl_rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sublayanan`
--
ALTER TABLE `tbl_sublayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_tanah`
--
ALTER TABLE `tbl_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tenagaahli`
--
ALTER TABLE `tbl_tenagaahli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tenagaterampil`
--
ALTER TABLE `tbl_tenagaterampil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
