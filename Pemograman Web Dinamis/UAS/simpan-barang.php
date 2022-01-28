<?php

include "config.php";
$koneksi = new Database();
$koneksi->tambah_barang($_POST['namabarang'] , $_POST['id_toko'] , $_POST['id_jenis_barang'] , $_POST['deskripsi'] , $_POST['jumlah'] , $_POST['harga'] ,  $_FILES['foto']['name']);
// header("location:index.php");