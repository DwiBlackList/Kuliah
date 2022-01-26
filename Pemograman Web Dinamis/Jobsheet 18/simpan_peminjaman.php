<?php

include "config.php";
$koneksi = new Database();
$koneksi->tambah_peminjaman($_POST['kode_buku'] , $_POST['kode_peminjam']);
header("location:tampil_peminjaman.php");