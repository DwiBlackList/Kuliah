<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Penerbit</title>
</head>
<body>
    <?php
        include "config.php";
        $koneksi = new Database();
    ?>
    <h3>Tambah Data Penerbit</h3>
    <form action="simpan_data_penerbit.php" method="post">
        <table>
            <tr>
                <td>Kode Penerbit</td>
                <td>:</td>
                <td><input type="text" name="kode_penerbit" id=""></td>
            </tr>
            <tr>
                <td>Nama Penerbit</td>
                <td>:</td>
                <td><input type="text" name="nama_penerbit" id=""></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>