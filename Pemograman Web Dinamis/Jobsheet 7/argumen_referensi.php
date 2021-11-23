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
        function tambahDua($angka){
            $angka += 2;
        }
        function tambahLima(&$angka){
            $angka += 6;
        }
        $angka_awal = 10;
        tambahDua($angka_awal);
        echo "Nilai awal adalah $angka_awal<br/>";
        tambahLima($angka_awal);
        echo "Nilai awal adalah $angka_awal<br/>";
    ?>
</body>
</html>