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
            <title>Tampil Data</title>
            <!-- Latest compiled and minified CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Latest compiled JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <style>
                body {
                    background-color: black;
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
                <a href="tambah_data_peminjam.php"><button class="btn btn-success" style="margin-bottom: 10px;">Tambah Data</button></a>
                <table border="1" class="table table-bordered table-hover table-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Peminjam</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($db->tampil_data() as $x) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $x['kode_peminjam']; ?></td>
                            <td><?php echo $x['nama_peminjam']; ?></td>
                            <td><?php echo $x['keterangan_jk']; ?></td>
                            <td>
                                <?php
                                $tanggal_lahir = $x['tanggal_lahir'];
                                $tanggal_lahir_ganti_format = date("d-m-Y", strtotime($tanggal_lahir));
                                echo $tanggal_lahir_ganti_format;
                                ?>
                            </td>
                            <td><?php echo $x['alamat']; ?></td>
                            <td><?php echo $x['pekerjaan']; ?></td>
                            <td>
                                <a href="edit_data_peminjam.php?id=<?php echo $x['kode_peminjam']; ?>"><button class="btn btn-outline-primary">Edit</button></a>
                                |
                                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalHapus">Hapus</button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="modal" id="ModalHapus">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Hapus Data ?</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Anda Yakin Ingin Menghapus Data Tersebut
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button class="btn btn-danger"><a href="hapus_data_peminjam.php?id=<?php echo $x['kode_peminjam']; ?>">Ya Saya Yakin</a></button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                        </div>

                    </div>
                </div>
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