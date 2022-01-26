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
            <title>Tambah Data Peminjam</title>
            <!-- Latest compiled and minified CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Latest compiled JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <style>
                body {
                    background-color: black;
                    color: white;
                }
            </style>
        </head>

        <body>
            <?php
            // include "../config.php";
            include "navbar-admin.php";
            $db = new Database();
            ?>
            <div class="container p-5">
                <h3>Tambah Data Peminjam</h3>
                <form action="simpan_data_peminjam.php" method="post">
                    <table class="table table-bordered table-hover table-dark">
                        <tr>
                            <td>Kode Peminjam</td>
                            <td>:</td>
                            <td><input type="text" name="kode_peminjam" class="form-control" placeholder="Masukkan Kode Peminjam"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama_peminjam" class="form-control" placeholder="Masukkan Nama Peminjam"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><select name="jenis_kelamin" class="form-select">
                                    <option value="--"></option>
                                    <?php
                                    $no = 1;
                                    foreach ($db->tampil_data_jenis_kelamin() as $x) {
                                        echo '<option value="' . $x['kode_jk'] . '">' . $x['keterangan_jk'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal_lahir" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Peminjam"></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan Peminjam"></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-grid">
                                    <input type="submit" value="SIMPAN" class="btn btn-outline-success btn-lg">
                                </div>
                            </td>
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