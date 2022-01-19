<?php
include "config.php";
$kode_pengarang = $_POST['kode_pengarang'];
$nama_pengarang = $_POST['nama_pengarang'] ;

$sql = "UPDATE data_pengarang SET nama_pengarang = :nama_pengarang WHERE kode_pengarang = :kode_pengarang";
$query = $koneksi->prepare($sql);

$query->bindparam(':kode_pengarang',$kode_pengarang);
$query->bindparam(':nama_pengarang',$nama_pengarang);
$query->execute();


echo "<font color= 'green'> Data Berhasil diubah";
header('location:tampilkan_data_pengarang.php');
?>