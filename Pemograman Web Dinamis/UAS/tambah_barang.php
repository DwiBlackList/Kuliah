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
            <title>ADMIN</title>
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
            // include "navbar-admin.php";
            ?>
            <div class="d-flex aligns-items-center justify-content-center" style="height: 100vh;">
                <div class="card bg-dark text-white m-auto " style="width: 40%;">
                    <div class="card-body">
                        <h2>Tambah Barang</h2>
                        <form action="simpan-barang.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="namabarang">Nama Barang</label>
                                <input type="text" class="form-control" id="namabarang" placeholder="Masukkan Nama barang" name="namabarang" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="foto">Foto Barang</label>
                                <input type="file" class="form-control" id="foto" name="foto" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="id_toko">Toko</label>
                                <select name="id_toko" class="form-select" required>
                                    <option value="--">--</option>
                                    <?php
                                    $no = 1;
                                    foreach ($db->tampil_toko($_SESSION['username']) as $x) {
                                        echo '<option value="' . $x['id'] . '">' . $x['namatoko'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="jenisbarang">Jenis Barang / Kategori</label>
                                <select name="id_jenis_barang" class="form-select" required>
                                    <option value="--">--</option>
                                    <?php
                                    $no = 1;
                                    foreach ($db->tampil_data_jenis_barang() as $x) {
                                        echo '<option value="' . $x['id'] . '">' . $x['nama_kategori'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Barang" rows="4" required></textarea>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" placeholder="Masukkan Jumlah / Stok Barang" name="jumlah" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control" id="harga" placeholder="Masukkan Harga Barang (dalam Rp , tanpa titik dan koma)" name="harga" required>
                            </div>
                            <hr>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-outline-success">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
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