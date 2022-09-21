-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2022 at 09:37 AM
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
(1, 0, 400, 403, 'Apartemen Jakarta', 800, 'HGB', 2, 3, 300, 'jakarta', 'tajurhalang', 'bogor', 'jawa barat', '', 'apartemen luas', 200000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, 0, 0, 'Apartemen kasablangka', 400, 'SHM Strata tittle', 30, 2, 3, 'Jakarta', 'tajurhalang', 'bogor', 'jawa barat', '[\"1662604710_c6606dece3b00cc32243.jpg\"]', 'Apartemen Bagus', 200000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 3, 400, 405, 1, 'Rumah mungil di pusat kota Yogyakarta', 75, 50, 'SHM', 1, 900, 1, 'Semaki - Yogyakarta', 'Semaki', 'Kodya Yogyakarta', 'DIY', 'default.jfif', 'default.jfif', 650000000, 1, '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56'),
(2, 0, 0, 0, 0, 'rumah samudra', 21, 34, 'Lainnya', 2, 3, 2, 'tajur', 'tajurhalang', 'bogor', 'jawa barat', '', 'dijual bangunan', 200000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, 0, 0, 0, 'Bangunan komersial', 3000, 4999, 'SHM Strata tittl', 7, 7000, 40, 'Di kampung Durian runtuh', 'tajurhalang', 'bogor', 'jawa barat', '[\"1662604074_240358613f28db5f3a36.jpg\"]', 'Bangunan Kokoh', 200000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iklancarikerja`
--

CREATE TABLE `tbl_iklancarikerja` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(11) NOT NULL,
  `nosublayanan` int(11) NOT NULL,
  `namalengkap` varchar(64) NOT NULL,
  `tanggallahir` datetime DEFAULT NULL,
  `pendidikan` varchar(8) DEFAULT NULL,
  `jurusan` varchar(32) DEFAULT NULL,
  `pengalamankerja` int(2) DEFAULT NULL,
  `domisilikab` varchar(32) DEFAULT NULL,
  `domisiliprop` varchar(32) DEFAULT NULL,
  `areakerja` varchar(32) DEFAULT NULL,
  `gambar1` varchar(64) DEFAULT NULL,
  `gambar2` varchar(64) DEFAULT NULL,
  `gambar3` varchar(64) DEFAULT NULL,
  `gambar4` varchar(64) DEFAULT NULL,
  `gambar5` varchar(64) DEFAULT NULL,
  `gambar6` varchar(64) DEFAULT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_iklancarikerja`
--

INSERT INTO `tbl_iklancarikerja` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `namalengkap`, `tanggallahir`, `pendidikan`, `jurusan`, `pengalamankerja`, `domisilikab`, `domisiliprop`, `areakerja`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `is_active`) VALUES
(1, 3, 100, 101, 'Didik Nini Thowok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 2, 200, 201, 'Bambang Gentolet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 3, 200, 201, 'Dina Mariana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 2, 200, 201, 'Cici paramida', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iklankost`
--

CREATE TABLE `tbl_iklankost` (
  `id` int(11) NOT NULL,
  `nopengiklan` int(11) NOT NULL,
  `nolayanan` int(11) NOT NULL,
  `nosublayanan` int(11) NOT NULL,
  `juduliklan` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iklanmobilmotor`
--

CREATE TABLE `tbl_iklanmobilmotor` (
  `id` int(11) NOT NULL,
  `idpengiklan` int(11) NOT NULL,
  `nolayanan` int(11) NOT NULL,
  `nosublayanan` int(11) NOT NULL,
  `juduliklan` varchar(255) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_iklanmobilmotor`
--

INSERT INTO `tbl_iklanmobilmotor` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `juduliklan`, `is_active`) VALUES
(1, 3, 500, 501, 'Dijual Mobil Antik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iklanproperty`
--

CREATE TABLE `tbl_iklanproperty` (
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
-- Dumping data for table `tbl_iklanproperty`
--

INSERT INTO `tbl_iklanproperty` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `jenispengiklan`, `juduliklan`, `luastanah`, `luasbangunan`, `kepemilikan`, `jumlahlantai`, `listrik`, `ruangtamu`, `ruangkeluarga`, `kamartidur`, `kamarpembantu`, `kamarmandi`, `teras`, `taman`, `aksesmobil`, `garasi`, `carport`, `lokasi`, `kecamatan`, `kabupaten`, `propinsi`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `deskripsi`, `harga`, `is_active`, `checked1`, `checked2`, `created_at`, `updated_at`) VALUES
(1, 3, 400, 401, 1, 'Rumah mungil di pusat kota Yogyakarta', 75, 50, 'SHM', 1, 900, 'ada', 'ada', 2, 1, 2, 'ada', 'Tidak ada', 'masuk', '0', '1', 'Semaki - Yogyakarta', 'Semaki', 'Kodya Yogyakarta', 'DIY', 'defaultrumah.jfif', 'defaultrumah.jfif', 'defaultrumah.jfif', 'defaultrumah.jfif', 'defaultrumah.jfif', 'defaultrumah.jfif', 'Rumah Mungil di tengah kota Yogyakarta', 650000000, 1, '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56'),
(2, 2, 300, 301, 1, 'Kost Ekslusif di Jakarta Selatan', 0, 0, '', 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, NULL, NULL, NULL, NULL),
(3, 2, 400, 401, 1, 'Dijual Ruham Besar', 0, 0, '', 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, NULL, NULL, NULL, NULL);

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
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kostkontrakan`
--

INSERT INTO `tbl_kostkontrakan` (`id`, `nolayanan`, `nosublayanan`, `judul_iklan`, `jumlah_kamar`, `kamar_kosong`, `listrik`, `kamar_mandi`, `ac`, `water_heater`, `tempat_tidur`, `meja_kursi`, `almari`, `alamat_lokasi`, `kecamatan`, `kabupaten`, `provinsi`, `harga`, `perbulan`, `image`) VALUES
(1, 0, 0, 'Kost Kontrakan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 0, 0, 'kontrakan kamar 2', '2', '3', '', '', '', '', '', '', '', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '200000', '', ''),
(3, 0, 0, 'kos', '2', '4', 'Token tiap kamar/kontrakan', '', '', '', '', '', '', 'sda', 'das', 'sda', 'sad', '200000', '', ''),
(4, 0, 0, 'Tempat tidur', '5', '2', 'Gabung rumah induk', 'Kamar mandi dalam', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '200000', '', ''),
(5, 0, 0, 'Meja', '2', '3', 'Token tiap kamar/kontrakan', 'Diluar / bersama', 'Tidak ada', 'Ada', 'Ada', 'Ada', 'Ada', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '200000', 'Per Tahun', ''),
(6, 0, 0, '', '', '', '-- Silahkan Pilih --', '-- Silahkan Pilih --', '-- Silahkan Pilih --', '-- Silahkan Pilih --', '-- Silahkan Pilih --', '-- Silahkan Pilih --', '-- Silahkan Pilih --', '', '', '', '', '', '-- Silahkan Pilih --', ''),
(7, 300, 301, 'Kost & Kontrakan	', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 300, 302, 'Kontrakan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 0, 0, 'Kontrakan 6 pintu', '4', '4', 'Token tiap kamar/kontrakan', 'Kamar mandi dalam', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '200000', 'Per Bulan', '[\"1662605246_4ebfd7251f103cab7fbe.jpg\"]'),
(10, 0, 0, 'kost ', '2', '3', 'Gabung rumah induk', 'Kamar mandi dalam', 'Ada', 'Ada', 'Tidak ada', 'Tidak ada', 'Tidak ada', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '200000', 'Per Tahun', '[\"1662609263_b7a62792aa6a34bae8aa.jpg\"]'),
(11, 0, 0, 'Kontrakan panjang', '4', '4', 'Token tiap kamar/kontrakan', 'Kamar mandi dalam', 'Tidak ada', 'Tidak ada', 'Ada', 'Ada', 'Ada', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '200000', 'Per Bulan', '[\"1662609490_b6ec4b2da62f7c5ca7c0.jpg\"]'),
(12, 0, 0, 'Kontrakan panjang', '4', '4', 'Token tiap kamar/kontrakan', 'Kamar mandi dalam', 'Tidak ada', 'Tidak ada', 'Ada', 'Ada', 'Ada', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '200000', 'Per Bulan', '[\"1662609539_f8577362d21d798b3e7b.jpg\"]');

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
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id`, `nolayanan`, `nosublayanan`, `judul_iklan`, `merk`, `type`, `tahun`, `warna`, `plat`, `odometer`, `bahan_bakar`, `lokasi`, `kecamatan`, `kabupaten`, `provinsi`, `image`, `deskripsi`, `harga`) VALUES
(1, 0, 0, 'mobil galardo', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 0, 0, 'mobil ', 'avanza 1010', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 0, 0, 'mobil', 'avanza', '2wk', '2010', 'merah', 'rrea1', '1', 'solar', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '', 'dijual', '20000'),
(4, 500, 501, 'Mobil', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 0, 0, 'Mobil ', 'Avanza', 'bodong', '2010', 'merah', 'Plm123', '2', 'pertalite', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '[\"1662605998_f734ff7a2a98e6925c7a.jpg\"]', 'Dijual cepat', '200000');

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
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_motor`
--

INSERT INTO `tbl_motor` (`id`, `nolayanan`, `nosublayanan`, `judul_iklan`, `merk`, `type`, `tahun`, `warna`, `plat`, `odometer`, `bahan_bakar`, `lokasi`, `kecamatan`, `kabupaten`, `provinsi`, `image`, `gambar6`, `deskripsi`, `harga`) VALUES
(1, 0, 0, 'Motor Ninja ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 0, 0, 'motor mio', 'smile', 'bodong', '2010', 'merah', 'Plm123', '2', 'pertalite', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '', '', 'dijual mtr mio dengan surat surat', '200000'),
(3, 500, 502, 'Motor', 'lorem', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 0, 0, 'Motor Ninja ', 'smile', '1010', '2010', 'merah', 'bcwhj12', '2', 'pertalite', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '[\"1662605719_b720cdc68ce4e2a50698.jpg\"]', '', 'dijual cepat', '200000'),
(5, 0, 0, 'Motor Ninja ', 'Avanza', 'bodong', '2010', 'merah', 'bcwhj12', '2', 'pertalite', 'inkopad', 'tajurhalang', 'bogor', 'jawa barat', '[\"1662608985_97b53871385cb3237e62.jpg\"]', '', 'siap jual cepat', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekomendasi_iklan`
--

CREATE TABLE `tbl_rekomendasi_iklan` (
  `id_rekomendasi_iklan` int(11) NOT NULL,
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

INSERT INTO `tbl_rekomendasi_iklan` (`id_rekomendasi_iklan`, `type_rekomendasi_iklan`, `id_iklan`, `nama_iklan`, `description`, `alamat`, `image`, `table_iklan`, `create_at`) VALUES
(1, 'motor', 3, 'Daihatsu Ayla', 'Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311\r\n', 'Kebayoran Lama, Jakarta Selatan', '', '', '2022-09-08 05:23:33'),
(2, 'mobil', 4, 'Daihatsu Ayla', 'Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311\r\n', 'Kebayoran Lama, Jakarta Selatan', '', '', '2022-09-08 05:23:33'),
(3, 'motor', 3, 'Daihatsu Ayla', 'Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311\r\n', 'Kebayoran Lama, Jakarta Selatan', '', '', '2022-09-08 05:23:33'),
(4, 'mobil', 4, 'Daihatsu Ayla', 'Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311\r\n', 'Kebayoran Lama, Jakarta Selatan', '', '', '2022-09-08 05:23:33'),
(5, 'tenaga_ahli', 1, 'achmad sakhoji', 'Engineering 2022-09-21 S1', 'tajurhalang tajurhalang bogor jawa barat', '[\"1662602018_4c6cc238486775c98925.jpg\"]', '', '2022-09-08 08:53:38'),
(6, 'tenaga_terampil', 1, 'achmad sakhoji', 'Babysitter 2022-09-23 SMA 1 - 3 Tahun', 'tajurhalang tajurhalang bogor jawa barat', '[\"1662602469_bea1aad076c03d6cb839.jpg\"]', '', '2022-09-08 09:01:09'),
(7, 'tenaga_terampil', 1, 'rumah samudra', '3 4 Sertifikat 3 300 Ada Ada 3 3 3 Ada Ada Masuk Mobil 3 3 baguss', 'blok o5no 17 tajurhalang bogor jawa barat', '[\"1662603058_6484549eccd8cc19ae01.jpg\"]', '', '2022-09-08 09:10:58'),
(8, 'tanah', 1, 'Tanah Kusir', '300 Sertifikat Masuk Mobil', 'Perumahan kalisuren deket masjid tajurhalang bogor jawa barat', '[\"1662603745_347d1d0c9039bc3497c2.jpg\"]', '', '2022-09-08 09:22:25'),
(9, 'tanah', 1, 'Bangunan komersial', '3000 4999 SHM Strata tittle77000 40Bangunan Kokoh', 'Di kampung Durian runtuh tajurhalang bogor jawa barat', '[\"1662604074_240358613f28db5f3a36.jpg\"]', '', '2022-09-08 09:27:54'),
(10, 'ruko', 1, 'Ruko kecil', '300 399 SHM Strata tittle544443 4Ruko masih bagus untuk berjualan', 'kampung hutan tajurhalang bogor jawa barat', '[\"1662604429_5f0a8b405f559611b556.jpg\"]', '', '2022-09-08 09:33:49'),
(11, 'apartemen', 1, 'Apartemen kasablangka', '400 SHM Strata tittle30 2 3Apartemen Bagus', 'Jakarta tajurhalang bogor jawa barat', '[\"1662604710_c6606dece3b00cc32243.jpg\"]', '', '2022-09-08 09:38:30'),
(12, 'bangunan_komersial', 1, 'Kontrakan 6 pintu', '4 4 Token tiap kamar/kontrakan Kamar mandi dalam AdaAdaAdaAdaAda', 'inkopad tajurhalang bogor jawa barat', '[\"1662605246_4ebfd7251f103cab7fbe.jpg\"]', '', '2022-09-08 09:47:26'),
(13, 'motor', 1, 'Motor Ninja ', 'smile 1010 2010merahbcwhj12 2pertalitedijual cepat', 'inkopad tajurhalang bogor jawa barat', '[\"1662605719_b720cdc68ce4e2a50698.jpg\"]', '', '2022-09-08 09:55:19'),
(14, 'mobil', 1, 'Mobil ', 'Avanza bodong 2010merahPlm123 2pertaliteDijual cepat', 'inkopad tajurhalang bogor jawa barat', '[\"1662605998_f734ff7a2a98e6925c7a.jpg\"]', '', '2022-09-08 09:59:58'),
(15, 'motor', 1, 'Motor Ninja ', 'Avanza bodong 2010merahbcwhj12 2pertalitesiap jual cepat', 'inkopad tajurhalang bogor jawa barat', '[\"1662608985_97b53871385cb3237e62.jpg\"]', '200000', '2022-09-08 10:49:46'),
(16, 'kost&kontrakan', 1, 'kost ', '2 3 Gabung rumah induk Kamar mandi dalam AdaAdaTidak adaTidak adaTidak ada', 'inkopad tajurhalang bogor jawa barat', '[\"1662609263_b7a62792aa6a34bae8aa.jpg\"]', '200000', '2022-09-08 10:54:23'),
(17, 'kost&kontrakan', 1, 'Kontrakan panjang', '4 4 Token tiap kamar/kontrakan Kamar mandi dalam Tidak adaTidak adaAdaAdaAda', 'inkopad tajurhalang bogor jawa barat', '[\"1662609490_b6ec4b2da62f7c5ca7c0.jpg\"]', 'tbl_kostkontrakan', '2022-09-08 10:58:10'),
(18, 'kost&kontrakan', 1, 'Kontrakan panjang', '4 4 Token tiap kamar/kontrakan Kamar mandi dalam Tidak adaTidak adaAdaAdaAda', 'inkopad tajurhalang bogor jawa barat', '[\"1662609539_f8577362d21d798b3e7b.jpg\"]', 'tbl_kostkontrakan', '2022-09-08 10:59:00'),
(19, 'tenaga_terampil', 1, 'Abdul rahman', 'Driver 2022-09-24 SMP < 1 Tahun', 'tajurhalang tajurhalang bogor jawa barat', '[\"1662609903_235644b4dd66956cf494.jpg\"]', 'tbl_tenagaterampil', '2022-09-08 11:05:03');

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
(1, 3, 400, 404, 1, 'Rumah mungil di pusat kota Yogyakarta', 75, 50, 'SHM', 1, 900, 2, 1, 'Semaki - Yogyakarta', 'Semaki', 'Kodya Yogyakarta', 'DIY', 'default.jfif', 'default.jfif', 650000000, 1, '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56'),
(2, 0, 0, 0, 0, 'rumah samudra', 12, 31, 'HGB', 0, 4334, 3, 1, 'tajur', 'tajurhalang', 'bogor', 'jawa barat', '', 'Ruko kecil', 200000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, 0, 0, 0, 'Ruko kecil', 300, 399, 'SHM Strata tittl', 5, 4444, 3, 4, 'kampung hutan', 'tajurhalang', 'bogor', 'jawa barat', '[\"1662604429_5f0a8b405f559611b556.jpg\"]', 'Ruko masih bagus untuk berjualan', 200000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 3, 400, 401, 1, 'Rumah mungil di pusat kota Yogyakarta', 75, 50, 'SHM', 1, 900, 'ada', 'ada', 2, 1, 2, 'ada', 'Tidak ada', 'masuk', '0', '1', 'Semaki - Yogyakarta', 'Semaki', 'Kodya Yogyakarta', 'DIY', 'defaultrumah.jfif', 'Rumah Mungil di tengah kota Yogyakarta', 650000000, 1, '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56'),
(4, 0, 0, 0, 0, 'Rumah Luas di daerah yasmin bogor', 80, 100, 'AJB', 4, 800, 'Ada', 'Ada', 4, 2, 2, 'Ada', 'Ada', 'Masuk Mobil', '5', '2', 'Daerah yasmin', 'tajurhalang', 'bogor', 'jawa barat', '', 'rumah besar dijual', 200000, 0, NULL, NULL, NULL, NULL),
(5, 0, 0, 0, 0, 'rumah samudra', 3, 4, 'Sertifikat', 3, 300, 'Ada', 'Ada', 3, 3, 3, 'Ada', 'Ada', 'Masuk Mobil', '3', '3', 'blok o5no 17', 'tajurhalang', 'bogor', 'jawa barat', '[\"1662603058_6484549eccd8cc19ae01.jpg\"]', 'baguss', 200000, 0, NULL, NULL, NULL, NULL);

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
(1, 100, 101, 'Engineering ', 'guru.png', 'tenaga_ahli', 1),
(2, 200, 201, 'Driver', 'driver.png', 'tenaga_terampil', 1),
(3, 300, 301, 'Kost & Kontrakan', 'kost.jpg', 'kost_kontrakan', 1),
(4, 400, 401, 'Rumah', 'rumah.png', 'rumah', 1),
(5, 500, 501, 'Mobil', 'mobil.png', 'mobil', 1),
(6, 600, 601, 'Motor', 'motor.png', 'motor', 0),
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
(30, 300, 302, 'Kontrakan', 'kontrakan_1.png', 'kontrakan', 0),
(31, 500, 502, 'Motor', 'motordijual_1.png', 'motor', 1);

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
(1, 3, 400, 402, 1, 'Rumah mungil di pusat kota Yogyakarta', 75, 'SHM', 'masuk', 'Semaki - Yogyakarta', 'Semaki', 'Kodya Yogyakarta', 'DIY', 'default.jfif', 'default.jfif', '', 'default.jfif', 650000000, 1, '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56', '2022-07-14 18:03:56'),
(2, 0, 0, 0, 0, 'Tanah Liat', 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, 0, 0, 0, 'rumah samudra', 89, 'AJB', 'Masuk Mobil', 'tajuur', 'tajurhalang', 'bogor', 'jawa barat', '', '', '', 'tanah luas 1 meter', 200000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 0, 0, 0, 0, 'Tanah Kusir', 300, 'Sertifikat', 'Masuk Mobil', 'Perumahan kalisuren deket masjid', 'tajurhalang', 'bogor', 'jawa barat', '', '', '[\"1662603745_347d1d0c9039bc3497c2.jpg\"]', 'Tanah Kurang lebih panjang 3 meter, lebar 2 meter', 200000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tenagaahli`
--

INSERT INTO `tbl_tenagaahli` (`id`, `idpengiklan`, `nolayanan`, `nosublayanan`, `bidang_profesi`, `nama_lengkap`, `tanggal_lahir`, `pendidikan`, `jurusan`, `pengalaman_kerja`, `domisili`, `kecamatan`, `kabupaten`, `provinsi`, `deskripsi`, `gaji`, `image`) VALUES
(1, 0, 0, 0, 'Production', '', '', '', '', '1 - 3 Tahun', '', '', '', '', '', '', ''),
(2, 0, 0, 0, 'Marketing', 'Abdul rahman', '2022-08-04', 'S1', 'Akutansi', '7 Tahun', '', '', '', '', '', '', ''),
(3, 0, 0, 0, 'Production', 'achmad sakhoji', '2022-08-19', 'S2', 'Teknik informatika', '3 - 5 Tahun', 'tajurhalang', 'tajurhalang', 'bogor', 'jawa barat', 'menguasai apa yang ingin dikuasai', '40000000', ''),
(4, 0, 100, 101, 'Engeneriing data', 'lorem', 'lorem', '', '', '', '', '', '', '', '', '', ''),
(5, 0, 100, 102, 'Production', 'lorem ', 'lorem', 'lorem', 'lorem', 'lorem', 'lorem', '', '', '', '', '', ''),
(6, 0, 100, 103, 'Construction', 'lorem', 'lorem', '', '', '', '', '', '', '', '', '', ''),
(7, 0, 100, 104, 'Finance', 'lorem', '', '', '', '', '', '', '', '', '', '', ''),
(8, 0, 100, 105, 'Marketing', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 0, 100, 106, 'Programming', 'lorem', '', '', '', '', '', '', '', '', '', '', ''),
(10, 0, 100, 102, 'Engineering', 'achmad sakhoji', '', '', '', '', '', '', '', '', '', '', '[\"1662567509_0884e117115a7d34fbfb.png\"]'),
(11, 1, 100, 102, '', 'Abdul rahman 8', '', '', '', '', '', '', '', '', '', '', '[\"1662567727_3f9eed785684ca02826e.png\"]'),
(12, 1, 100, 102, '', '', '', '', '', '', '', '', '', '', '', '', '[\"1662601095_4a2164a7f9f59a4058e6.jpg\"]'),
(13, 1, 100, 102, 'Engineering', 'achmad sakhoji', '2022-09-21', 'S1', 'Akutansi', '3 - 5 Tahun', 'tajurhalang', 'tajurhalang', 'bogor', 'jawa barat', 's1 ekonomi', '500000', '[\"1662602018_4c6cc238486775c98925.jpg\"]');

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
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tenagaterampil`
--

INSERT INTO `tbl_tenagaterampil` (`id`, `nolayanan`, `nosublayanan`, `profesi`, `nama_lengkap`, `tempat_lahir`, `pendidikan`, `pengalaman_kerja`, `domisili`, `kecamatan`, `kabupaten`, `provinsi`, `deskripsi`, `gaji`, `image`) VALUES
(1, 0, 0, 'Babysitter', '', '', '', '', '', '', '', '', '', '', ''),
(2, 0, 0, 'Babysitter', '', '', '', '', '', '', '', '', '', '', ''),
(3, 0, 0, 'Babysitter', 'achmad sakhoji', '2022-08-11', 'SMP', '1 - 3 Tahun', 'tajurhalang', 'tajurhalang', 'bogor', 'jawa barat', 'babysister', '4535', ''),
(4, 200, 201, 'Driver', '', '', '', '', '', '', '', '', '', '', ''),
(5, 200, 202, 'Babysitter', '', '', '', '', '', '', '', '', '', '', ''),
(6, 200, 203, 'Perawat Lansia', '', '', '', '', '', '', '', '', '', '', ''),
(7, 200, 204, 'Asisten Rumah Tangga', '', '', '', '', '', '', '', '', '', '', ''),
(8, 200, 205, 'Office Boy - Girl', '', '', '', '', '', '', '', '', '', '', ''),
(9, 0, 0, 'Babysitter', 'achmad sakhoji', '2022-09-23', 'SMA', '1 - 3 Tahun', 'tajurhalang', 'tajurhalang', 'bogor', 'jawa barat', 'Pengalaman', '', '[\"1662602469_bea1aad076c03d6cb839.jpg\"]'),
(10, 0, 0, 'Driver', 'Abdul rahman', '2022-09-24', 'SMP', '< 1 Tahun', 'tajurhalang', 'tajurhalang', 'bogor', 'jawa barat', 'sabar, teliti', '2300000000', '[\"1662609903_235644b4dd66956cf494.jpg\"]');

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
-- Indexes for table `tbl_iklancarikerja`
--
ALTER TABLE `tbl_iklancarikerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_iklankost`
--
ALTER TABLE `tbl_iklankost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_iklanmobilmotor`
--
ALTER TABLE `tbl_iklanmobilmotor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_iklanproperty`
--
ALTER TABLE `tbl_iklanproperty`
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
-- AUTO_INCREMENT for table `tbl_alugada`
--
ALTER TABLE `tbl_alugada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_apartemen`
--
ALTER TABLE `tbl_apartemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_bangunankomersial`
--
ALTER TABLE `tbl_bangunankomersial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_iklancarikerja`
--
ALTER TABLE `tbl_iklancarikerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_iklankost`
--
ALTER TABLE `tbl_iklankost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_iklanmobilmotor`
--
ALTER TABLE `tbl_iklanmobilmotor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_iklanproperty`
--
ALTER TABLE `tbl_iklanproperty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `tbl_kostkontrakan`
--
ALTER TABLE `tbl_kostkontrakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_motor`
--
ALTER TABLE `tbl_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_rekomendasi_iklan`
--
ALTER TABLE `tbl_rekomendasi_iklan`
  MODIFY `id_rekomendasi_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_ruko`
--
ALTER TABLE `tbl_ruko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rumah`
--
ALTER TABLE `tbl_rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sublayanan`
--
ALTER TABLE `tbl_sublayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_sublayanan99`
--
ALTER TABLE `tbl_sublayanan99`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_tanah`
--
ALTER TABLE `tbl_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tenagaahli`
--
ALTER TABLE `tbl_tenagaahli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_tenagaterampil`
--
ALTER TABLE `tbl_tenagaterampil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;