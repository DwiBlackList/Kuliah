<?php
include "config.php";
$kode_buku = $_POST['kode_buku'];
$kode_peminjam = $_POST['kode_peminjam'] ;
$tanggal_pinjam = date('Y-m-d') ; 
$tanggal_kembali = date('Y-m-d' ,time()+(60 * 60 * 24 * 7));
$status = 1;

$sql = "INSERT INTO peminjaman(kode_buku, kode_peminjam, tanggal_pinjam, tanggal_kembali, status)
        VALUES(:kode_buku, :kode_peminjam, :tanggal_pinjam,:tanggal_kembali,:status)";
$query = $koneksi->prepare($sql);

$query->bindparam(':kode_buku',$kode_buku);
$query->bindparam(':kode_peminjam',$kode_peminjam);
$query->bindparam(':tanggal_pinjam',$tanggal_pinjam);
$query->bindparam(':tanggal_kembali',$tanggal_kembali);
$query->bindparam(':status',$status);
$query->execute();

echo "<font color= 'green'> Data Berhasil diubah";
header('location:tampilkan_peminjam.php');
?>