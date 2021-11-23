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
        $kalimat = "selamat pagi...";
        echo strlen($kalimat)."<br>";       // hitung jml char
        echo strtoupper($kalimat)."<br>";   // capitalize
        echo strtolower($kalimat)."<br>";   // lowercase
        echo ucfirst($kalimat)."<br>";      // capitalize pada huruf pertama pd kalimat
        echo ucwords($kalimat)."<br>";      // capitalize pada huruf pertama pd kata
        echo substr($kalimat, 2, 4)."<br>";       // mendapatkan bagian dari string
        echo substr_count($kalimat, "a")."<br>"; // menghitung jml char
        echo strpos($kalimat, "p")."<br>";       // mengetahui posisi char pada string
        echo strrev($kalimat)."<br>";       // membalik string
        echo str_replace("pagi", "siang", $kalimat)."<br>";  // mengganti bagian string
    ?>
</body>
</html>