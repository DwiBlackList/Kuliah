<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    <style>
        body {
            background-color: black;
        }
        h1 {
            color: white;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container p-5">
    <h1>Edit Data Buku</h1>
    <?php
        include "config.php";
        if (isset($_GET['id'])) {
            $kode_buku = $_GET['id'];
            $query = "SELECT a.*, b.* from data_buku a
            INNER JOIN data_jenis_buku b ON b.kode_jenis_buku = a.kode_jenis_buku
            WHERE a.kode_buku = '$kode_buku'" ;
            $pdo_statement = $koneksi->prepare($query);
            $pdo_statement->execute();
            $data_buku = $pdo_statement->fetchAll();
        }else {
            header('Location: tampilkan_data_buku.php');
        }
    ?>
    <form action="simpan_edit_data_buku.php" method="post">
        <input type="hidden" name="kode_buku" value="<?php echo $data_buku[0]['kode_buku']; ?>">
        <table class="table table-dark table-hover table-bordered">
            <tr>
                <td>Kode Buku</td>
                <td>:</td>
                <td><?php echo $data_buku[0]['kode_buku']; ?></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul_buku" value="<?php echo $data_buku[0]['judul_buku']; ?>" class="form-control" placeholder="Masukkan Judul Buku"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td>
                    <select name="kode_pengarang"  class="form-select">
                        <option value="--">--</option>
                        <?php
                            $pdo_statement = $koneksi->prepare("SELECT * from data_pengarang");
                            $pdo_statement->execute();
                            $result = $pdo_statement->fetchAll();
                            foreach($result as $x){
                                $kode_pengarang = $data_buku[0]['kode_pengarang'];
                                echo "<option value=".$x['kode_pengarang'];
                                    if($x['kode_pengarang']==$kode_pengarang){
                                        echo " selected=selected";
                                    }
                                echo ">". $x['nama_pengarang']. "</option>"; 
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Buku</td>
                <td>:</td>
                <td>
                    <select name="kode_jenis_buku"  class="form-select">
                        <option value="--">--</option>
                        <?php 
                            $pdo_statement = $koneksi->prepare("SELECT * from data_jenis_buku");
                            $pdo_statement->execute();
                            $result = $pdo_statement->fetchAll();
                            foreach($result as $x){
                                $kode_jenis_buku = $data_buku[0]['kode_jenis_buku'];
                                echo "<option value=".$x['kode_jenis_buku'];
                                    if($x['kode_jenis_buku']==$kode_jenis_buku){
                                        echo " selected=selected";
                                    }
                                echo ">". $x['nama_jenis_buku']. "</option>"; 
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td>
                    <select name="kode_penerbit"  class="form-select">
                        <option value="--">--</option>
                        <?php 
                            $pdo_statement = $koneksi->prepare("SELECT * from data_penerbit");
                            $pdo_statement->execute();
                            $result = $pdo_statement->fetchAll();
                            foreach($result as $x){
                                $kode_penerbit = $data_buku[0]['kode_penerbit'];
                                echo "<option value=".$x['kode_penerbit'];
                                    if($x['kode_penerbit']==$kode_penerbit){
                                        echo " selected=selected";
                                    }
                                echo ">". $x['nama_penerbit']. "</option>"; 
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td>:</td>
                <td><input type="text" name="isbn" value="<?php echo $data_buku[0]['isbn']; ?>"  class="form-control" placeholder="Masukkan ISBN Buku"></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td>
                    <select name="tahun" id="year"  class="form-select">
                        <?php 
                            $pdo_statement = $koneksi->prepare("SELECT * from data_buku");
                            $pdo_statement->execute();
                            $result = $pdo_statement->fetchAll();
                            foreach($result as $x){
                                $tahun = $data_buku[0]['tahun'];
                                echo "<option value=".$x['tahun'];
                                    if($x['tahun']==$tahun){
                                        echo " selected=selected";
                                    }
                                echo ">". $x['tahun']. "</option>"; 
                            }
                        ?>
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
                <td><textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan Deskripsi Buku"><?php echo $data_buku[0]['deskripsi']; ?></textarea></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" id="" value="<?php echo $data_buku[0]['jumlah']; ?>"  class="form-control" placeholder="Masukkan Jumlah Buku"></td>
            </tr>
            <tr>
                <td colspan="3"><div class="d-grid"><input type="submit" value="SIMPAN" class="btn btn-outline-success"></div></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>