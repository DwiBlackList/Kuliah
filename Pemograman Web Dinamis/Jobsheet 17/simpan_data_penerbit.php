<?php
include "config.php";
$kode_penerbit = $_POST['kode_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'] ;

$sql = "INSERT INTO data_penerbit(kode_penerbit, nama_penerbit)
        VALUES(:kode_penerbit,:nama_penerbit)";
$query = $koneksi->prepare($sql);
print_r($query);

$query->bindparam(':kode_penerbit',$kode_penerbit);
$query->bindparam(':nama_penerbit',$nama_penerbit);
$query->execute();

echo "<font color= 'green'> Data Berhasil diubah";
header('location:tampilkan_data_penerbit.php');
?>