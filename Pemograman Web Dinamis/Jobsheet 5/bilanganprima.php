<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
</head>
<body>
    Berikut Bilangan Prima :
<?php
    # Clue : Syarat Bilangan Prima yaitu bilangan yang habis di bagi bilangan itu sendiri dan dibagi 1, tapi angka 1 bukan bilangan prima

    for($i=1;$i<=100;$i++){ // angka awal variable i adalah 1 , set sampai kurang dari sama dengan 50 , i increment
        $a = 0; //variable a sama dengan 0
        for($j=1;$j<=$i;$j++){ // angka awal variable j adalah i , jika variable j kurang dari sama dengan (hasil dari variable i) brarti juga 50 , j increment
            if($i % $j == 0){ // jika i dibagi j sama dengan 0 /habis dibagi
                $a++; //// variable a increment
            }
        }
        if($a == 2){ //menyeleksi bilangan prima atau bukan, dikatakan bilangan prima jika bilangan itu hanya bisa dibagi oleh bilangan satu atau dibagi bilangan itu sendiri
        echo $i.' '; // mengeluarkan nilai var $i dengan whitespace
        }
    }
?>
</body>
</html>