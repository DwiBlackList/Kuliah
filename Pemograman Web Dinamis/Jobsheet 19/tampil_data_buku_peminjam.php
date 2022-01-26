<?php
session_start();
$username = $_SESSION['username'];
include "config.php";
$db = new Database();

foreach ($db->login($username) as $x) {
    $akses_id = $x['akses_id'];
    if ($akses_id == '2') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include "navbar-peminjam.php" ?>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Jenis Buku</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($db->tampil_data_buku() as $x ) {
                ?>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <th><?php echo $x['kode_buku']; ?></th>
                    <th><?php echo $x['judul_buku']; ?></th>
                    <th><?php echo $x['nama_pengarang']; ?></th>
                    <th><?php echo $x['nama_jenis_buku']; ?></th>
                    <th><?php echo $x['nama_penerbit']; ?></th>
                    <th><?php echo $x['isbn']; ?></th>
                    <th><?php echo $x['tahun']; ?></th>
                    <th><?php echo $x['deskripsi']; ?></th>
                    <th><?php echo $x['jumlah']; ?></th>
                </tr>
                <?php
                    }
                ?>
            </tbody>
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