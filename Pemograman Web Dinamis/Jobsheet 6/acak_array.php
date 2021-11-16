<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acak Array</title>
</head>
<body>
    <?php
        $minuman_favorit = ["Boba", "Kopi Brown Sugar", "Dalgona Coffee", "Cheese Tea", "Coklat Regal"];
        $acak_minuman = shuffle($minuman_favorit);
        $panjang_array = count($minuman_favorit);
        for($x = 0;$x < $panjang_array; $x++){
            echo $minuman_favorit[$x];
            echo "<br>";
        }
    ?>
</body>
</html>