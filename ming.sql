-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2020 at 12:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ming`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ADMINP_ID` varchar(10) NOT NULL,
  `NAMA_ADMINP` char(50) DEFAULT NULL,
  `PASSWORD_ADMINP` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ADMINP_ID`, `NAMA_ADMINP`, `PASSWORD_ADMINP`) VALUES
('0', 'NOTAPROVE', 'NOTAPROVE'),
('1', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bank_id` varchar(5) NOT NULL,
  `nama_bank` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bank_id`, `nama_bank`) VALUES
('BA001', 'Bank Rakyat Indonesia'),
('BA002', 'Bank MandirI'),
('BA003', 'Bank Central Asia '),
('BA004', 'Bank Negara Indonesia'),
('BA005', 'Bank Tabungan Negara'),
('BA006', 'Bank CIMB Niaga'),
('BA007', 'Bank BTPN'),
('BA008', 'Panin Bank'),
('BA009', 'Bank OCBC NISP'),
('BA010', 'Bank Maybank Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbarangs`
--

CREATE TABLE `jenisbarangs` (
  `JENIS_ID` varchar(5) NOT NULL,
  `NAMA_JENIS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisbarangs`
--

INSERT INTO `jenisbarangs` (`JENIS_ID`, `NAMA_JENIS`) VALUES
('JEN1', 'Headset'),
('JEN2', 'Mouse'),
('JEN3', 'Keyboard');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_barang`
--

CREATE TABLE `kondisi_barang` (
  `KONDISI_ID` varchar(5) NOT NULL,
  `JENIS_KONDISI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kondisi_barang`
--

INSERT INTO `kondisi_barang` (`KONDISI_ID`, `JENIS_KONDISI`) VALUES
('KOND0', '-RATING-'),
('KOND1', 'BAIK'),
('KOND2', 'BAGUS'),
('KOND3', 'SANGAT BAGUS');

-- --------------------------------------------------------

--
-- Table structure for table `merkbarangs`
--

CREATE TABLE `merkbarangs` (
  `MERK_ID` varchar(5) NOT NULL,
  `NAMA_MERK2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merkbarangs`
--

INSERT INTO `merkbarangs` (`MERK_ID`, `NAMA_MERK2`) VALUES
('MERK1', 'Logitech'),
('MERK2', 'Razer'),
('MERK3', 'SteelSeries');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuans`
--

CREATE TABLE `pengajuans` (
  `ADMINP_ID` varchar(10) DEFAULT NULL,
  `MERK_ID` varchar(5) DEFAULT NULL,
  `KONDISI_ID` varchar(5) DEFAULT NULL,
  `PENGAJUAN_ID` varchar(5) NOT NULL,
  `USERPB_ID` varchar(5) DEFAULT NULL,
  `TRANSAKSI_ID` varchar(5) DEFAULT NULL,
  `JENIS_ID` varchar(5) DEFAULT NULL,
  `NAMA_BARANG` varchar(25) DEFAULT NULL,
  `TGL_PENGAJUAN` datetime DEFAULT NULL,
  `WARNA_BARANGP` varchar(15) DEFAULT NULL,
  `PERSENTASE_KUALITAS` int(11) DEFAULT NULL,
  `FUNGSIONALITAS` varchar(100) DEFAULT NULL,
  `DESKRIPSI_BARANG` varchar(100) DEFAULT NULL,
  `STATUS_PENGAJUAN` varchar(1) DEFAULT NULL,
  `STATUS_BARANG` varchar(1) DEFAULT NULL,
  `FOTO_KIRI` varchar(100) DEFAULT NULL,
  `FOTO_KANAN` varchar(100) DEFAULT NULL,
  `FOTO_ATAS` varchar(100) DEFAULT NULL,
  `FOTO_BAWAH` varchar(100) DEFAULT NULL,
  `FOTO_DEPAN` varchar(100) DEFAULT NULL,
  `FOTO_BELAKANG` varchar(100) DEFAULT NULL,
  `HARGA_MIN` int(11) DEFAULT NULL,
  `HARGA_MAX` int(11) DEFAULT NULL,
  `HARGA_APPROVE` int(11) DEFAULT NULL,
  `HARGA_JASA` int(11) DEFAULT NULL,
  `USERPB_IDENTITY` varchar(200) DEFAULT NULL,
  `bank_id` varchar(5) DEFAULT NULL,
  `USERPB_NOREK` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuans`
--

INSERT INTO `pengajuans` (`ADMINP_ID`, `MERK_ID`, `KONDISI_ID`, `PENGAJUAN_ID`, `USERPB_ID`, `TRANSAKSI_ID`, `JENIS_ID`, `NAMA_BARANG`, `TGL_PENGAJUAN`, `WARNA_BARANGP`, `PERSENTASE_KUALITAS`, `FUNGSIONALITAS`, `DESKRIPSI_BARANG`, `STATUS_PENGAJUAN`, `STATUS_BARANG`, `FOTO_KIRI`, `FOTO_KANAN`, `FOTO_ATAS`, `FOTO_BAWAH`, `FOTO_DEPAN`, `FOTO_BELAKANG`, `HARGA_MIN`, `HARGA_MAX`, `HARGA_APPROVE`, `HARGA_JASA`, `USERPB_IDENTITY`, `bank_id`, `USERPB_NOREK`) VALUES
('1', 'MERK3', 'KOND0', 'PNG0', '0', '0', 'JEN3', 'barang 12', '2020-10-10 04:25:31', '#000000', 0, 'asd', 'asd', '1', '0', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 'https://www.meijer.com/content/dam/meijer/product/0009/78/5508/05/0009785508059_1200.png', 1000000, 2000000, 1000000, 0, 'https://images.bisnis-cdn.com/posts/2019/02/27/894082/e-ktp-guohui-chen.jpg', 'BA002', '11111111'),
('1', 'MERK1', 'KOND0', 'PNG1', '0', '0', 'JEN1', 'a', '2020-10-10 04:28:05', '#000000', 0, 'aha', 'asdasdsdsd', '1', '0', 'https://dummyimage.com/600x400/000/fff', 'https://dummyimage.com/600x400/000/fff', 'https://dummyimage.com/600x400/000/fff', 'https://dummyimage.com/600x400/000/fff', 'https://dummyimage.com/600x400/000/fff', 'https://dummyimage.com/600x400/000/fff', 1, 5, 4, 0, 'https://dummyimage.com/600x400/000/fff', 'BA001', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman_danas`
--

CREATE TABLE `pengiriman_danas` (
  `PDANA_ID` varchar(5) NOT NULL,
  `TRANSAKSI_ID` varchar(5) NOT NULL,
  `ADMINP_ID` varchar(10) DEFAULT NULL,
  `BUKTI_PENGIRIMAN` longblob DEFAULT NULL,
  `TOTAL_DANA` int(11) DEFAULT NULL,
  `RANGE_HARGA_JASA` int(11) DEFAULT NULL,
  `TGL_PENGIRIMAN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rekeningtokos`
--

CREATE TABLE `rekeningtokos` (
  `REKENING_ID` varchar(5) NOT NULL,
  `NOMOR_REKENING` varchar(12) DEFAULT NULL,
  `JENIS_BANK` varchar(10) DEFAULT NULL,
  `NAMA_PEMILIK` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekeningtokos`
--

INSERT INTO `rekeningtokos` (`REKENING_ID`, `NOMOR_REKENING`, `JENIS_BANK`, `NAMA_PEMILIK`) VALUES
('0', 'def', 'def', 'def');

-- --------------------------------------------------------

--
-- Table structure for table `returs`
--

CREATE TABLE `returs` (
  `RETUR_ID` varchar(5) NOT NULL,
  `TRANSAKSI_ID` varchar(5) NOT NULL,
  `ADMINP_ID` varchar(10) DEFAULT NULL,
  `DESKRIPSI_RETUR` varchar(250) DEFAULT NULL,
  `LINK_VIDEO` varchar(250) DEFAULT NULL,
  `BUKTI_PENGEMBALIAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `TRANSAKSI_ID` varchar(5) NOT NULL,
  `USERPB_ID` varchar(5) NOT NULL,
  `REKENING_ID` varchar(5) DEFAULT NULL,
  `HARGA_TOTAL` int(11) DEFAULT NULL,
  `TGL_TRANSAKSI` datetime DEFAULT NULL,
  `BUKTI_TRANSAKSI` varchar(100) DEFAULT NULL,
  `NO_RESI` varchar(50) DEFAULT NULL,
  `KEUNTUNGAN_JASA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`TRANSAKSI_ID`, `USERPB_ID`, `REKENING_ID`, `HARGA_TOTAL`, `TGL_TRANSAKSI`, `BUKTI_TRANSAKSI`, `NO_RESI`, `KEUNTUNGAN_JASA`) VALUES
('0', '0', '0', 0, '2020-10-09 02:10:26', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userpembelis`
--

CREATE TABLE `userpembelis` (
  `USERPB_ID` varchar(5) NOT NULL,
  `USERPB_NAME` varchar(50) DEFAULT NULL,
  `USERPB_EMAIL` varchar(50) DEFAULT NULL,
  `USERPB_PHONE_NUMBER` varchar(20) DEFAULT NULL,
  `USERPB_ADDRESS` varchar(50) DEFAULT NULL,
  `USERPB_PASSWORD` varchar(100) DEFAULT NULL,
  `USERPB_IDENTITY` varchar(200) DEFAULT NULL,
  `USERPB_NMBANK` varchar(50) DEFAULT NULL,
  `USERPB_NOREK` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userpembelis`
--

INSERT INTO `userpembelis` (`USERPB_ID`, `USERPB_NAME`, `USERPB_EMAIL`, `USERPB_PHONE_NUMBER`, `USERPB_ADDRESS`, `USERPB_PASSWORD`, `USERPB_IDENTITY`, `USERPB_NMBANK`, `USERPB_NOREK`) VALUES
('0', '0', 'def@def.def', '000000', 'def', 'def', 'def', 'def', 'def'),
('1', 'ming1', 'yungming6@gmail.com', '082233101007', 'lokasiA', 'asdasdasd', 'https://images.bisnis-cdn.com/posts/2019/02/27/894082/e-ktp-guohui-chen.jpg', 'Permata', '1231231');

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
-- Indexes for table `kondisi_barang`
--
ALTER TABLE `kondisi_barang`
  ADD PRIMARY KEY (`KONDISI_ID`);

--
-- Indexes for table `merkbarangs`
--
ALTER TABLE `merkbarangs`
  ADD PRIMARY KEY (`MERK_ID`);

--
-- Indexes for table `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD PRIMARY KEY (`PENGAJUAN_ID`),
  ADD KEY `FK_PENGAJUA_BERMEREK_MERKBARA` (`MERK_ID`),
  ADD KEY `FK_PENGAJUA_MEJUAL_TRANSAKS` (`TRANSAKSI_ID`),
  ADD KEY `FK_PENGAJUA_MEMPUNYAI_KONDISI_` (`KONDISI_ID`),
  ADD KEY `FK_PENGAJUA_MENANGANI_ADMIN` (`ADMINP_ID`),
  ADD KEY `FK_PENGAJUA_MENGAJUKA_USERPEMB` (`USERPB_ID`),
  ADD KEY `FK_JENISBAR_BERJENISB_PENGAJUA` (`JENIS_ID`);

--
-- Indexes for table `pengiriman_danas`
--
ALTER TABLE `pengiriman_danas`
  ADD PRIMARY KEY (`PDANA_ID`),
  ADD KEY `FK_PENGIRIM_MEMBAYARK_TRANSAKS` (`TRANSAKSI_ID`),
  ADD KEY `FK_PENGIRIM_MENGIRIM_ADMIN` (`ADMINP_ID`);

--
-- Indexes for table `rekeningtokos`
--
ALTER TABLE `rekeningtokos`
  ADD PRIMARY KEY (`REKENING_ID`);

--
-- Indexes for table `returs`
--
ALTER TABLE `returs`
  ADD PRIMARY KEY (`RETUR_ID`),
  ADD KEY `FK_RETUR_MENANGANI_ADMIN` (`ADMINP_ID`),
  ADD KEY `FK_RETUR_MENGEMBAL_TRANSAKS` (`TRANSAKSI_ID`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`TRANSAKSI_ID`),
  ADD KEY `FK_TRANSAKS_MEMBELI_USERPEMB` (`USERPB_ID`),
  ADD KEY `FK_TRANSAKS_MENGGUNAK_REKENING` (`REKENING_ID`);

--
-- Indexes for table `userpembelis`
--
ALTER TABLE `userpembelis`
  ADD PRIMARY KEY (`USERPB_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD CONSTRAINT `FK_JENISBAR_BERJENISB_PENGAJUA` FOREIGN KEY (`JENIS_ID`) REFERENCES `jenisbarangs` (`JENIS_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_BERMEREK_MERKBARA` FOREIGN KEY (`MERK_ID`) REFERENCES `merkbarangs` (`MERK_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_MEJUAL_TRANSAKS` FOREIGN KEY (`TRANSAKSI_ID`) REFERENCES `transaksis` (`TRANSAKSI_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_MEMPUNYAI_KONDISI_` FOREIGN KEY (`KONDISI_ID`) REFERENCES `kondisi_barang` (`KONDISI_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_MENANGANI_ADMIN` FOREIGN KEY (`ADMINP_ID`) REFERENCES `admins` (`ADMINP_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_MENGAJUKA_USERPEMB` FOREIGN KEY (`USERPB_ID`) REFERENCES `userpembelis` (`USERPB_ID`);

--
-- Constraints for table `pengiriman_danas`
--
ALTER TABLE `pengiriman_danas`
  ADD CONSTRAINT `FK_PENGIRIM_MEMBAYARK_TRANSAKS` FOREIGN KEY (`TRANSAKSI_ID`) REFERENCES `transaksis` (`TRANSAKSI_ID`),
  ADD CONSTRAINT `FK_PENGIRIM_MENGIRIM_ADMIN` FOREIGN KEY (`ADMINP_ID`) REFERENCES `admins` (`ADMINP_ID`);

--
-- Constraints for table `returs`
--
ALTER TABLE `returs`
  ADD CONSTRAINT `FK_RETUR_MENANGANI_ADMIN` FOREIGN KEY (`ADMINP_ID`) REFERENCES `admins` (`ADMINP_ID`),
  ADD CONSTRAINT `FK_RETUR_MENGEMBAL_TRANSAKS` FOREIGN KEY (`TRANSAKSI_ID`) REFERENCES `transaksis` (`TRANSAKSI_ID`);

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `FK_TRANSAKS_MEMBELI_USERPEMB` FOREIGN KEY (`USERPB_ID`) REFERENCES `userpembelis` (`USERPB_ID`),
  ADD CONSTRAINT `FK_TRANSAKS_MENGGUNAK_REKENING` FOREIGN KEY (`REKENING_ID`) REFERENCES `rekeningtokos` (`REKENING_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
