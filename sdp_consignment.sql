-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 10:46 PM
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
-- Database: `sdp_consignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMINP_ID` varchar(10) NOT NULL,
  `NAMA_ADMINP` char(50) DEFAULT NULL,
  `PASSWORD_ADMINP` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMINP_ID`, `NAMA_ADMINP`, `PASSWORD_ADMINP`) VALUES
('0', 'NOTAPROVE', 'NOTAPROVE'),
('1', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbarang`
--

CREATE TABLE `jenisbarang` (
  `JENIS_ID` varchar(5) NOT NULL,
  `NAMA_JENIS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisbarang`
--

INSERT INTO `jenisbarang` (`JENIS_ID`, `NAMA_JENIS`) VALUES
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
-- Table structure for table `merkbarang`
--

CREATE TABLE `merkbarang` (
  `MERK_ID` varchar(5) NOT NULL,
  `NAMA_MERK2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merkbarang`
--

INSERT INTO `merkbarang` (`MERK_ID`, `NAMA_MERK2`) VALUES
('MERK1', 'Logitech'),
('MERK2', 'Razer'),
('MERK3', 'SteelSeries');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
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
  `HARGA_JASA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman_dana`
--

CREATE TABLE `pengiriman_dana` (
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
-- Table structure for table `rekeningtoko`
--

CREATE TABLE `rekeningtoko` (
  `REKENING_ID` varchar(5) NOT NULL,
  `NOMOR_REKENING` varchar(12) DEFAULT NULL,
  `JENIS_BANK` varchar(10) DEFAULT NULL,
  `NAMA_PEMILIK` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekeningtoko`
--

INSERT INTO `rekeningtoko` (`REKENING_ID`, `NOMOR_REKENING`, `JENIS_BANK`, `NAMA_PEMILIK`) VALUES
('0', 'def', 'def', 'def');

-- --------------------------------------------------------

--
-- Table structure for table `retur`
--

CREATE TABLE `retur` (
  `RETUR_ID` varchar(5) NOT NULL,
  `TRANSAKSI_ID` varchar(5) NOT NULL,
  `ADMINP_ID` varchar(10) DEFAULT NULL,
  `DESKRIPSI_RETUR` varchar(250) DEFAULT NULL,
  `LINK_VIDEO` varchar(250) DEFAULT NULL,
  `BUKTI_PENGEMBALIAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
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
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`TRANSAKSI_ID`, `USERPB_ID`, `REKENING_ID`, `HARGA_TOTAL`, `TGL_TRANSAKSI`, `BUKTI_TRANSAKSI`, `NO_RESI`, `KEUNTUNGAN_JASA`) VALUES
('0', '0', '0', 0, '2020-10-09 02:10:26', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userpembeli`
--

CREATE TABLE `userpembeli` (
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
-- Dumping data for table `userpembeli`
--

INSERT INTO `userpembeli` (`USERPB_ID`, `USERPB_NAME`, `USERPB_EMAIL`, `USERPB_PHONE_NUMBER`, `USERPB_ADDRESS`, `USERPB_PASSWORD`, `USERPB_IDENTITY`, `USERPB_NMBANK`, `USERPB_NOREK`) VALUES
('0', '0', 'def@def.def', '000000', 'def', 'def', 'def', 'def', 'def'),
('1', 'ming1', 'yungming6@gmail.com', '082233101007', 'lokasiA', 'asdasdasd', 'https://images.bisnis-cdn.com/posts/2019/02/27/894082/e-ktp-guohui-chen.jpg', 'Permata', '1231231');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMINP_ID`);

--
-- Indexes for table `jenisbarang`
--
ALTER TABLE `jenisbarang`
  ADD PRIMARY KEY (`JENIS_ID`);

--
-- Indexes for table `kondisi_barang`
--
ALTER TABLE `kondisi_barang`
  ADD PRIMARY KEY (`KONDISI_ID`);

--
-- Indexes for table `merkbarang`
--
ALTER TABLE `merkbarang`
  ADD PRIMARY KEY (`MERK_ID`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`PENGAJUAN_ID`),
  ADD KEY `FK_PENGAJUA_BERMEREK_MERKBARA` (`MERK_ID`),
  ADD KEY `FK_PENGAJUA_MEJUAL_TRANSAKS` (`TRANSAKSI_ID`),
  ADD KEY `FK_PENGAJUA_MEMPUNYAI_KONDISI_` (`KONDISI_ID`),
  ADD KEY `FK_PENGAJUA_MENANGANI_ADMIN` (`ADMINP_ID`),
  ADD KEY `FK_PENGAJUA_MENGAJUKA_USERPEMB` (`USERPB_ID`),
  ADD KEY `FK_JENISBAR_BERJENISB_PENGAJUA` (`JENIS_ID`);

--
-- Indexes for table `pengiriman_dana`
--
ALTER TABLE `pengiriman_dana`
  ADD PRIMARY KEY (`PDANA_ID`),
  ADD KEY `FK_PENGIRIM_MEMBAYARK_TRANSAKS` (`TRANSAKSI_ID`),
  ADD KEY `FK_PENGIRIM_MENGIRIM_ADMIN` (`ADMINP_ID`);

--
-- Indexes for table `rekeningtoko`
--
ALTER TABLE `rekeningtoko`
  ADD PRIMARY KEY (`REKENING_ID`);

--
-- Indexes for table `retur`
--
ALTER TABLE `retur`
  ADD PRIMARY KEY (`RETUR_ID`),
  ADD KEY `FK_RETUR_MENANGANI_ADMIN` (`ADMINP_ID`),
  ADD KEY `FK_RETUR_MENGEMBAL_TRANSAKS` (`TRANSAKSI_ID`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`TRANSAKSI_ID`),
  ADD KEY `FK_TRANSAKS_MEMBELI_USERPEMB` (`USERPB_ID`),
  ADD KEY `FK_TRANSAKS_MENGGUNAK_REKENING` (`REKENING_ID`);

--
-- Indexes for table `userpembeli`
--
ALTER TABLE `userpembeli`
  ADD PRIMARY KEY (`USERPB_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `FK_JENISBAR_BERJENISB_PENGAJUA` FOREIGN KEY (`JENIS_ID`) REFERENCES `jenisbarang` (`JENIS_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_BERMEREK_MERKBARA` FOREIGN KEY (`MERK_ID`) REFERENCES `merkbarang` (`MERK_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_MEJUAL_TRANSAKS` FOREIGN KEY (`TRANSAKSI_ID`) REFERENCES `transaksi` (`TRANSAKSI_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_MEMPUNYAI_KONDISI_` FOREIGN KEY (`KONDISI_ID`) REFERENCES `kondisi_barang` (`KONDISI_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_MENANGANI_ADMIN` FOREIGN KEY (`ADMINP_ID`) REFERENCES `admin` (`ADMINP_ID`),
  ADD CONSTRAINT `FK_PENGAJUA_MENGAJUKA_USERPEMB` FOREIGN KEY (`USERPB_ID`) REFERENCES `userpembeli` (`USERPB_ID`);

--
-- Constraints for table `pengiriman_dana`
--
ALTER TABLE `pengiriman_dana`
  ADD CONSTRAINT `FK_PENGIRIM_MEMBAYARK_TRANSAKS` FOREIGN KEY (`TRANSAKSI_ID`) REFERENCES `transaksi` (`TRANSAKSI_ID`),
  ADD CONSTRAINT `FK_PENGIRIM_MENGIRIM_ADMIN` FOREIGN KEY (`ADMINP_ID`) REFERENCES `admin` (`ADMINP_ID`);

--
-- Constraints for table `retur`
--
ALTER TABLE `retur`
  ADD CONSTRAINT `FK_RETUR_MENANGANI_ADMIN` FOREIGN KEY (`ADMINP_ID`) REFERENCES `admin` (`ADMINP_ID`),
  ADD CONSTRAINT `FK_RETUR_MENGEMBAL_TRANSAKS` FOREIGN KEY (`TRANSAKSI_ID`) REFERENCES `transaksi` (`TRANSAKSI_ID`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_TRANSAKS_MEMBELI_USERPEMB` FOREIGN KEY (`USERPB_ID`) REFERENCES `userpembeli` (`USERPB_ID`),
  ADD CONSTRAINT `FK_TRANSAKS_MENGGUNAK_REKENING` FOREIGN KEY (`REKENING_ID`) REFERENCES `rekeningtoko` (`REKENING_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
