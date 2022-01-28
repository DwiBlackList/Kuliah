<?php

include "config.php";

$koneksi = new Database();
$koneksi->tambah_data_jenis_barang($_POST['nama_jenis_barang']);
header('location:halaman-admin.php');