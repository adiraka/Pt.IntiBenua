-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 06:05 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbintibenua`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbhakakses`
--

CREATE TABLE `tbhakakses` (
  `idhakakses` int(11) NOT NULL,
  `nmhakakses` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbhakakses`
--

INSERT INTO `tbhakakses` (`idhakakses`, `nmhakakses`) VALUES
(1, 'Webmaster'),
(2, 'Supervisor'),
(3, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `tbkegiatan`
--

CREATE TABLE `tbkegiatan` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `idkaryawan` varchar(255) NOT NULL,
  `tematbt` text NOT NULL,
  `stat` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbuserakun`
--

CREATE TABLE `tbuserakun` (
  `idkaryawan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idhakakses` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuserakun`
--

INSERT INTO `tbuserakun` (`idkaryawan`, `username`, `password`, `idhakakses`, `status`) VALUES
('ADMIN1', 'admin', '$2y$10$Ic3/FE19tFSgkq8PbD9YsuR817dJ2PSMflgbuY736BtmRpOUZck.C', 1, 1),
('KRY001', 'scrypto', '$2y$10$M1Jush2.3YNWrPyXgZCDIOhcn2Lw1E3nTbrsaB49o558CYLQQVxnu', 3, 1),
('SPV001', 'boy1234', '$2y$10$E4OAfNs2X7/2PvzZyXesjOSUfLGhwlWKgKpnUBDaDmwenhVuBo1dy', 2, 0),
('KRY002', 'budi1234', '$2y$10$prcXt4C.5l2VHvMkkzND6u4xdnLsxAVMrTWTaxEoCX7Z7/FCJt7Mq', 3, 0),
('ADMIN2', 'admin2', '$2y$10$8J1ictctespy9PNNsj69Ru1PQtFswc92ujxE6SQkHjDoLGWQqGTYW', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbuserprofil`
--

CREATE TABLE `tbuserprofil` (
  `idkaryawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmplahir` varchar(255) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jekel` enum('Pria','Wanita') DEFAULT NULL,
  `agama` enum('Islam','Katolik','Protestan','Hindu','Buddha','Konghucu') DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuserprofil`
--

INSERT INTO `tbuserprofil` (`idkaryawan`, `nama`, `tmplahir`, `tgllahir`, `jekel`, `agama`, `alamat`, `telepon`, `jabatan`) VALUES
('KRY001', 'ADI RAKA SIWI', 'Padang', '1994-04-29', 'Pria', 'Islam', 'Tabing', '081268280648', 'Karyawan'),
('SPV001', 'BOY SANDHI', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ADMIN1', 'ADI RAKA SIWI, M.Kom', 'PADANG CTY', '1994-04-29', 'Pria', 'Islam', 'Komplek Filano Mandiri BLOK A1/1 Tabing', '081268280648', 'Webmaster'),
('KRY002', 'BUDI SETIAWAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ADMIN2', 'SIMON SIMORANGKIR', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbhakakses`
--
ALTER TABLE `tbhakakses`
  ADD PRIMARY KEY (`idhakakses`);

--
-- Indexes for table `tbkegiatan`
--
ALTER TABLE `tbkegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkaryawan` (`idkaryawan`);

--
-- Indexes for table `tbuserakun`
--
ALTER TABLE `tbuserakun`
  ADD PRIMARY KEY (`idkaryawan`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `idhakakses` (`idhakakses`);

--
-- Indexes for table `tbuserprofil`
--
ALTER TABLE `tbuserprofil`
  ADD PRIMARY KEY (`idkaryawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbhakakses`
--
ALTER TABLE `tbhakakses`
  MODIFY `idhakakses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbkegiatan`
--
ALTER TABLE `tbkegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
