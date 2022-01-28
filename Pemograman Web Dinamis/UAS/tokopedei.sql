-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2022 pada 02.21
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokopedei`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat_user`
--

CREATE TABLE `alamat_user` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `label_alamat` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kotakab` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kodepos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alamat_user`
--

INSERT INTO `alamat_user` (`id`, `id_user`, `alamat`, `label_alamat`, `provinsi`, `kotakab`, `kecamatan`, `kodepos`) VALUES
(5, 9, 'Puri Delta Asri 3 Blok D Nomor 25', 'Rumah', 'Jawa Tengah', 'Kota Semarang', 'Kecamatan Mijen', 50216),
(6, 10, 'Test', 'test', 'test', 'test', 'test', 123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(10) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `id_toko` int(10) NOT NULL,
  `id_jenis_barang` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `namabarang`, `gambar`, `id_toko`, `id_jenis_barang`, `deskripsi`, `jumlah`, `harga`) VALUES
(1, 'Jam Tangan Mahal', '36-jam.jpg', 2, 6, 'Jam Tangan Lah', 14, 125000),
(2, 'ngetesbarang', '881-es teh.png', 3, 11, 'Es teh', 100, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id` int(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id`, `nama_kategori`) VALUES
(3, 'Buku'),
(4, 'Dapur'),
(5, 'Elektronik'),
(6, 'Fashion Pria'),
(7, 'Fashion Wanita'),
(8, 'Rumah Tangga'),
(9, 'Gaming'),
(10, 'HandPhone & Tablet'),
(11, 'Makanan & Minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_alamat` int(10) NOT NULL,
  `tgl_order` date NOT NULL,
  `status` enum('Belum Dibayar','Telah Dibayar','Telah Tiba','Dibatalkan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id` int(10) NOT NULL,
  `namatoko` varchar(30) NOT NULL,
  `alamattoko` text NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id`, `namatoko`, `alamattoko`, `gambar`, `id_user`) VALUES
(2, 'BlackMarket', 'POLINES', '636-1.png', 9),
(3, 'Entah', 'Entahlah', '985-6.jpg', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki','Dan-lain-lain') NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `gambar` varchar(225) NOT NULL DEFAULT 'default.jpg',
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `jenis_kelamin`, `email`, `nohp`, `gambar`, `level`) VALUES
(9, 'Ichsanul Dwi Prayitno', 'DwiBlackList', 'ac6e6dc177eedf6aeb48e97646d07d4b', 'Laki-laki', 'dwiblacklist@gmail.com', '081391396149', '849-1.png', 'Admin'),
(10, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Laki-laki', 'test', '123', 'default.jpg', 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat_user`
--
ALTER TABLE `alamat_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat_user`
--
ALTER TABLE `alamat_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
