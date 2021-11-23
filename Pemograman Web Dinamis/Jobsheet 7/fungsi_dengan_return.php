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
        function hitungUmur($thn_lahir, $thn_sekarang){
            $umur = $thn_sekarang - $thn_lahir;
            return $umur;
        }
        echo "Umur saya adalah ". hitungUmur(2000, 2020) ." tahun";
    ?>
</body>
</html>