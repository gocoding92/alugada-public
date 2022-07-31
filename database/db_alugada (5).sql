-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 03:24 PM
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
-- Table structure for table `tbl_alugada`
--

CREATE TABLE `tbl_alugada` (
  `id` int(11) NOT NULL,
  `hubungikami` varchar(512) NOT NULL,
  `tentangkami` varchar(512) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alugada`
--

INSERT INTO `tbl_alugada` (`id`, `hubungikami`, `tentangkami`, `gambar`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem aperiam, voluptatem iure repudiandae necessitatibus quasi. Exercitationem optio doloribus quibusdam voluptates velit fugit corporis, perferendis laudantium sed quia pariatur blanditiis dignissimos quod incidunt magni ad et unde. Expedita, debitis totam odio voluptatum accusamus, repellat earum quos cumque necessitatibus non numquam. Non.\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem aperiam, voluptatem iure repudiandae necessitatibus quasi. Exercitationem optio doloribus quibusdam voluptates velit fugit corporis, perferendis laudantium sed quia pariatur blanditiis dignissimos quod incidunt magni ad et unde. Expedita, debitis totam odio voluptatum accusamus, repellat earum quos cumque necessitatibus non numquam. Non.\r\n', 'logo.jpg');

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
  `gambar1` varchar(64) NOT NULL,
  `gambar2` varchar(64) NOT NULL,
  `gambar3` varchar(64) NOT NULL,
  `gambar4` varchar(64) NOT NULL,
  `gambar5` varchar(64) NOT NULL,
  `gambar6` varchar(64) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `checked` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `gambar1` varchar(64) NOT NULL,
  `gambar2` varchar(64) NOT NULL,
  `gambar3` varchar(64) NOT NULL,
  `gambar4` varchar(64) NOT NULL,
  `gambar5` varchar(64) NOT NULL,
  `gambar6` varchar(64) NOT NULL,
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

INSERT INTO `tbl_bangunankomersial` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jualsewa`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `deskripsi`, `harga`, `is_active`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 3, 400, 401, 1, 'Rumah mungil di pusat kota Yogyakarta', 75, 50, 'SHM', 1, 900, 1, 'Semaki - Yogyakarta', 'Semaki', 'Kodya Yogyakarta', 'DIY', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 650000000, 1, '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carikerja`
--

CREATE TABLE `tbl_carikerja` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(11) NOT NULL,
  `namalengkap` varchar(64) NOT NULL,
  `tanggallahir` datetime NOT NULL,
  `pendidikan` varchar(8) NOT NULL,
  `jurusan` varchar(32) NOT NULL,
  `pengalamankerja` int(2) NOT NULL,
  `domisilikab` varchar(32) NOT NULL,
  `domisiliprop` varchar(32) NOT NULL,
  `areakerja` varchar(32) NOT NULL,
  `gambar1` varchar(64) NOT NULL,
  `gambar2` varchar(64) NOT NULL,
  `gambar3` varchar(64) NOT NULL,
  `gambar4` varchar(64) NOT NULL,
  `gambar5` varchar(64) NOT NULL,
  `gambar6` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `tbl_jenisproperty`
--

CREATE TABLE `tbl_jenisproperty` (
  `id` int(11) NOT NULL,
  `jenisproperty` varchar(64) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `url` varchar(64) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenisproperty`
--

INSERT INTO `tbl_jenisproperty` (`id`, `jenisproperty`, `gambar`, `url`, `is_active`) VALUES
(1, 'Rumah', 'rumahdijual.png', 'rumah', 1),
(2, 'Tanah', 'tanahdijual.png', 'tanah', 1),
(3, 'Ruko & Rukan', 'rukodijual.png', 'ruko', 1),
(4, 'Rusun & Apartemen', 'apartemendijual.png', 'apartemen', 1),
(5, 'Bangunan komersial', 'komersialjual.png', 'komersial', 1);

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
(7, 600, 'Motor', 'Data Motor', 'motor.png', 'motor', 1);

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
  `gambar1` varchar(64) NOT NULL,
  `gambar2` varchar(64) NOT NULL,
  `gambar3` varchar(64) NOT NULL,
  `gambar4` varchar(64) NOT NULL,
  `gambar5` varchar(64) NOT NULL,
  `gambar6` varchar(64) NOT NULL,
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

INSERT INTO `tbl_ruko` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jualsewa`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `kamarmandi`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `deskripsi`, `harga`, `is_active`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 3, 400, 401, 1, 'Rumah mungil di pusat kota Yogyakarta', 75, 50, 'SHM', 1, 900, 2, 1, 'Semaki - Yogyakarta', 'Semaki', 'Kodya Yogyakarta', 'DIY', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 650000000, 1, '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56');

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
  `gambar1` varchar(64) NOT NULL,
  `gambar2` varchar(64) NOT NULL,
  `gambar3` varchar(64) NOT NULL,
  `gambar4` varchar(64) NOT NULL,
  `gambar5` varchar(64) NOT NULL,
  `gambar6` varchar(64) NOT NULL,
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

INSERT INTO `tbl_rumah` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jenispengiklan`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `ruangtamu`, `ruangkeluarga`, `kamartidur`, `kamarpembantu`, `kamarmandi`, `teras`, `taman`, `aksesmobil`, `garasi`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `deskripsi`, `harga`, `is_active`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 3, 400, 401, 1, 'Rumah mungil di pusat kota Yogyakarta', 75, 50, 'SHM', 1, 900, 'ada', 'ada', 2, 1, 2, 'ada', 'Tidak ada', 'masuk', '0', '1', 'Semaki - Yogyakarta', 'Semaki', 'Kodya Yogyakarta', 'DIY', 'defaultrumah.jfif', 'defaultrumah.jfif', 'defaultrumah.jfif', 'defaultrumah.jfif', 'defaultrumah.jfif', 'defaultrumah.jfif', 'Rumah Mungil di tengah kota Yogyakarta', 650000000, 1, '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56');

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
(2, 200, 201, 'Driver', 'driver.png', 'driver', 1),
(3, 300, 301, 'Info Kost & Kontrakan', 'kost.png', 'kost-kontrakan', 1),
(4, 400, 401, 'Rumah', 'rumah.png', 'rumah', 1),
(5, 500, 501, 'Mobil', 'mobil.png', 'Mobil', 1),
(6, 600, 601, 'Motor', 'motor.png', 'motor', 1),
(16, 100, 102, 'Production', 'production.png', 'production', 1),
(17, 100, 103, 'Construction', 'construction.png', 'construction', 1),
(18, 100, 104, 'Finance', 'finance.png', 'finance', 1),
(19, 100, 105, 'Marketing', 'marketing.png', 'marketing', 1),
(20, 100, 106, 'Programming', 'programming.png', 'programming', 1),
(21, 200, 202, 'Babysitter', 'babysitter.png', 'babysitter', 1),
(22, 200, 203, 'Perawat Lansia', 'perawatlansia.png', 'perawatlansia', 1),
(23, 200, 204, 'Asisten Rumah Tangga', 'art.png', 'art', 1),
(24, 200, 205, 'Office Boy - Girl', 'ob.png', 'ob', 1),
(25, 400, 402, 'Tanah', 'tanah.png', 'tanah', 1),
(26, 400, 403, 'Apartemen', 'apartemen.png', 'apartemen', 1),
(27, 400, 404, 'Ruko', 'ruko.png', 'ruko', 1),
(28, 400, 405, 'Bangunan Komersial', 'komersial.png', 'komersial', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sublayanan99`
--

CREATE TABLE `tbl_sublayanan99` (
  `id` int(11) NOT NULL,
  `nolayanan` int(11) NOT NULL,
  `nosublayanan` int(11) NOT NULL,
  `sublayanan` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sublayanan99`
--

INSERT INTO `tbl_sublayanan99` (`id`, `nolayanan`, `nosublayanan`, `sublayanan`, `gambar`, `url`, `is_active`) VALUES
(1, 100, 101, 'Engineering', 'engineering.png', 'engineering', 1),
(5, 100, 102, 'Production', 'production.png', 'production', 0),
(6, 100, 103, 'Construction', 'construction.png', 'construction', 1),
(7, 100, 104, 'Marketing', 'marketing.png', 'marketing', 1),
(8, 100, 105, 'Finance', 'finance.png', 'finance', 1),
(9, 200, 201, 'Driver', 'driver.png', 'driver', 1),
(10, 300, 301, 'Info Rumah Kost', 'kost.png', 'kost', 1),
(11, 400, 401, 'Rumah Dijual', 'rumahdijual.png', 'rumah-jual-sewa', 1),
(12, 500, 501, 'Rumah Disewakan', 'rumahdisewakan.png', 'rumah-jual-sewa', 1),
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
  `gambar2` varchar(64) NOT NULL,
  `gambar3` varchar(64) NOT NULL,
  `gambar4` varchar(64) NOT NULL,
  `gambar5` varchar(64) NOT NULL,
  `gambar6` varchar(64) NOT NULL,
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

INSERT INTO `tbl_tanah` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jualsewa`, `juduliklan`, `luastanah`, `kepemilikan`, `aksesmobil`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `deskripsi`, `harga`, `is_active`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 3, 400, 401, 1, 'Rumah mungil di pusat kota Yogyakarta', 75, 'SHM', 'masuk', 'Semaki - Yogyakarta', 'Semaki', 'Kodya Yogyakarta', 'DIY', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 'default.jfif', 650000000, 1, '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56');

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
  `perusahaan` varchar(255) DEFAULT NULL,
  `gambar` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `tgllahir`, `jeniskelamin`, `nohp`, `email`, `password`, `role`, `norek`, `gopay`, `ovo`, `suspend`, `is_active`, `created_at`, `updated_at`, `perusahaan`, `gambar`) VALUES
