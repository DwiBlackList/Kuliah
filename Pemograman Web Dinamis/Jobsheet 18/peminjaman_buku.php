<?php
session_start();
$username = $_SESSION['username'];
include "config.php";
$db = new Database();

foreach ($db->login($username) as $x) {
    $akses_id = $x['akses_id'];
    if ($akses_id == '1') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
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
        include "navbar-admin.php";
        // include "../config.php";
        // $db = new Database();
    ?>
    <div class="container p-5">
    <h3>Peminjaman Buku</h3>
    <form action="simpan_peminjaman.php" method="post">
        <table class="table table-bordered table-hover table-dark">
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td>
                    <select name="kode_buku" class="form-select">
                        <option value="--">--</option>
                        <?php
                            $no = 1;
                            foreach ($db->tampil_data_buku() as $x) {
                                echo '<option value="'.$x['kode_buku'].'">'.$x['judul_buku'].'</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Peminjam</td>
                <td>:</td>
                <td>
                    <select name="kode_peminjam" class="form-select">
                        <option value="--">--</option>
                        <?php
                            $no = 1;
                            foreach ($db->tampil_data_peminjam() as $x) {
                                echo '<option value="'.$x['kode_peminjam'].'">'.$x['nama_peminjam'].'</option>';
                            }
                        ?>
                    </select>
                </td>
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
        header('Location: login.php');
    }
}
?>