-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 09:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp_consignment_v2`
--
CREATE DATABASE IF NOT EXISTS `sdp_consignment_v2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sdp_consignment_v2`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `ADMINP_ID` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `NAMA_ADMINP` char(50) DEFAULT NULL,
  `PASSWORD_ADMINP` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ADMINP_ID`, `email`, `NAMA_ADMINP`, `PASSWORD_ADMINP`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0', 'admin1@admin.com', 'admin1', 'admin1', '2020-11-04', '2020-11-12', NULL),
('1', 'admin2@admin.com', 'admin2', 'admin2', '2020-11-04', '2020-11-04', NULL),
('2', 'admin3@admin.com', 'admin3', 'admin3', '2020-11-04', '2020-11-04', NULL),
('3', 'admin4@admin.com', 'admin4', 'admin4', '2020-11-12', '2020-11-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE `banks` (
  `bank_id` int(11) NOT NULL,
  `nama_bank` varchar(30) DEFAULT NULL,
  `rekening` varchar(20) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bank_id`, `nama_bank`, `rekening`, `pemilik`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bank Rakyat Indonesia', '5230001', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(2, 'Bank MandirI', '5230002', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(3, 'Bank Central Asia ', '5230003', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(4, 'Bank Negara Indonesia', '5230004', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(5, 'Bank Tabungan Negara', '5230005', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(6, 'Bank CIMB Niaga', '5230006', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(7, 'Bank BTPN', '5230007', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(8, 'Panin Bank', '5230008', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(9, 'Bank OCBC NISP', '5230009', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(10, 'Bank Maybank Indonesia', '5230010', 'Michael Louis Chandra', '2020-11-11', '2020-11-11', NULL),
(11, 'Jenius', '5230011', 'Michael Louis Chandra', '2020-11-04', '2020-11-04', NULL),
(12, 'Bank BRI Syariah', '52300112', 'Michael Louis Chandra', '2020-11-12', '2020-11-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenisbarangs`
--

DROP TABLE IF EXISTS `jenisbarangs`;
CREATE TABLE `jenisbarangs` (
  `JENIS_ID` varchar(5) NOT NULL,
  `NAMA_JENIS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisbarangs`
--

INSERT INTO `jenisbarangs` (`JENIS_ID`, `NAMA_JENIS`) VALUES
('1', 'Headset'),
('2', 'Mouse'),
('3', 'Keyboard'),
('4', 'Laptop'),
('5', 'Wallet');

-- --------------------------------------------------------

--
-- Table structure for table `merkbarangs`
--

DROP TABLE IF EXISTS `merkbarangs`;
CREATE TABLE `merkbarangs` (
  `MERK_ID` varchar(5) NOT NULL,
  `NAMA_MERK2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merkbarangs`
--

INSERT INTO `merkbarangs` (`MERK_ID`, `NAMA_MERK2`) VALUES
('1', 'Logitech'),
('2', 'Razer'),
('3', 'SteelSeries'),
('4', 'Tazer');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuans`
--

DROP TABLE IF EXISTS `pengajuans`;
CREATE TABLE `pengajuans` (
  `ADMINP_ID` varchar(10) DEFAULT NULL,
  `MERK_ID` varchar(5) DEFAULT NULL,
  `PENGAJUAN_ID` int(5) NOT NULL,
  `USERPB_ID` varchar(5) DEFAULT NULL,
  `email_penjual` varchar(1000) NOT NULL,
  `TRANSAKSI_ID` varchar(5) DEFAULT NULL,
  `JENIS_ID` varchar(5) DEFAULT NULL,
  `NAMA_BARANG` varchar(25) DEFAULT NULL,
  `TGL_PENGAJUAN` datetime DEFAULT NULL,
  `WARNA_BARANGP` varchar(15) DEFAULT NULL,
  `FUNGSIONALITAS` varchar(100) DEFAULT NULL,
  `DESKRIPSI_BARANG` varchar(100) DEFAULT NULL,
  `STATUS_PENGAJUAN` varchar(1) DEFAULT NULL,
  `STATUS_BARANG` varchar(1) DEFAULT NULL,
  `FOTO_KIRI` varchar(1000) DEFAULT NULL,
  `FOTO_KANAN` varchar(1000) DEFAULT NULL,
  `FOTO_ATAS` varchar(1000) DEFAULT NULL,
  `FOTO_BAWAH` varchar(1000) DEFAULT NULL,
  `FOTO_DEPAN` varchar(1000) DEFAULT NULL,
  `FOTO_BELAKANG` varchar(1000) DEFAULT NULL,
  `HARGA_MIN` int(11) DEFAULT NULL,
  `HARGA_MAX` int(11) DEFAULT NULL,
  `HARGA_APPROVE` int(11) DEFAULT NULL,
  `HARGA_JASA` int(11) DEFAULT NULL,
  `USERPB_IDENTITY` varchar(1000) DEFAULT NULL,
  `bank_id` varchar(5) DEFAULT NULL,
  `USERPB_NOREK` varchar(20) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `alasan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuans`
--

INSERT INTO `pengajuans` (`ADMINP_ID`, `MERK_ID`, `PENGAJUAN_ID`, `USERPB_ID`, `email_penjual`, `TRANSAKSI_ID`, `JENIS_ID`, `NAMA_BARANG`, `TGL_PENGAJUAN`, `WARNA_BARANGP`, `FUNGSIONALITAS`, `DESKRIPSI_BARANG`, `STATUS_PENGAJUAN`, `STATUS_BARANG`, `FOTO_KIRI`, `FOTO_KANAN`, `FOTO_ATAS`, `FOTO_BAWAH`, `FOTO_DEPAN`, `FOTO_BELAKANG`, `HARGA_MIN`, `HARGA_MAX`, `HARGA_APPROVE`, `HARGA_JASA`, `USERPB_IDENTITY`, `bank_id`, `USERPB_NOREK`, `created_at`, `updated_at`, `deleted_at`, `alasan`) VALUES
('1', '1', 1, '0', 'yungming6@gmail.com', '0', '1', 'YA BARANG', '2020-11-13 14:46:11', '#000000', 'asdasd', 'Ini sudah jelas', '1', '1', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://images-na.ssl-images-amazon.com/images/I/71-QPWNH%2BVL._AC_SX466_.jpg', 'https://lh3.googleusercontent.com/proxy/NIIlc6fQTkpQt7qGlx1UzzjqT1P6zxIQXOEGTlA-n2gLiXpanEmeKCXw_VExH_t5gXmkjdhGhx2H7txFN6PABgs0Aeey9hL2Ejn_YCyhQDDCjaEk7ZE4cx7k_JGlXTD0b7kuzzz6wNYN0FKQrXw0IFUmmq-sQykbr4gNucZqY1vKiQ8jnDmFUr5VX4HVcsYJ_2Z2A1NeBTrKXpn_U2Z4kpaaoSG5MWqN', 'https://images-na.ssl-images-amazon.com/images/I/71-QPWNH%2BVL._AC_SX466_.jpg', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://lh3.googleusercontent.com/proxy/NIIlc6fQTkpQt7qGlx1UzzjqT1P6zxIQXOEGTlA-n2gLiXpanEmeKCXw_VExH_t5gXmkjdhGhx2H7txFN6PABgs0Aeey9hL2Ejn_YCyhQDDCjaEk7ZE4cx7k_JGlXTD0b7kuzzz6wNYN0FKQrXw0IFUmmq-sQykbr4gNucZqY1vKiQ8jnDmFUr5VX4HVcsYJ_2Z2A1NeBTrKXpn_U2Z4kpaaoSG5MWqN', 1000000, 2000000, 1000000, 0, 'https://images.bisnis-cdn.com/posts/2019/02/27/894082/e-ktp-guohui-chen.jpg', '1', '123123123', '2020-11-13', '2020-11-26', NULL, 'Deskripsi barang tidak jelas!!!'),
('1', '2', 6, '0', 'yungming6@gmail.com', '0', '2', 'Razer Headphone', '2020-11-27 03:32:30', '', 'cursor pada layar', 'Headset baru', '1', '1', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 1000000, 2000000, 2000000, 0, '', '1', '11111111111', '2020-11-26', '2020-11-26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `returs`
--

DROP TABLE IF EXISTS `returs`;
CREATE TABLE `returs` (
  `retur_id` int(11) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `link_video` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `USERPB_ID` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returs`
--

INSERT INTO `returs` (`retur_id`, `deskripsi`, `link_video`, `status`, `transaksi_id`, `USERPB_ID`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asdasddasdas', 'https://youtu.be/QAItvlrPC1Y', 0, 1, 1, '2020-11-26', '2020-11-26', '2020-11-26'),
(3, 'Barang nya jelek', 'https://youtu.be/QAItvlrPC1Y', 0, 2, 2, '2020-11-26', '2020-11-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

DROP TABLE IF EXISTS `transaksis`;
CREATE TABLE `transaksis` (
  `transaksi_id` int(11) NOT NULL,
  `PENGAJUAN_ID` int(11) NOT NULL,
  `bukti_transfer` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `email_pembeli` varchar(1000) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`transaksi_id`, `PENGAJUAN_ID`, `bukti_transfer`, `status`, `email_pembeli`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'bukti_transaksi.jpg', 0, 'yungming6@gmail.com', '2020-11-26', '2020-11-26', NULL),
(2, 6, 'bukti_transaksi.jpg', 0, 'asd@asd.asd', '2020-11-26', '2020-11-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userpembelis`
--

DROP TABLE IF EXISTS `userpembelis`;
CREATE TABLE `userpembelis` (
  `USERPB_ID` varchar(5) NOT NULL,
  `USERPB_NAME` varchar(50) DEFAULT NULL,
  `USERPB_EMAIL` varchar(50) DEFAULT NULL,
  `USERPB_PHONE_NUMBER` varchar(20) DEFAULT NULL,
  `USERPB_ADDRESS` varchar(50) DEFAULT NULL,
  `USERPB_PASSWORD` varchar(100) DEFAULT NULL,
  `NIK` varchar(100) DEFAULT NULL,
  `FOTO_KTP` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userpembelis`
--

INSERT INTO `userpembelis` (`USERPB_ID`, `USERPB_NAME`, `USERPB_EMAIL`, `USERPB_PHONE_NUMBER`, `USERPB_ADDRESS`, `USERPB_PASSWORD`, `NIK`, `FOTO_KTP`) VALUES
('0', '0', 'def@def.def', '000000', 'def', 'def', NULL, NULL),
('1', 'ming1', 'yungming6@gmail.com', '082233101010', 'lokasiA', 'asd', '123123123', 'https://images.bisnis-cdn.com/thumb/posts/2019/02/27/894082/e-ktp-guohui-chen.jpg?w=600&h=400'),
('2', 'asdasd', 'asd@asd.asd', '082233101008', 'lokasiBSD', 'asdasdasd', NULL, NULL),
('3', 'ko keset', 'ko@ko.ko', '082233101009', 'lokasiBSDe', 'asdasdasd', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ADMINP_ID`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `jenisbarangs`
--
ALTER TABLE `jenisbarangs`
  ADD PRIMARY KEY (`JENIS_ID`);

--
-- Indexes for table `merkbarangs`
--
ALTER TABLE `merkbarangs`
  ADD PRIMARY KEY (`MERK_ID`);

--
-- Indexes for table `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD PRIMARY KEY (`PENGAJUAN_ID`);

--
-- Indexes for table `returs`
--
ALTER TABLE `returs`
  ADD PRIMARY KEY (`retur_id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `userpembelis`
--
ALTER TABLE `userpembelis`
  ADD PRIMARY KEY (`USERPB_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengajuans`
--
ALTER TABLE `pengajuans`
  MODIFY `PENGAJUAN_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `returs`
--
ALTER TABLE `returs`
  MODIFY `retur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
