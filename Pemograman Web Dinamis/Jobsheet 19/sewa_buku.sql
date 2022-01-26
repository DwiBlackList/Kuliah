-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 12:03 PM
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
(2, '1', '1 Ngetes', 'PG10002', 'J10001', 'P10002', '143', 2017, '1 Test', 1122),
(3, 'B10001', 'Entahlah', 'PG10004', 'J10004', 'P10005', '040302', 2010, 'Ya Ndak Tau', 100),
(4, 'B10002', 'WW II', 'PG10005', 'J10002', 'P10001', '123546', 2010, 'Sejarah Peristiwa WW 2', 15);

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
(16, 'J10005', 'Kuliner'),
(17, 'J10006', 'Mangaa'),
(18, 'J10007', 'Doujin');

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
(8, 'A1', 'Ichsanul Dwi Prayitno 1', 'L', '2002-03-04', 'Puri Delta Asri 3 1', 'Mahasiswa 1', 0, 'Null'),
(9, 'A2', 'Josef Stalin', 'L', '1878-12-18', 'SomeWhere At Rusia', 'Militer', 0, ''),
(10, 'test', 'Ubah Test 2 3', 'P', '2022-01-01', 'ETest 123', 'Ngetes 123', 0, 'Null');

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
(5, 'P10005', 'Penerbit Informatika'),
(6, 'P10006', 'YNTKTS');

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
(5, 'PG10005', 'Pramoedya Ananta Noer'),
(6, 'PG10006', 'Mbuh Ngarang 1');

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
(6, 'B10001', 'A1', '2022-01-16 00:00:00', '2022-01-23 00:00:00', 1),
(7, 'B10001', 'A2', '2022-01-17 00:00:00', '2022-01-24 00:00:00', 1),
(8, 'B10002', 'test', '2022-01-24 00:00:00', '2022-01-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses_id` int(11) NOT NULL,
  `data_peminjam_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `akses_id`, `data_peminjam_id`) VALUES
(1, 'admin', 'admin123', 1, 0),
(2, 'test', 'test', 2, 10);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_jenis_buku`
--
ALTER TABLE `data_jenis_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_penerbit`
--
ALTER TABLE `data_penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_pengarang`
--
ALTER TABLE `data_pengarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
