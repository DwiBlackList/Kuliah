<?php

include "config.php";
$db = new Database();
if (isset($_GET['id'])) {
    $kode_peminjam = $_GET['id'];
//     $kode_peminjam = $db->kode_peminjam($kode_peminjam);
//     $kode_peminjam = $data_peminjam[0]['kode_peminjam'];

    $db->hapus_data_peminjam($kode_peminjam);
    header("Location : tampilkan_data_peminjam.php");
}else {
    header("Location : tampilkan_data_peminjam.php");
}
