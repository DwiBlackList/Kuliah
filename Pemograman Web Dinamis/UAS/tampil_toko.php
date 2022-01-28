<?php
session_start();
$username = $_SESSION['username'];
include "config.php";
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
            <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
            <title>Data Jenis Barang</title>
            <!-- Latest compiled and minified CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Latest compiled JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <link rel="stylesheet" href="style.css">
        </head>

        <body>
            <?php
            // include "../config.php";
            include "navbar-admin.php";

            // $db = new Database();
            ?>
            <div class="container p-5">
                <h3>Data Toko</h3>

                <!-- <a href="tambah_jenis_buku.php"><button class="btn btn-success" style="margin-bottom: 10px;">Tambah</button></a> -->
                <table class="table table-bordered table-hover table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Pemilik</th>
                        <th>Nama Toko</th>
                        <th>Alamat Toko</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($db->tampil_toko($_SESSION['username']) as $x) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $x['nama']; ?></td>
                            <td><?php echo $x['namatoko']; ?></td>
                            <td><?php echo $x['alamattoko']; ?></td>
                            <td><img src="img/<?php echo $x['gambar']; ?>" alt="gambar"></td>
                            <td>
                                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalHapus<?php echo $no; ?>">Hapus</button>
                            </td>
                        </tr>
                        <div class="modal" id="ModalHapus<?php echo $no; ?>">
                            <div class="modal-dialog" style="color: black !important;">
                                <div class="modal-content">


                                    <div class="modal-header">
                                        <h4 class="modal-title">Hapus Data ?</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        Anda Yakin Ingin Menghapus Data Tersebut
                                    </div>

                                    <div class="modal-footer">
                                    <a href="hapus-toko.php?id=<?php echo $x['id']; ?>"><button class="btn btn-danger">Ya Saya Yakin</button></a>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                    </div>

                                </div>
                            </div>
                        </div>
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
        header('Location: index.php');
    }
}
?>