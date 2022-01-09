<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <h1>Tambah Data Buku</h1>
    <?php
        include "config.php";
        $db = new Database();
    ?>
    <form action="simpan_data_buku.php" method="post">
        <table>
            <tr>
                <td>Kode Buku</td>
                <td>:</td>
                <td><input type="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul_buku"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td>
                    <select name="kode_pengarang">
                        <option value="--">--</option>
                        <?php
                            $no = 1;
                            foreach ($db->tampil_data_pengarang() as $x) {
                                echo '<option value="' .$x['kode_pengarang']. '">' .$x['nama_pengarang']. '</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Buku</td>
                <td>:</td>
                <td>
                    <select name="kode_jenis_buku">
                        <option value="--">--</option>
                        <?php 
                            $no = 1;
                            foreach ($db->tampil_data_jenis_buku() as $x ) {
                                echo '<option value="'.$x['kode_jenis_buku'].'">'.$x['nama_jenis_buku'].'</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td>
                    <select name="kode_penerbit">
                        <option value="--">--</option>
                        <?php 
                            $no = 1;
                            foreach ($db->tampil_data_penerbit() as $x ) {
                                echo '<option value="'.$x['kode_penerbit'].'">'.$x['nama_penerbit'].'</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td>:</td>
                <td><input type="text" name="isbn"></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td>
                    <select name="tahun" id="year">
                        <script>
                            var myDate = new Date();
                            var year = myDate.getFullYear();
                            for (var i = 2010; i < year+6; i++) {
                                document.write('<option value="'+i+'">'+i+'</option>')
                            }
                        </script>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="deskripsi" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" id=""></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>