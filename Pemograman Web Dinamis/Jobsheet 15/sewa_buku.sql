-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 12:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjam`
--

CREATE TABLE `data_peminjam` (
  `id` int(11) NOT NULL,
  `kode_peminjam` varchar(20) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_peminjam`
--

INSERT INTO `data_peminjam` (`id`, `kode_peminjam`, `nama_peminjam`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `pekerjaan`, `user_id`, `foto`) VALUES
(1, 'A321', 'Ichsanul Dwi Prayitno', 'L', '2002-03-04', 'Puri Delta Asri 3', 'Mahasiswa', 0, 'Null'),
(2, 'A412', 'Entah', 'P', '2022-01-19', 'Sebelah Jalan', 'Nganggur', 0, 'Null'),
(3, 'Z123', 'Budi', 'L', '2022-01-31', 'Pinggir Kali', 'Nelayan', 0, 'Null'),
(4, 'V972', 'Siska enyatiga', 'P', '2022-05-27', 'Bali', 'You know lah', 0, 'Null'),
(5, 'P58', 'Stalin', 'P', '2021-08-16', 'Somewhere On Rusia', 'Tentara', 0, 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `kode_jk` varchar(5) NOT NULL,
  `keterangan_jk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `kode_jk`, `keterangan_jk`) VALUES
(1, 'P', 'Perempuan'),
(2, 'L', 'Laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
