<?php
include "config.php";
$kode_penerbit = $_POST['kode_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'] ;

$sql = "UPDATE data_penerbit SET nama_penerbit = :nama_penerbit WHERE kode_penerbit = :kode_penerbit";
$query = $koneksi->prepare($sql);

$query->bindparam(':kode_penerbit',$kode_penerbit);
$query->bindparam(':nama_penerbit',$nama_penerbit);
$query->execute();


echo "<font color= 'green'> Data Berhasil diubah";
header('location:tampilkan_data_penerbit.php');
?>