(1, 'Pakde Harto', NULL, NULL, '08111041381', 'suharto.muh@gmail.com', '1234', 1, NULL, NULL, NULL, 0, 1, '2022-06-23 16:24:43', '2022-06-23 16:24:43', NULL, 'pengunjung.png'),
(2, 'Login/Daftar', NULL, NULL, '123', NULL, '234234', 10, NULL, NULL, NULL, 0, 1, '2022-06-23 16:27:37', '2022-06-23 16:27:37', NULL, 'pengunjung.png'),
(3, 'Bambang', '1977-04-11', '', '081310419181', 'bambang@yahoo.com', '1234', 10, NULL, NULL, NULL, 0, 1, '2022-07-11 13:32:08', '2022-07-11 13:32:08', 'Personal', 'foto4.jfif'),
(19, 'Bambang Gentolet', NULL, NULL, '081110413812', NULL, '1234', 10, NULL, NULL, NULL, 0, 1, '2022-07-30 19:18:51', '2022-07-30 19:18:51', NULL, 'pengunjung.png'),
(20, 'Didik nini thowok', '2022-07-02', NULL, '081110413819', NULL, '12345', 10, NULL, NULL, NULL, 0, 1, '2022-07-30 19:32:11', '2022-07-30 19:32:11', 'abcd', '__Search-House.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alugada`
--
ALTER TABLE `tbl_alugada`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_carikerja`
--
ALTER TABLE `tbl_carikerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenisiklan`
--
ALTER TABLE `tbl_jenisiklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenisproperty`
--
ALTER TABLE `tbl_jenisproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_sublayanan`
--
ALTER TABLE `tbl_sublayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sublayanan99`
--
ALTER TABLE `tbl_sublayanan99`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tanah`
--
ALTER TABLE `tbl_tanah`
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
-- AUTO_INCREMENT for table `tbl_alugada`
--
ALTER TABLE `tbl_alugada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_apartemen`
--
ALTER TABLE `tbl_apartemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bangunankomersial`
--
ALTER TABLE `tbl_bangunankomersial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_carikerja`
--
ALTER TABLE `tbl_carikerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenisiklan`
--
ALTER TABLE `tbl_jenisiklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jenisproperty`
--
ALTER TABLE `tbl_jenisproperty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_ruko`
--
ALTER TABLE `tbl_ruko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rumah`
--
ALTER TABLE `tbl_rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sublayanan`
--
ALTER TABLE `tbl_sublayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_sublayanan99`
--
ALTER TABLE `tbl_sublayanan99`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_tanah`
--
ALTER TABLE `tbl_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
