<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peminjam</title>
</head>
<body>
    <?php
        include "config.php";
        if (isset($_GET['id'])) {
            $kode_peminjam = $_GET['id'];
            $query = "SELECT a.*, b.* from data_peminjam a
            INNER JOIN jenis_kelamin b on b.kode_jk = a.jenis_kelamin
            WHERE a.kode_peminjam = '$kode_peminjam'" ;
            $pdo_statement = $koneksi->prepare($query);
            $pdo_statement->execute();
            $data_peminjam = $pdo_statement->fetchAll();
        }else {
            header('Location: tampilkan_data_peminjam.php');
        }
    ?>
    <h3>Edit Data Mahasiswa</h3>
    <form action="simpan_edit_data_peminjam.php" method="post">
        <input type="hidden" name="kode_peminjam" value="<?php echo $data_peminjam[0]['kode_peminjam']; ?>">
        <table>
            <tr>
                <td>Kode Peminjam</td>
                <td>:</td>
                <td><?php echo $data_peminjam[0]['kode_peminjam']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_peminjam" value="<?php echo $data_peminjam[0]['nama_peminjam']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><select name="jenis_kelamin">
                    <?php
                        $pdo_statement = $koneksi->prepare("SELECT * from jenis_kelamin");
                        $pdo_statement->execute();
                        $result = $pdo_statement->fetchAll();
                        foreach($result as $x){
                            $kode_jk = $data_peminjam[0]['jenis_kelamin'];
                            echo "<option value=".$x['kode_jk'];
                            if($x['kode_jk']==$kode_jk){echo " selected=selected";}
                                echo ">". $x['keterangan_jk']. "</option>"; 
                            }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $data_peminjam[0]['tanggal_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $data_peminjam[0]['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $data_peminjam[0]['pekerjaan']; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>