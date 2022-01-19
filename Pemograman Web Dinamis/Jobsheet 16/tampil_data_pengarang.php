<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengarang</title>
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
    <h3>Data Pengarang</h3>
    <?php
        include "config.php";
        $db = new Database();
    ?>
    <a href="tambah_data_pengarang.php"><button class="btn btn-success" style="margin-bottom: 10px;">Tambah</button></a>
    <table class="table table-bordered table-hover table-dark">
        <tr>
            <th>No</th>
            <th>Kode Pengarang</th>
            <th>Nama Pengarang</th>
        </tr>
        <?php
            $no = 1;
            foreach($db->tampil_data_pengarang() as $x){
        ?>
        <tr>
            <td><?php echo $no++ ; ?></td>
            <td><?php echo $x['kode_pengarang'] ; ?></td>
            <td><?php echo $x['nama_pengarang'] ; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
</body>
</html>