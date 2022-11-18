-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2022 at 04:12 AM
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
  `image` text NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `checked` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apartemen`
--

INSERT INTO `tbl_apartemen` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `juduliklan`, `luas`, `kepemilikan`, `bedroom`, `kamarmandi`, `listrik`, `alamatlokasi`, `kecamatan`, `kabupaten`, `propinsi`, `image`, `deskripsi`, `harga`, `is_active`, `checked`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 403, 'Apartemen Tekuk Intan', 4000, 'SHM Strata tittle', 20, 10, 2000, 'Tangerang', 'Tajurhalang', 'Kertajati', 'jawa barat', '[\"1663814312_48d9391d15b92dd48581.jpg\",\"1663814312_74ea0551247a827074c2.jpg\"]', 'Dijual secepatnya', 30000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `image` text NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `checked1` datetime NOT NULL,
  `checked2` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bangunankomersial`
--

INSERT INTO `tbl_bangunankomersial` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jualsewa`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `image`, `deskripsi`, `harga`, `is_active`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 405, 0, 'Bangunan Komersial Di Kawasan Mandiri', 300, 200, 'SHM Strata tittl', 2000, 200, 3000, 'Bogor', 'Majalengka', 'Bogor', 'jawa barat', '[\"1663814759_3efc5b5605e21e11cbae.jpg\",\"1663814759_e86b3f838c5189442d7f.jpg\"]', 'Disewakan', 2147483647, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `image` text NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kostkontrakan`
--

