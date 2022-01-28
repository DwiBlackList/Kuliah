<?php

include "config.php";
$koneksi = new Database();
$koneksi->register($_POST['nama'] , $_POST['username'] , md5($_POST['password']) , $_POST['jenis-kelamin'] , $_POST['email'] , $_POST['nohp'] ,  $_FILES['foto']['name']);
header("location:index.php");