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
        // membuat fungsi
        function perkenalan($nama, $salam){
            echo $salam.", ";
            echo "Perkenalan, nama saya ".$nama."<br/>";
            echo "Senang berkenalan dengan anda<br/>";
        }
        // memanggil fungsi yang sudah dibuat
        perkenalan("Muhardian", "HI");
        echo "<hr>";
        $saya = "Indry";
        $ucapanSalam = "Selamat pagi";
        // memanggilnya lagi
        perkenalan($saya, $ucapanSalam);
    ?>
</body>
</html>