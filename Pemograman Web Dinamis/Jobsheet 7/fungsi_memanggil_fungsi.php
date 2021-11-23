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
        function hitungUmur($thn_lahir, $thn_sekarang)
        {
            $umur = $thn_sekarang - $thn_lahir;
            return $umur;
        }
        function perkenalan($nama, $salam="Assalamualaikum"){
            echo $salam.",";
            echo "Perkenalkan, nama saya ".$nama."<br/>";
            // memanggil fungsi lain
            echo "Saya berusia ". hitungUmur(2000,2020) ." tahun<br/>";
            echo "Senang berkenalan dengan anda<br/>";
        }
        // memanggil fungsi perkenalan
        perkenalan("Ardianta");
    ?>
</body>
</html>