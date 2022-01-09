-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 07:25 PM
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
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(30) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `kode_pengarang` varchar(30) NOT NULL,
  `kode_jenis_buku` varchar(30) NOT NULL,
  `kode_penerbit` varchar(30) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `tahun` year(4) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `kode_buku`, `judul_buku`, `kode_pengarang`, `kode_jenis_buku`, `kode_penerbit`, `isbn`, `tahun`, `deskripsi`, `jumlah`) VALUES
(2, '1', '1', 'PG10001', 'J10001', 'P10001', '1', 2013, '1', 1),
(3, 'B10001', 'Entahlah', 'PG10004', 'J10004', 'P10005', '040302', 2010, 'Ya Ndak Tau', 100);

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis_buku`
--

CREATE TABLE `data_jenis_buku` (
  `id` int(11) NOT NULL,
  `kode_jenis_buku` varchar(30) NOT NULL,
  `nama_jenis_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jenis_buku`
--

INSERT INTO `data_jenis_buku` (`id`, `kode_jenis_buku`, `nama_jenis_buku`) VALUES
(12, 'J10001', 'Komputer'),
(13, 'J10002', 'Sejarah'),
(14, 'J10003', 'Ensiklopedia'),
(15, 'J10004', 'Hiburan'),
(16, 'J10005', 'Kuliner');

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
(1, 'A321', 'Ichsanul Dwi Prayitno 1', 'P', '2022-01-12', 'Puri Delta Asri 3 1', 'Mahasiswa 1', 0, 'Null'),
(4, 'V972', 'Siska enyatiga', 'P', '2022-05-27', 'Bali', 'You know lah', 0, 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `data_penerbit`
--

CREATE TABLE `data_penerbit` (
  `id` int(11) NOT NULL,
  `kode_penerbit` varchar(30) NOT NULL,
  `nama_penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penerbit`
--

INSERT INTO `data_penerbit` (`id`, `kode_penerbit`, `nama_penerbit`) VALUES
(1, 'P10001', 'Erlangga'),
(2, 'P10002', 'Lokopedia'),
(3, 'P10003', 'Penerbit Andi'),
(4, 'P10004', 'Gagas Media'),
(5, 'P10005', 'Penerbit Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengarang`
--

CREATE TABLE `data_pengarang` (
  `id` int(11) NOT NULL,
  `kode_pengarang` varchar(30) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengarang`
--

INSERT INTO `data_pengarang` (`id`, `kode_pengarang`, `nama_pengarang`) VALUES
(1, 'PG10001', 'Abdul Karir'),
(2, 'PG10002', 'Suyanto'),
(3, 'PG10003', 'Pidi Baiq'),
(4, 'PG10004', 'Tere Liye'),
(5, 'PG10005', 'Pramoedya Ananta Noer');

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

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(30) NOT NULL,
  `kode_peminjam` varchar(30) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode_buku`, `kode_peminjam`, `tanggal_pinjam`, `tanggal_kembali`, `status`) VALUES
(1, 'A321', '', '2022-01-09 00:00:00', '2022-01-16 00:00:00', 1),
(2, 'B10001', 'A321', '2022-01-09 00:00:00', '2022-01-16 00:00:00', 1),
(3, 'B10001', 'A321', '2022-01-09 00:00:00', '2022-01-16 00:00:00', 1),
(4, '1', 'V972', '2022-01-09 00:00:00', '2022-01-16 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `data_jenis_buku`
--
ALTER TABLE `data_jenis_buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_jenis_buku` (`kode_jenis_buku`);

--
-- Indexes for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_penerbit`
--
ALTER TABLE `data_penerbit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_penerbit` (`kode_penerbit`);

--
-- Indexes for table `data_pengarang`
--
ALTER TABLE `data_pengarang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_pengarang` (`kode_pengarang`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_jenis_buku`
--
ALTER TABLE `data_jenis_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_penerbit`
--
ALTER TABLE `data_penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_pengarang`
--
ALTER TABLE `data_pengarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
