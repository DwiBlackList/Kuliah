<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Jenis Buku</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    <style>
        body {
            background-color: black;
        }
        h1 {
            color: white;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container p-5">
    <h1>Edit Data Jenis Buku</h1>
    <?php
        include "config.php";
        if (isset($_GET['id'])) {
            $kode_jenis_buku = $_GET['id'];
            $query = "SELECT * from data_jenis_buku 
            WHERE kode_jenis_buku = '$kode_jenis_buku'" ;
            $pdo_statement = $koneksi->prepare($query);
            $pdo_statement->execute();
            $data_jenis_buku = $pdo_statement->fetchAll();
        }else {
            header('Location: tampilkan_data_jenis_buku.php');
        }
    ?>
    <form action="simpan_edit_data_jenis_buku.php" method="post">
        <input type="hidden" name="kode_jenis_buku" value="<?php echo $data_jenis_buku[0]['kode_jenis_buku']; ?>">
        <table class="table table-dark table-hover table-bordered">
            <tr>
                <td>Kode Jenis Buku</td>
                <td>:</td>
                <td><?php echo $data_jenis_buku[0]['kode_jenis_buku']; ?></td>
            </tr>
            <tr>
                <td>Nama Jenis Buku</td>
                <td>:</td>
                <td><input type="text" name="nama_jenis_buku" value="<?php echo $data_jenis_buku[0]['nama_jenis_buku']; ?>" class="form-control" placeholder="Masukkan Nama Jenis Buku"></td>
            </tr>
            <tr>
                <td colspan="3"><div class="d-grid"><input type="submit" value="SIMPAN" class="btn btn-outline-success"></div></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>