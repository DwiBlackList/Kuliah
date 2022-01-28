<?php
session_start();
$username = $_SESSION['username'];
include "config.php";
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
            <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
            <title>Data Jenis Barang</title>
            <!-- Latest compiled and minified CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Latest compiled JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <style>
                body {
                    background-color: black;
                    color: white;
                }

                a {
                    color: white;
                    text-decoration: none;
                }
            </style>
        </head>

        <body>
            <?php
            // include "../config.php";
            include "navbar-admin.php";
            // $db = new Database();
            ?>
            <div class="container p-5">
                <h3>Data Jenis Barang</h3>

                <!-- <a href="tambah_jenis_buku.php"><button class="btn btn-success" style="margin-bottom: 10px;">Tambah</button></a> -->
                <table class="table table-bordered table-hover table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Jenis Buku</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($db->tampil_data_jenis_barang() as $x) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $x['nama_kategori']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </body>

        </html>
    <?php
    } elseif ($level == 'User') {
    ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
            <title>Data Jenis Barang</title>
            <!-- Latest compiled and minified CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Latest compiled JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <style>
                body {
                    background-color: black;
                    color: white;
                }

                a {
                    color: white;
                    text-decoration: none;
                }
            </style>
        </head>

        <body>
            <?php
            // include "../config.php";
            include "navbar-user.php";
            // $db = new Database();
            ?>
            <div class="container p-5">
                <h3>Data Jenis Barang</h3>

                <!-- <a href="tambah_jenis_buku.php"><button class="btn btn-success" style="margin-bottom: 10px;">Tambah</button></a> -->
                <table class="table table-bordered table-hover table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Jenis Buku</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($db->tampil_data_jenis_barang() as $x) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $x['nama_kategori']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </body>

        </html>

<?php
    }
}
?>