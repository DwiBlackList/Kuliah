<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
        echo strlen("Selamat Pagi");echo "<br>";//srtlen merupakan fungsi untuk menghitung jumlah karakter
        echo str_word_count("Selamat Pagi");echo "<br>";//str_word_count merupakan fungsi untuk menghitung jumlah kata
        echo str_replace("Santi","Bisma","Nama saya Santi");echo "<br>";//str_replace merupakan fungsi untuk menggatikan sebuah string
        echo substr("Nama saya Santi", 2 , 6);echo "<br>";//substr merupakan fungsi untuk membuang 2 karakter awal dan menampilakan 6 karakter sebelahnya
        echo strtolower("Selamat BELAJAR");echo "<br>";//strtolower merupakan fungsi untuk membuat tulisan menjadi kecil semua
        echo strtoupper("selamat belajar");echo "<br>";//strtoupper merupakan fungsi untuk membuat tulisan menjadi besar semua
        echo ucfirst("awal paragraf");echo "<br>";//ucfirst merupakan fungsi untuk membuat huruf pada awal kalimat menjadi besar
        echo ucwords("teknik informatika polines");echo "<br>";//ucword merupakan fungsi untuk membuat huruf pada awal kalimat menjadi besar semua
    ?>
</body>
</html>