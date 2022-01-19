<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        body {
            background-color: black;
            color : white;
        }
        a {
            color : white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container p-5">
    <?php 
        include "config.php";
        $db = new Database();
    ?>
    <a href="peminjaman_buku.php"><button class="btn btn-success" style="margin-bottom: 10px;">Tambah</button></a>
    <table class="table table-dark table-hover table-bordered">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status Peminjaman</th>
        </tr>
        <?php 
            $no = 1;
            foreach ($db->tampil_peminjaman() as $x) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['judul_buku']; ?></td>
            <td><?php echo $x['nama_peminjam']; ?></td>
            <td>
                <?php 
                    $tanggal_pinjam = $x['tanggal_pinjam'];
                    $tanggal_pinjam1 = date("d F Y" , strtotime($tanggal_pinjam));
                    echo $tanggal_pinjam1;
                ?>
            </td>
            <td>
                <?php 
                    $tanggal_kembali = $x['tanggal_kembali'];
                    $tanggal_kembali1 = date("d F Y" , strtotime($tanggal_kembali));
                    echo $tanggal_kembali1;
                ?>
            </td>
            <td>
                <?php
                    $status_peminjaman = $x['status'];
                    if ($status_peminjaman == '1') {
                        $tanggal_hari_ini = date('d F Y');
                        if (strtotime($tanggal_hari_ini) < strtotime($tanggal_kembali1)) {
                            echo "Belum Di Kembalikan";
                        }else {
                            $waktu_kembali2 = date_create($tanggal_kembali1);
                            $tanggal_hari_ini = date("d F Y");
                            $tanggal_hari_ini2 = date_create($tanggal_hari_ini);
                            $diff = date_diff($waktu_kembali2 , $tanggal_hari_ini2);
                            echo "Belum Dikembalikan <b>(terlambat ".$diff->days." hari) </b>" ;
                        }
                    }elseif ($status_peminjaman == '2') {
                        echo "Sudah Dikembalikan";
                    }
                ?>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
</body>
</html>