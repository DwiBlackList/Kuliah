<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jenis Buku</title>
</head>
<body>
    <h1>Tambah Jenis Buku</h1>
    <?php
        include "config.php";
        $db = new Database();
    ?>

    <form action="simpan_data_jenis_buku.php" method="post">
        <table border="1">
            <tr>
                <td>Kode Jenis Buku</td>
                <td>:</td>
                <td><input type="text" name="kode_jenis_buku"></td>
            </tr>
            <tr>
                <td>Nama Jenis Buku</td>
                <td>:</td>
                <td><input type="text" name="nama_jenis_buku"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>