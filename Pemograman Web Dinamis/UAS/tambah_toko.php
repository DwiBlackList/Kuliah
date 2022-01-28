<?php
session_start();
$username = $_SESSION['username'];
include_once "config.php";
$db = new Database();

foreach ($db->login($username) as $x) {
    $level = $x['level'];
    if ($level == 'Admin' || $level == 'User') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Toko</title>
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
    <h3>Tambah Toko</h3>
    <form action="simpan_toko.php" method="post" enctype="multipart/form-data">
        <input type="text" value="<?php echo $_SESSION['username'] ?>" name="nama" hidden>
        <table class="table table-bordered table-hover table-dark">
            <tr>
                <td>Nama Toko</td>
                <td>:</td>
                <td><input type="text" name="namatoko" id="" class="form-control" placeholder="Masukkan Nama Toko" required></td>
            </tr>
            <tr>
                <td>Alamat Toko</td>
                <td>:</td>
                <td><textarea name="alamattoko" id="alamattok" cols="" rows="4" class="form-control" required></textarea></td>
            </tr>
            <tr>
                <td>Gambar Toko</td>
                <td>:</td>
                <td><input type="file" name="foto" id="gambar" class="form-control"></td>
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