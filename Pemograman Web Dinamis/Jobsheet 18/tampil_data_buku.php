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
            <title>Tampil Data Buku</title>
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
                <a href="tambah_data_buku.php"><button class="btn btn-success" style="margin-bottom: 10px;">Tambah</button></a>
                <table class="table table-bordered table-hover table-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Jenis Buku</th>
                        <th>Penerbit</th>
                        <th>ISBN</th>
                        <th>Tahun</th>
                        <th>Deskripsi</th>
                        <th>Jumlah</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($db->tampil_data_buku() as $x) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $x['kode_buku']; ?></td>
                            <td><?php echo $x['judul_buku']; ?></td>
                            <td><?php echo $x['nama_pengarang']; ?></td>
                            <td><?php echo $x['nama_jenis_buku']; ?></td>
                            <td><?php echo $x['nama_penerbit']; ?></td>
                            <td><?php echo $x['isbn']; ?></td>
                            <td><?php echo $x['tahun']; ?></td>
                            <td><?php echo $x['deskripsi']; ?></td>
                            <td><?php echo $x['jumlah']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
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