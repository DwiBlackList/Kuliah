<?php

include "config.php";
$koneksi = new Database();
$koneksi->tambah_data_pengarang($_POST['kode_pengarang'] , $_POST['nama_pengarang']);
header("location:tampil_data_pengarang.php");