-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 10:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbengkel`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cari_bengkel_per_kendaraan` (IN `kendaraan` VARCHAR(10))  NO SQL
BEGIN
	SELECT tbl_bengkel.nama_bengkel, tbl_bengkel.alamat FROM tbl_bengkel JOIN tbl_kendaraan ON tbl_bengkel.id_jenis_kendaraan = tbl_kendaraan.id_jenis_kendaraan AND tbl_kendaraan.jenis_kendaraan LIKE kendaraan;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `bengkel_mobil`
-- (See below for the actual view)
--
CREATE TABLE `bengkel_mobil` (
`nama_bengkel` varchar(50)
,`alamat` text
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bengkel`
--

CREATE TABLE `tbl_bengkel` (
  `id_bengkel` varchar(7) NOT NULL,
  `nama_bengkel` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `id_jenis_kendaraan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bengkel`
--

INSERT INTO `tbl_bengkel` (`id_bengkel`, `nama_bengkel`, `nama_pemilik`, `alamat`, `keterangan`, `posisi`, `id_jenis_kendaraan`) VALUES
('B000001', 'Pagah Jaya Motor 2', 'someone', 'Jl. Mastrip No.17, Krajan Timur, Sumbersari, Kabupaten Jember, Jawa Timur 68124', 'keterangan', 'RPPF+XF Jember, Jember Regency, East Java', '1'),
('B000002', 'Dimas Motor', 'someone', 'Jl. Mastrip No.61, Krajan Timur, Sumbersari, Kabupaten Jember, Jawa Timur 68124', 'keterangan', 'RPR9+4J Jember, Jember Regency, East Java', '1'),
('B000003', 'Anugerah speed +Variasi Mobil', 'somene', 'Jl. Riau No.29, Krajan Barat, Sumbersari, Kabupaten Jember, Jawa Timur 68121', 'Ket', 'RPJF+WM Jember, Jember Regency, East Java', '2'),
('B000004', 'Riverside Garage/Griya Motor', 'someone', 'Krajan Timur, Sumbersari, Jember Regency, East Java 68121', 'ket', 'RPQ7+HP Jember, Jember Regency, East Java', '1'),
('B000005', 'Bengkel dirga Motor TSM', 'someone', 'Jl. Riau No.38-94, Krajan Barat, Sumbersari, Kabupaten Jember, Jawa Timur 68121', 'ket', 'RPJF+XV Jember, Jember Regency', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `id_jenis_kendaraan` varchar(1) NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`id_jenis_kendaraan`, `jenis_kendaraan`) VALUES
('1', 'Motor'),
('2', 'Mobil');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama`, `no_hp`, `alamat`) VALUES
('P000001', 'Arief', '098192192', 'Jember'),
('P000002', 'Bram', '38723923', 'Jember'),
('P000003', 'Avis', '12312341', 'Probolinggo'),
('P000004', 'Bagus', '324234234', 'Mars');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posisi`
--

CREATE TABLE `tbl_posisi` (
  `id_posisi` varchar(30) NOT NULL,
  `posisi_gps` varchar(30) NOT NULL,
  `tanggal_jam` datetime NOT NULL,
  `id_pelanggan` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id_riwayat` varchar(7) NOT NULL,
  `id_pelanggan` varchar(7) NOT NULL,
  `id_bengkel` varchar(7) NOT NULL,
  `id_posisi` varchar(30) NOT NULL,
  `id_jenis_kendaraan` varchar(1) NOT NULL,
  `tanggal_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `bengkel_mobil`
--
DROP TABLE IF EXISTS `bengkel_mobil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bengkel_mobil`  AS  select `tbl_bengkel`.`nama_bengkel` AS `nama_bengkel`,`tbl_bengkel`.`alamat` AS `alamat` from (`tbl_bengkel` join `tbl_kendaraan` on(((`tbl_bengkel`.`id_jenis_kendaraan` = `tbl_kendaraan`.`id_jenis_kendaraan`) and (`tbl_bengkel`.`id_jenis_kendaraan` = '2')))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bengkel`
--
ALTER TABLE `tbl_bengkel`
  ADD PRIMARY KEY (`id_bengkel`),
  ADD KEY `id_jenis_kendaraan` (`id_jenis_kendaraan`);

--
-- Indexes for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`id_jenis_kendaraan`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_posisi`
--
ALTER TABLE `tbl_posisi`
  ADD PRIMARY KEY (`id_posisi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_bengkel` (`id_bengkel`),
  ADD KEY `id_posisi` (`id_posisi`),
  ADD KEY `id_jenis_kendaraan` (`id_jenis_kendaraan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bengkel`
--
ALTER TABLE `tbl_bengkel`
  ADD CONSTRAINT `tbl_bengkel_ibfk_1` FOREIGN KEY (`id_jenis_kendaraan`) REFERENCES `tbl_kendaraan` (`id_jenis_kendaraan`);

--
-- Constraints for table `tbl_posisi`
--
ALTER TABLE `tbl_posisi`
  ADD CONSTRAINT `tbl_posisi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`);

--
-- Constraints for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD CONSTRAINT `tbl_riwayat_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `tbl_riwayat_ibfk_2` FOREIGN KEY (`id_bengkel`) REFERENCES `tbl_bengkel` (`id_bengkel`),
  ADD CONSTRAINT `tbl_riwayat_ibfk_3` FOREIGN KEY (`id_posisi`) REFERENCES `tbl_posisi` (`id_posisi`),
  ADD CONSTRAINT `tbl_riwayat_ibfk_4` FOREIGN KEY (`id_jenis_kendaraan`) REFERENCES `tbl_kendaraan` (`id_jenis_kendaraan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
