<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemen Unik</title>
</head>
<body>
    <?php
        $nilai = [80, 90, 80, 67, 90, 87, 75];
        $elemen_unik = array_unique($nilai);
        foreach ($elemen_unik as $key) {
            echo "$key <br>";
        }
        // phpinfo();
    ?>
</body>
</html>