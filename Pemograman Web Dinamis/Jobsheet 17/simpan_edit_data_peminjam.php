<?php
include "config.php";
$kode_peminjam = $_POST['kode_peminjam'];
$nama_peminjam = $_POST['nama_peminjam'] ;
$jenis_kelamin = $_POST['jenis_kelamin'] ; 
$tanggal_lahir = $_POST['tanggal_lahir'] ; 
$alamat = $_POST['alamat'] ;
$pekerjaan = $_POST['pekerjaan'];

$sql = "UPDATE data_peminjam SET nama_peminjam = :nama_peminjam, 
                                jenis_kelamin = :jenis_kelamin,
                                tanggal_lahir = :tanggal_lahir,
                                alamat = :alamat,
                                pekerjaan = :pekerjaan
                                WHERE kode_peminjam = :kode_peminjam";
$query = $koneksi->prepare($sql);

$query->bindparam(':kode_peminjam',$kode_peminjam);
$query->bindparam(':nama_peminjam',$nama_peminjam);
$query->bindparam(':jenis_kelamin',$jenis_kelamin);
$query->bindparam(':tanggal_lahir',$tanggal_lahir);
$query->bindparam(':alamat',$alamat);
$query->bindparam(':pekerjaan',$pekerjaan);
$query->execute();

echo "<font color= 'green'> Data Berhasil diubah";
header('location:tampilkan_data_peminjam.php');
?>