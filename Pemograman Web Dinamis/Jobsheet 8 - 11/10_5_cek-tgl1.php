<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cek_tgl2.php" method="get">
        Tanggal lahir 
        <select name="tanggal" id="">
            Tanggal : 
            <?php 
                for ($i=1; $i < 32; $i++) { 
                    print("<option value='$i'>$i</option>");
                }
            ?>
        </select>
        <select name="bulan" id="">
            <option value="0" selected>Bulan</option>
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
        <select name="tahun" id="">
            <?php
                $sekarang = (integer) date("Y");
                for ($i=$sekarang; $i < ($sekarang - 120); $i--) { 
                    print ("<option value='$i'>$i</option>");
                }
            ?>
        </select>
        <input type="submit" value="Cek">
    </form>
</body>
</html>