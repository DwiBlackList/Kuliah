<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemen Beda</title>
</head>
<body>
    <?php
        $nilai_kelas_A = array(78 , 90 , 82 , 86 , 80 , 90);
        $nilai_kelas_B = array(90 , 80 , 75 , 76 , 79 , 85);

        $elemen_beda = array_diff($nilai_kelas_A, $nilai_kelas_B);
        print_r($elemen_beda);

        echo "<br>";

        foreach ($elemen_beda as $indeks => $elemen) {
            echo $elemen."<br>";
        }
    ?>
</body>
</html>