<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $waktu_sekarang = time();
        echo $waktu_sekarang."<br>";
        echo date("Y-m-d H:i:s" , $waktu_sekarang)."<br>";
        $satu_menit_kemudian = date("Y-m-d H:i:s" , time() + 60);
        echo "Satu menit kemudian : " .$satu_menit_kemudian."<br>";
        $satu_hari_kemudian = date("Y-m-d H:i:s" , time() + (60 * 60 * 24));
        echo "Satu hari kemudian : " . $satu_hari_kemudian."<br>";
        $satu_minggu_kemudian = date("Y-m-d H:i:s" , time() + (60 * 60 * 24 * 7));
        echo "Satu minggu kemudian : " . $satu_minggu_kemudian."<br>";
        echo "<b>Menghitung selisih : </b>";

        $hari_ini = time();
        $hari_ini_1 = $hari_ini/86400;
        $besok = time() + (60 * 60 * 48);
        $besok_1 = mktime($besok);
        $selisih = (int)($besok - $hari_ini)/86400;
        echo "Masih ada <b>$selisih</b> hari lagi"

    ?>
</body>
</html>