<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggambar Segitiga</title>
</head>
<body>
    <?php
        $tinggi = 7;
        for ($baris=1; $baris <= $tinggi; $baris++) { 
            for ($kolom=1; $kolom <= $baris; $kolom++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
</body>
</html>