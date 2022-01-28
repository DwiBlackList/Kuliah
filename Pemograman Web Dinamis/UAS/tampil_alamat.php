<?php
session_start();
$username = $_SESSION['username'];
include_once "config.php";
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
            <title>Tampil Alamat</title>
            <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
            <!-- Latest compiled and minified CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Latest compiled JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="style.css">
        </head>

        <body>
            <?php
            include 'navbar-admin.php';
            ?>
            <table class="table table-bordered table-hover table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Alamat</th>
                    <th>Label Alamat</th>
                    <th>Provinsi</th>
                    <th>Kota / Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Kode POS</th>
                    <th colspan="2">AKSi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($db->tampil_alamat_user() as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $x['nama']; ?></td>
                        <td><?php echo $x['alamat']; ?></td>
                        <td><?php echo $x['label_alamat']; ?></td>
                        <td><?php echo $x['provinsi']; ?></td>
                        <td><?php echo $x['kotakab']; ?></td>
                        <td><?php echo $x['kecamatan']; ?></td>
                        <td><?php echo $x['kodepos']; ?></td>
                        <td>
                            <a href="edit-alamat.php?id=<?php echo $x['id']; ?>"><button class="btn btn-outline-primary">Edit</button></a>
                        </td>
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
                                    <a href="hapus-alamat.php?id=<?php echo $x['id']; ?>"><button class="btn btn-danger">Ya Saya Yakin</button></a>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </table>
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
            <title>Tampil Alamat</title>
            <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
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
            include 'navbar-user.php';
            ?>
            <table class="table table-bordered table-hover table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Alamat</th>
                    <th>Label Alamat</th>
                    <th>Provinsi</th>
                    <th>Kota / Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Kode POS</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($db->tampil_alamat_user_user($_SESSION['username']) as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $x['nama']; ?></td>
                        <td><?php echo $x['alamat']; ?></td>
                        <td><?php echo $x['label_alamat']; ?></td>
                        <td><?php echo $x['provinsi']; ?></td>
                        <td><?php echo $x['kotakab']; ?></td>
                        <td><?php echo $x['kecamatan']; ?></td>
                        <td><?php echo $x['kodepos']; ?></td>
                        <td>
                            <a href="edit-alamat.php?id=<?php echo $x['id']; ?>"><button class="btn btn-outline-primary">Edit</button></a>
                        </td>
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
                                    <a href="hapus-alamat.php?id=<?php echo $x['id']; ?>"><button class="btn btn-danger">Ya Saya Yakin</button></a>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    </tr>
                <?php
                }
                ?>
            </table>
        </body>

        </html>
<?php
    } else {
        echo "Anda Harus Login!";
        header('Location: login.php');
    }
}
?>