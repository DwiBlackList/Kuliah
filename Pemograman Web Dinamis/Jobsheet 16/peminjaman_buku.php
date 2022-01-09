<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
</head>
<body>
    <?php 
        include "config.php";
        $db = new Database();
    ?>
    <h3>Peminjaman Buku</h3>
    <form action="simpan_peminjaman.php" method="post">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td>
                    <select name="kode_buku">
                        <option value="--">--</option>
                        <?php
                            $no = 1;
                            foreach ($db->tampil_data_buku() as $x) {
                                echo '<option value="'.$x['kode_buku'].'">'.$x['judul_buku'].'</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Peminjam</td>
                <td>:</td>
                <td>
                    <select name="kode_peminjam">
                        <option value="--">--</option>
                        <?php
                            $no = 1;
                            foreach ($db->tampil_data_peminjam() as $x) {
                                echo '<option value="'.$x['kode_peminjam'].'">'.$x['nama_peminjam'].'</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>