-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 04:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` varchar(12) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_rekening` int(30) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  `jenis_trx` varchar(100) NOT NULL,
  `tgl_trx` date NOT NULL,
  `nominal` int(40) NOT NULL,
  `id_atm` varchar(10) NOT NULL,
  `wilayah` varchar(60) NOT NULL,
  `no_record` int(6) NOT NULL,
  `kategori_mesin` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`, `nama`, `no_rekening`, `no_kartu`, `jenis_trx`, `tgl_trx`, `nominal`, `id_atm`, `wilayah`, `no_record`, `kategori_mesin`) VALUES
('2-0000105777', '2020-07-30', 'Bpk RIDWAN BURANGASI\r\n', 734242888, '5371762980154400', 'SETOR TUNAI CRM\r\n', '2020-07-12', 400000, 'S1CMWIR005', 'WPU', 0, 'CRM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`kategori_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
