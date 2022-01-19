<?php
include "config.php";
$kode_jenis_buku = $_POST['kode_jenis_buku'];
$nama_jenis_buku = $_POST['nama_jenis_buku'] ;

$sql = "INSERT INTO data_jenis_buku(kode_jenis_buku, nama_jenis_buku)
        VALUES(:kode_jenis_buku,:nama_jenis_buku)";
$query = $koneksi->prepare($sql);
print_r($query);

$query->bindparam(':kode_jenis_buku',$kode_jenis_buku);
$query->bindparam(':nama_jenis_buku',$nama_jenis_buku);
$query->execute();

echo "<font color= 'green'> Data Berhasil diubah";
header('location:tampilkan_data_jenis_buku.php');
?>