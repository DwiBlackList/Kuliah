<?php
include "config.php";
$kode_pengarang = $_POST['kode_pengarang'];
$nama_pengarang = $_POST['nama_pengarang'] ;

$sql = "INSERT INTO data_pengarang(kode_pengarang, nama_pengarang)
        VALUES(:kode_pengarang,:nama_pengarang)";
$query = $koneksi->prepare($sql);
print_r($query);

$query->bindparam(':kode_pengarang',$kode_pengarang);
$query->bindparam(':nama_pengarang',$nama_pengarang);
$query->execute();

echo "<font color= 'green'> Data Berhasil diubah";
header('location:tampilkan_data_pengarang.php');
?>