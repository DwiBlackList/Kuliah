<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengarang</title>
    <!-- Latest compiled and minified CSS -->
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
        include "config.php";
        $koneksi = new Database();
    ?>
    <div class="container p-5">
    <h3>Tambah Pengarang</h3>
    <form action="simpan_data_pengarang.php" method="post">
        <table class="table table-bordered table-hover table-dark">
            <tr>
                <td>Kode Pengarang</td>
                <td>:</td>
                <td><input type="text" name="kode_pengarang" class="form-control" placeholder="Masukkan Kode Pengarang"></td>
            </tr>
            <tr>
                <td>Nama Pengarang</td>
                <td>:</td>
                <td><input type="text" name="nama_pengarang" class="form-control" placeholder="Masukkan Nama Pengarang"></td>
            </tr>
            <tr>
                <td colspan="3"><div class="d-grid"><input type="submit" value="SIMPAN" class="btn btn-outline-success"></div></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>