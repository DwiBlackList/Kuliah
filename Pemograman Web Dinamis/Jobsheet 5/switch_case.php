<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php
        $buah = "apel";
        switch ($buah) {
            case 'mangga':
                echo "Buah Favorit Mangga";
                break;
            case 'jeruk':
                echo "Buah Favorit Jeruk";
                break;
            case 'anggur':
                echo "Buah Favorit Anggur";
                break;
            default:
                echo "Buah Favorit Tidak Tersedia";
                break;
        }
    ?>
</body>
</html>