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
        function faktorial($angka){
            if ($angka < 2){
                return 1;
            } else {
                // memanggil dirinya sendiri
                return ($angka * faktorial($angka-1));
            }
        }
        // memanggil fungsi
        echo "faktorial 5 adalah " . faktorial(5);
    ?>
</body>
</html>