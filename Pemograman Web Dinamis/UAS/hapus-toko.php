<?php

include "config.php";
$db = new Database();
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $db->hapus_toko($id);
    header("location:halaman-admin.php");
}