INSERT INTO `tbl_kostkontrakan` (`id`, `nolayanan`, `nosublayanan`, `judul_iklan`, `jumlah_kamar`, `kamar_kosong`, `listrik`, `kamar_mandi`, `ac`, `water_heater`, `tempat_tidur`, `meja_kursi`, `almari`, `alamat_lokasi`, `kecamatan`, `kabupaten`, `provinsi`, `harga`, `perbulan`, `image`, `created_time`) VALUES
(1, 300, 301, 'Kost Dekat Mall Stadion', '2', '2', 'Token tiap kamar/kontrakan', 'Kamar mandi dalam', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Jakarta', 'Cibitung', 'kab. Bekasi', 'Jawa Barat', '200000', 'Per Tahun', '[\"1663812534_da7ac70d4516a034313c.jpg\",\"1663812534_fb66d7926721a966f04c.jpg\"]', '2022-09-22 09:08:54');

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
  `image` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id`, `nolayanan`, `nosublayanan`, `judul_iklan`, `merk`, `type`, `tahun`, `warna`, `plat`, `odometer`, `bahan_bakar`, `lokasi`, `kecamatan`, `kabupaten`, `provinsi`, `image`, `deskripsi`, `harga`, `created_time`) VALUES
(1, 500, 501, 'Mobil Avanza', 'Avanza', 'Toyota', '2010', 'Putih', '298 TPLP 890', '140200', 'pertalite', '', 'Tajurhalang', 'Kertajati', 'Jawa Barat', '[\"1663815315_254aac080787301e5426.jpg\",\"1663815315_28adc02f10ed2ce73efd.jpg\"]', 'Dijual Cepat', '170000000', '2022-09-22 09:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_motor`
--

CREATE TABLE `tbl_motor` (
  `id` int(11) NOT NULL,
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
  `image` text NOT NULL,
  `gambar6` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_motor`
--

INSERT INTO `tbl_motor` (`id`, `nolayanan`, `nosublayanan`, `judul_iklan`, `merk`, `type`, `tahun`, `warna`, `plat`, `odometer`, `bahan_bakar`, `lokasi`, `kecamatan`, `kabupaten`, `provinsi`, `image`, `gambar6`, `deskripsi`, `harga`, `created_time`) VALUES
(1, 600, 601, 'Motor Aerox', 'Yamaha', '2019', '2019', 'Coklat Kesilveran', '290 TPLP 016', '2000', 'pertalite', 'inkopad', 'Tajurhalang', 'Bogor', 'Jawa Barat', '[\"1663815500_03554b25de629b930196.jpg\",\"1663815500_f9f70f6de3b4764e76fd.png\"]', '', 'dijual saja', '400000', '2022-09-22 09:58:20');

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
  `table_iklan` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rekomendasi_iklan`
--

INSERT INTO `tbl_rekomendasi_iklan` (`id_rekomendasi_iklan`, `user_id`, `nolayanan`, `nosublayanan`, `type_rekomendasi_iklan`, `id_iklan`, `nama_iklan`, `description`, `alamat`, `image`, `table_iklan`, `create_at`) VALUES
(1, 1, 100, 101, 'tenaga_ahli', 1, 'Budiman Santoso', 'Bidang Profesi: Engineering Tanggal Lahir : 2022-02-09 Pendidikan :S2JurusanNuclear EngeneeringPengalaman Kerja :1 - 3 Tahun', 'Inkopad Tajurhalang Bogor Jawa Barat', '[\"1663802177_2829bbdb0da81fe252fc.png\"]', 'tbl_tenagaahli', '2022-09-22 06:16:17'),
(2, 20, 100, 106, 'tenaga_ahli', 2, 'Santra Ari', 'Bidang Profesi : Engineering Tanggal Lahir : 2022-09-24Pendidikan : S3JurusanNuclear EngeneeringPengalaman Kerja :3 - 5 Tahun', 'Inkopad Tajurhalang Bogor Jawa Barat', '[\"1663802366_d98873450151c17ec036.jpg\"]', 'tbl_tenagaahli', '2022-09-22 06:19:27'),
(3, 23, 200, 203, 'tenaga_terampil', 1, 'Saipul Kufron', 'Bidang Profesi : Perawat Jompo/Lansia, Tanggal Lahir : 2004-06-09Pendidikan :SMPPengalaman :1 - 3 Tahun', 'Gang Tengah Majalengka Kertajati Jawa Barat', '[\"1663811908_f3c284ceec7a3e06dcc1.jpg\",\"1663811908_af53f0a8070df5a37333.jpg\"]', 'tbl_tenagaterampil', '2022-09-22 08:58:29'),
(4, 20, 300, 301, 'kost&kontrakan', 1, 'Kost Dekat Mall Stadion', 'Jumlah Kamar : 2Kamar Kosong : 2 Listrik : Token tiap kamar/kontrakanKamar Mandi : Kamar mandi dalamAC : AdaAdaAdaAdaAda', 'Jakarta Cibitung kab. Bekasi Jawa Barat', '[\"1663812534_da7ac70d4516a034313c.jpg\",\"1663812534_fb66d7926721a966f04c.jpg\"]', 'tbl_kostkontrakan', '2022-09-22 09:08:54'),
(5, 0, 400, 401, 'rumah', 1, 'Rumah Dekat SPBU', 'Luas Tanah :2000Luas Bangunan :2000 Kepemilikan :SertifikatJumlah Lantai :2 1 Ada Ada 1 2 2 Ada Ada Masuk Mobil 2 1 Silahkan dibeli ', 'Komplek inkopad Majalengka Bogor jawa barat', '[\"1663813643_23ff5f4b68b2114f443e.jpg\",\"1663813643_1bf3725bcf85312832b2.jpg\"]', 'tbl_rumah', '2022-09-22 09:27:23'),
(6, 0, 400, 402, 'tanah', 1, 'Tanah Lapang', 'Luas Tanah :3000Kepemilikan :SertifikatAkses Mobil :Masuk Mobil', 'Bogor  Tajurhalang Bogor jawa barat', '[\"1663814021_46b87affcf08c7e80440.jpeg\",\"1663814021_a787f08394d03508d151.jpg\"]', 'tbl_tanah', '2022-09-22 09:33:41'),
(7, 0, 400, 403, 'apartemen', 1, 'Apartemen Tekuk Intan', 'Luas :4000Kepemilikan : SHM Strata tittleBedroom :20Kamar Mandi : 10Listrik : 2000Dijual secepatnya', 'Tangerang Tajurhalang Kertajati jawa barat', '[\"1663814312_48d9391d15b92dd48581.jpg\",\"1663814312_74ea0551247a827074c2.jpg\"]', 'tbl_apartemen', '2022-09-22 09:38:33'),
(8, 20, 400, 404, 'ruko', 1, 'Ruko besar', 'Luas Tanah : 2000Luas Bangunan :  2000Kepemilikan :Jumlah Lantai :1Listrik :200Kamar Mandi :2Carport :2Disewakan cepat', 'Parung Dekat Kantor Pos Cibitung Kertajati jawa barat', '[\"1663814531_4b4f1d64d5290dd48fa9.jpg\",\"1663814531_110365e259007331778f.jpg\"]', 'tbl_ruko', '2022-09-22 09:42:11'),
(9, 0, 400, 405, 'bangunan_komersial', 1, 'Bangunan Komersial Di Kawasan Mandiri', 'Luas Tannah : 300Luas Bangunan : 200 Kepemilikan : SHM Strata tittleJumlah Lantai : 2000Listrik :200Carport :3000Disewakan', 'Bogor Majalengka Bogor jawa barat', '[\"1663814759_3efc5b5605e21e11cbae.jpg\",\"1663814759_e86b3f838c5189442d7f.jpg\"]', 'tbl_bangunankomersial', '2022-09-22 09:46:00'),
(10, 20, 500, 501, 'mobil', 1, 'Mobil Avanza', 'Merk :AvanzaType : ToyotaTahun : 2010Warna : Putih298 TPLP 890 140200pertaliteDijual Cepat', ' Tajurhalang Kertajati Jawa Barat', '[\"1663815315_254aac080787301e5426.jpg\",\"1663815315_28adc02f10ed2ce73efd.jpg\"]', 'tbl_mobil', '2022-09-22 09:55:15'),
(11, 0, 600, 601, 'motor', 1, 'Motor Aerox', 'Merk : YamahaType : 2019Tahun : 2019Warna : Coklat Kesilveran290 TPLP 016 2000pertalitedijual saja', 'inkopad Tajurhalang Bogor Jawa Barat', '[\"1663815500_03554b25de629b930196.jpg\",\"1663815500_f9f70f6de3b4764e76fd.png\"]', 'tbl_motor', '2022-09-22 09:58:20');

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
  `kepemilikan` varchar(16) NOT NULL,
  `jumlahlantai` int(3) NOT NULL,
  `listrik` int(6) NOT NULL,
  `kamarmandi` int(2) NOT NULL,
  `carport` int(2) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `kecamatan` varchar(32) NOT NULL,
  `kabupaten` varchar(32) NOT NULL,
  `propinsi` varchar(32) NOT NULL,
  `image` text NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `checked1` datetime NOT NULL,
  `checked2` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ruko`
--

INSERT INTO `tbl_ruko` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jualsewa`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `kamarmandi`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `image`, `deskripsi`, `harga`, `is_active`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 404, 0, 'Ruko besar', 2000, 2000, '', 1, 200, 2, 2, 'Parung Dekat Kantor Pos', 'Cibitung', 'Kertajati', 'jawa barat', '[\"1663814531_4b4f1d64d5290dd48fa9.jpg\",\"1663814531_110365e259007331778f.jpg\"]', 'Disewakan cepat', 300000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, 400, 404, 0, 'Ruko ', 200, 200, 'SHM Strata tittl', 2, 2, 2, 2, 'Parung', 'kemang', 'bogor', 'jawa barat', '[\"1665412467_bcba8bebdae5d3aa03fe.jpg\"]', 'Disewakeun', 20000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `image` text NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `checked1` datetime DEFAULT NULL,
  `checked2` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rumah`
--

INSERT INTO `tbl_rumah` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jenispengiklan`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `ruangtamu`, `ruangkeluarga`, `kamartidur`, `kamarpembantu`, `kamarmandi`, `teras`, `taman`, `aksesmobil`, `garasi`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `image`, `deskripsi`, `harga`, `is_active`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 401, 0, 'Rumah Dekat SPBU', 2000, 2000, 'Sertifikat', 2, 1, 'Ada', 'Ada', 1, 2, 2, 'Ada', 'Ada', 'Masuk Mobil', '2', '1', 'Komplek inkopad', 'Majalengka', 'Bogor', 'jawa barat', '[\"1663813643_23ff5f4b68b2114f443e.jpg\",\"1663813643_1bf3725bcf85312832b2.jpg\"]', 'Silahkan dibeli ', 200000, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id_slider` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id_slider`, `title`, `description`, `image`, `created_time`) VALUES
(1, 'slider 1', 'Deskripsi 1', 'https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/03/10102902/Tinggal-di-Rumah-Kontrakan.png', '2022-10-10 22:04:08'),
(2, 'Slider 2', 'Deskripsi 1', 'https://asset.kompas.com/crops/DxwtyJuwM9ssm09VOD1gWDwTlDk=/0x0:800x533/750x500/data/photo/2022/01/14/61e0e9c807858.jpg', '2022-10-10 22:04:08'),
(3, 'Slider 3', '', 'https://flashproperty.id/media/property/623800d971dfd987921211.png', '2022-10-10 22:07:15');

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
(28, 400, 405, 'Bangunan Komersial', 'komersial.png', 'bangunan_komersial', 1);

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
  `image` text NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `checked1` datetime NOT NULL,
  `checked2` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tanah`
--

INSERT INTO `tbl_tanah` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jualsewa`, `juduliklan`, `luastanah`, `kepemilikan`, `aksesmobil`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `gambar1`, `gambar6`, `image`, `deskripsi`, `harga`, `is_active`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 0, 400, 402, 0, 'Tanah Lapang', 3000, 'Sertifikat', 'Masuk Mobil', 'Bogor ', 'Tajurhalang', 'Bogor', 'jawa barat', '', '', '[\"1663814021_46b87affcf08c7e80440.jpeg\",\"1663814021_a787f08394d03508d151.jpg\"]', 'Silahkan Dibeli', 50000000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `image` text NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tenagaahli`
--

INSERT INTO `tbl_tenagaahli` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `bidang_profesi`, `nama_lengkap`, `tanggal_lahir`, `pendidikan`, `jurusan`, `pengalaman_kerja`, `domisili`, `kecamatan`, `kabupaten`, `provinsi`, `deskripsi`, `gaji`, `image`, `created_time`) VALUES
(1, 1, 100, 101, 'Engineering', 'Budiman Santoso', '2022-02-09', 'S2', 'Nuclear Engeneering', '1 - 3 Tahun', 'Inkopad', 'Tajurhalang', 'Bogor', 'Jawa Barat', 'Saya bisa juga mengawasi pengoperasian suatu proyek untuk menjamin prosedur keamanan yang ada.', '6000000', '[\"1663802177_2829bbdb0da81fe252fc.jpg\"]', '2022-09-22 06:16:17'),
(2, 1, 100, 101, 'Engineering', 'Santra Ari', '2022-09-24', 'S3', 'Nuclear Engeneering', '3 - 5 Tahun', 'Inkopad', 'Tajurhalang', 'Bogor', 'Jawa Barat', 'Saya bisa juga mengawasi pengoperasian suatu proyek untuk menjamin prosedur keamanan yang ada.', '', '[\"1663802366_d98873450151c17ec036.jpg\"]', '2022-09-22 06:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tenagaterampil`
--

CREATE TABLE `tbl_tenagaterampil` (
  `id` int(11) NOT NULL,
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
  `image` text NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tenagaterampil`
--

INSERT INTO `tbl_tenagaterampil` (`id`, `nolayanan`, `nosublayanan`, `profesi`, `nama_lengkap`, `tempat_lahir`, `pendidikan`, `pengalaman_kerja`, `domisili`, `kecamatan`, `kabupaten`, `provinsi`, `deskripsi`, `gaji`, `image`, `created_time`) VALUES
(1, 200, 203, 'Perawat Jompo/Lansia', 'Saipul Kufron', '2004-06-09', 'SMP', '1 - 3 Tahun', 'Gang Tengah', 'Majalengka', 'Kertajati', 'Jawa Barat', 'Sabar Dalam Mengurusi', '7000000', '[\"1663811908_f3c284ceec7a3e06dcc1.jpg\",\"1663811908_af53f0a8070df5a37333.jpg\"]', '2022-09-22 08:58:28');

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
  `is_active` int(11) NOT NULL COMMENT '1 = active belum verified 2 = verified',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `gambar` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `generate_code_verifikasi`, `nama`, `tgllahir`, `jeniskelamin`, `nohp`, `email`, `password`, `role`, `alamat`, `deskripsi`, `norek`, `gopay`, `ovo`, `suspend`, `is_active`, `created_at`, `updated_at`, `perusahaan`, `gambar`) VALUES
(7, '1234', 'Achmad Rizky', NULL, NULL, '1234', 'rizky271092@gmail.com', '', 0, '', '0', NULL, NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(9, '1234', 'Ratih', NULL, NULL, '0101', 'ratih@gmail.com', '', 0, '', '0', NULL, NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(12, '1234', 'Achmad Gozali', NULL, NULL, '0858', 'rizky@meenistry.com', '1', 0, '', '0', NULL, NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(14, '1234', 'Buhari', NULL, NULL, '123456789', 'buhari@gmail.com', '', 0, '', '0', NULL, NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(15, '1234', '', NULL, NULL, '081234', NULL, '', 0, '', '0', NULL, NULL, NULL, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(16, '1234', 'Hasan', NULL, NULL, '0858123', 'hasan@gmail.com', '', 0, '', '0', NULL, NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(18, '1708', 'Abdul Fajar', NULL, NULL, '08811501574', 'fajar@gmail.com', 'Fajar', 0, 'Komplek Inkopad Blok O5 No 17', '0', NULL, NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(19, '1893', 'Rizki Kurniawan', NULL, NULL, '085809052137', 'aman@gmail.com', 'iki', 0, 'alamat', 'alamat', NULL, NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(20, '1867', 'Achmad', NULL, NULL, '085894222865', 'rizky271092@gmail.com', '123456', 0, 'Tangerang, Ciledug', 'Toko kami menyediakan, berbagai aneka kebutuhan masak masakan cocok untuk ibu rumah tangga', NULL, NULL, NULL, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);

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
  ADD PRIMARY KEY (`id_slider`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bangunankomersial`
--
ALTER TABLE `tbl_bangunankomersial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_rekomendasi_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_ruko`
--
ALTER TABLE `tbl_ruko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rumah`
--
ALTER TABLE `tbl_rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sublayanan`
--
ALTER TABLE `tbl_sublayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_tanah`
--
ALTER TABLE `tbl_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tenagaahli`
--
ALTER TABLE `tbl_tenagaahli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tenagaterampil`
--
ALTER TABLE `tbl_tenagaterampil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
