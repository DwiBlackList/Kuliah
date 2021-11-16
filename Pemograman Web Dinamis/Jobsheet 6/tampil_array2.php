<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Array</title>
</head>
<body>
    <?php
    $minuman_favorit = ["Boba", "Kopi Brown Sugar", "Dalgona Coffee", "Cheese Tea", "Coklat Regal"];
    for($i = 0; $i <5;$i++){
        echo $minuman_favorit[$i];echo "<br>";
    }
    ?>
</body>
</html>