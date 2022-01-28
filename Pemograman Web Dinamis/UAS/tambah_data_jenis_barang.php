<?php
session_start();
$username = $_SESSION['username'];
include_once "config.php";
$db = new Database();

foreach ($db->login($username) as $x) {
    $level = $x['level'];
    if ($level == 'Admin') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Jenis Barang</title>
    <!-- Latest compiled and minified CSS -->
            <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        body {
            background-color: black;
            color : white;
        }
    </style>
</head>
<body>
    <?php
        // include "../config.php";
        include "navbar-admin.php";
        // $koneksi = new Database();
    ?>
    <div class="container p-5">
    <h3>Tambah Data Jenis Barang</h3>
    <form action="simpan_data_jenis_barang.php" method="post">
        <table class="table table-bordered table-hover table-dark">
            <tr>
                <td>Nama Kategori</td>
                <td>:</td>
                <td><input type="text" name="nama_jenis_barang" id="" class="form-control" placeholder="Masukkan Nama Barang" required></td>
            </tr>
            <tr>
                <td colspan="3"><div class="d-grid"><input type="submit" value="SIMPAN" class="btn btn-outline-success"></div></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
<?php
    } else {
        echo "Anda Harus Login!";
        header('Location: index.php');
    }
}
?>