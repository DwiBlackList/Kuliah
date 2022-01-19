<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data pengarang</title>
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
    <h1>Edit Data pengarang</h1>
    <?php
        include "config.php";
        if (isset($_GET['id'])) {
            $kode_pengarang = $_GET['id'];
            $query = "SELECT * from data_pengarang 
            WHERE kode_pengarang = '$kode_pengarang'" ;
            $pdo_statement = $koneksi->prepare($query);
            $pdo_statement->execute();
            $data_pengarang = $pdo_statement->fetchAll();
        }else {
            header('Location: tampilkan_data_pengarang.php');
        }
    ?>
    <form action="simpan_edit_data_pengarang.php" method="post">
        <input type="hidden" name="kode_pengarang" value="<?php echo $data_pengarang[0]['kode_pengarang']; ?>">
        <table class="table table-dark table-hover table-bordered">
            <tr>
                <td>Kode Pengarang</td>
                <td>:</td>
                <td><?php echo $data_pengarang[0]['kode_pengarang']; ?></td>
            </tr>
            <tr>
                <td>Nama Pengarang</td>
                <td>:</td>
                <td><input type="text" name="nama_pengarang" value="<?php echo $data_pengarang[0]['nama_pengarang']; ?>" class="form-control" placeholder="Masukkan Nama Pengarang"></td>
            </tr>
            <tr>
                <td colspan="3"><div class="d-grid"><input type="submit" value="SIMPAN" class="btn btn-outline-success"></div></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>