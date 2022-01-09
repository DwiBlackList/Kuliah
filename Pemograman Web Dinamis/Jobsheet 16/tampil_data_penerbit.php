<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jenis Buku</title>
</head>
<body>
    <h3>Data Jenis Buku</h3>
    <?php
        include "config.php";
        $db = new Database();
    ?>
    <a href="tambah_data_penerbit.php"><button>Tambah</button></a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Penerbit</th>
            <th>Nama Penerbit</th>
        </tr>
        <?php
            $no = 1;
            foreach($db->tampil_data_penerbit() as $x){
        ?>
        <tr>
            <td><?php echo $no++ ; ?></td>
            <td><?php echo $x['kode_penerbit'] ; ?></td>
            <td><?php echo $x['nama_penerbit'] ; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>