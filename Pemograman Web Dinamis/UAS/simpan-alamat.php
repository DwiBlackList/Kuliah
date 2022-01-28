<?php
session_start();
$username = $_SESSION['username'];
include_once "config.php";
$db = new Database();

foreach ($db->login($username) as $x) {
    $level = $x['level'];
    

    $koneksi = new Database();
    $koneksi->tambah_alamat($_POST['nama'] , $_POST['alamat'] , $_POST['label_alamat'] , $_POST['provinsi'] , $_POST
    ['kotakab'] , $_POST['kecamatan'] , $_POST['kodepos'] );
    if ($level == 'Admin') {
        header("location:halaman-admin.php");
    }else{
        header("location:halaman-user.php");
    }
}