<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
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
    <?php
        include "config.php";
    ?>
    <div class="container p-5">
    <a href="tambah_data_pengarang.php"><button class="btn btn-success" style="margin-bottom: 10px;">Tambah</button></a>
    <table class="table table-dark table-hover table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Pengarang</th>
            <th>Nama Pengarang</th>
            <th>Action</th>
        </tr>
        <?php 
            $query = "SELECT * FROM data_pengarang" ;
            $pdo_statement = $koneksi->prepare($query);
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
            $no = 1;
            foreach($result as $x){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['kode_pengarang']; ?></td>
            <td><?php echo $x['nama_pengarang']; ?></td>
            <td>
                <a href="edit_data_pengarang.php?id=<?php echo $x['kode_pengarang']; ?>"><button class="btn btn-primary">Edit</button></a>
                <!-- <a href="hapus_data_peminjam.php?id=<?php echo $x['kode_buku']; ?>">Hapus</a> -->
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</body>
</html>