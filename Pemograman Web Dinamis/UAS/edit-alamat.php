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
            <title>Profil Alamat</title>
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

            if (isset($_GET['id'])) {
                $id_alamat = $_GET['id'];
                $data = $db->tampil_edit_alamat_user($id_alamat);
            } else {
                header('Location: tampilkan_data_peminjam.php');
            }
            ?>
            <div class="d-flex aligns-items-center justify-content-center" style="height: 100vh;">
                <div class="card bg-dark text-white m-auto " style="width: 40%;">
                    <div class="card-body">
                        <h2>Ubah Alamat</h2>
                        <form action="simpan-edit-alamat.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
                            <!-- <input type="text" value="<?php echo $_SESSION['username'] ?>" name="nama" hidden> -->
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap" rows="4"><?php echo $data[0]['alamat']; ?></textarea>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="labelAlamat">Label / Simpan Alamat Dengan Nama</label>
                                <input type="text" class="form-control" id="labelAlamat" placeholder="Masukkan Label Alamat" name="label_alamat" value="<?php echo $data[0]['label_alamat']; ?>" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="provinsi">Provisi</label>
                                <input type="text" class="form-control" id="provinsi" placeholder="Masukkan Provinsi" name="provinsi" value="<?php echo $data[0]['provinsi']; ?>" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="kota/kab">Kota / Kabupaten</label>
                                <!-- <select name="jenis-kelamin" id="jenis-kelamin" class="form-select" required>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki - laki</option>
                            <option value="Dan-lain-lain">Lain - lain</option>
                        </select> -->
                                <input type="text" class="form-control" id="kota/kab" name="kotakab" placeholder="Masukkan Kota" value="<?php echo $data[0]['kotakab']; ?>" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="kec">Kecamatan</label>
                                <!-- <select name="jenis-kelamin" id="jenis-kelamin" class="form-select" required>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki - laki</option>
                            <option value="Dan-lain-lain">Lain - lain</option>
                        </select> -->
                                <input type="text" class="form-control" id="kec" name="kecamatan" placeholder="Masukkan Kecamatan" value="<?php echo $data[0]['provinsi']; ?>" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="kodepos">Kode POS</label>
                                <input type="number" class="form-control" id="kodepos" placeholder="Masukkan Kode POS" name="kodepos" value="<?php echo $data[0]['kodepos']; ?>" required>
                            </div>
                            <hr>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-outline-success">SIMPAN</button>
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
        header('Location: login.php');
    }
}
?>