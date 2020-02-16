-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 08:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rstiara`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ridhuwan`
--

CREATE TABLE `tb_ridhuwan` (
  `koderegis` varchar(20) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `status_kunjungan` enum('Baru','Lama') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ridhuwan`
--

INSERT INTO `tb_ridhuwan` (`koderegis`, `id_pasien`, `nama_pasien`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `status_kunjungan`) VALUES
('R001', 1, 'qwerty', 'pati', '2020-02-24', 'Laki-laki', 'Lama'),
('R003', 3, 'ans', 'zimbabae', '2020-02-03', 'Laki-laki', 'Lama'),
('R004', 4, 'anjas', 'austra', '2020-02-15', 'Perempuan', 'Lama'),
('R005', 5, 'wani', 'jonggol', '2020-02-15', 'Laki-laki', 'Lama'),
('R006', 6, 'senri', 'bandung', '2020-02-15', 'Laki-laki', 'Baru'),
('R007', 7, 'wiwin', 'jogya', '2019-12-01', 'Perempuan', 'Baru'),
('R008', 8, 'wawan', 'belanda', '2019-08-04', 'Laki-laki', 'Baru'),
('R009', 9, 'septi', 'binong permai', '1990-05-09', 'Perempuan', 'Baru'),
('R10', 10, 'dina', 'bingung', '2000-01-31', 'Laki-laki', 'Baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ridhuwan`
--
ALTER TABLE `tb_ridhuwan`
  ADD PRIMARY KEY (`koderegis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
