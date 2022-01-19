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
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status Peminjaman</th>
        </tr>
        <?php
            $query = "SELECT a.*, b.*, c.* FROM peminjaman a 
            INNER JOIN data_buku b ON b.kode_buku = a.kode_buku
            INNER JOIN data_peminjam c ON c.kode_peminjam = a.kode_peminjam" ; 
            $pdo_statement = $koneksi->prepare($query);
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
            $no = 1;
            foreach($result as $x){
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
                    if($status_peminjaman == '1'){
                        $tanggal_hari_ini = date('d F Y');
                        if(strtotime($tanggal_hari_ini)<strtotime($tanggal_kembali)){
                            echo "Belum Dikembalikan";
                        } else{
                            $waktu_kembali2 = date_create($tanggal_kembali1);
                            $tanggal_hari_ini = date("d F Y");
                            $tanggal_hari_ini2 = date_create($tanggal_hari_ini);
                            $diff = date_diff($waktu_kembali2, $tanggal_hari_ini2);
                            echo "Belum dikembalikan <b>(terlambat ". $diff->days. " hari)</b>";
                        }
                    } else if($status_peminjaman = '2'){
                        echo "Sudah dikembalikan";
                    }
                ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>