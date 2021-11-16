<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indeks Array</title>
</head>
<body>
    <?php
        // array dengan indeks string
        $bunga['satu'] = "Mawar";
        $bunga['dua'] = "Lilac";
        $bunga['tiga'] = "Anggrek";
        $bunga['empat'] = "Lavender";
        echo $bunga['empat'];echo "<br>";

        // array dengan indeks campuran
        $warna["red"] = "Merah";
        $warna[7] = "Kuning";
        $warna[14] = "Biru";
        $warna["purple"] = "Ungu";
        echo $warna[14];
    ?>
</body>
</html>