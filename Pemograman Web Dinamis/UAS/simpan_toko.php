<?php
session_start();
$username = $_SESSION['username'];
include_once "config.php";
$db = new Database();

foreach ($db->login($username) as $x) {
    $level = $x['level'];
    

    $koneksi = new Database();
    $koneksi->simpan_toko($_POST['nama'] , $_POST['namatoko'] , $_POST['alamattoko'] , $_FILES['foto']['name']);
    if ($level == 'Admin') {
        header("location:halaman-admin.php");
    }else{
        header("location:halaman-user.php");
    }
}