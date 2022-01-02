<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <?php
        include "config.php";
        $db = new Database();
    ?>
    <button><a href="tambah_data_peminjam.php">Tambah Data</a></button>
    <table border="1">
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
                    $tanggal_lahir_ganti_format = date("d-m-Y" , strtotime($tanggal_lahir));
                    echo $tanggal_lahir_ganti_format;
                ?>
            </td>
            <td><?php echo $x['alamat']; ?></td>
            <td><?php echo $x['pekerjaan']; ?></td>
            <td>
                <a href="edit_data_peminjam.php?id=<?php echo $x['kode_peminjam']; ?>">Edit</a>
                 | 
                <a href="hapus_data_peminjam.php?id=<?php echo $x['kode_peminjam']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>