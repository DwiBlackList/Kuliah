<?php
include "config.php";
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'] ;
$kode_pengarang = $_POST['kode_pengarang'] ; 
$kode_jenis_buku = $_POST['kode_jenis_buku'] ; 
$kode_penerbit = $_POST['kode_penerbit'] ;
$isbn = $_POST['isbn'];
$tahun = $_POST['tahun'];
$deskripsi = $_POST['deskripsi'];
$jumlah = $_POST['jumlah'];

$sql = "UPDATE data_buku SET judul_buku = :judul_buku, 
                                kode_pengarang = :kode_pengarang,
                                kode_jenis_buku = :kode_jenis_buku,
                                kode_penerbit = :kode_penerbit,
                                isbn = :isbn,
                                tahun = :tahun,
                                deskripsi = :deskripsi,
                                jumlah = :jumlah
                                WHERE kode_buku = :kode_buku";
// print_r($sql);
$query = $koneksi->prepare($sql);

$query->bindparam(':kode_buku',$kode_buku);
$query->bindparam(':judul_buku',$judul_buku);
$query->bindparam(':kode_pengarang',$kode_pengarang);
$query->bindparam(':kode_jenis_buku',$kode_jenis_buku);
$query->bindparam(':kode_penerbit',$kode_penerbit);
$query->bindparam(':isbn',$isbn);
$query->bindparam(':tahun',$tahun);
$query->bindparam(':deskripsi',$deskripsi);
$query->bindparam(':jumlah',$jumlah);
$query->execute();

echo "<font color= 'green'> Data Berhasil diubah";
header('location:tampilkan_data_buku.php');
?>