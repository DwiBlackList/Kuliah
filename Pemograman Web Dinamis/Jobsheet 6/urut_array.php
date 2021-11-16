<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urut Array</title>
</head>
<body>
    <?php
        $minuman_favorit = ["Boba", "Kopi Brown Sugar", "Dalgona Coffee", "Cheese Tea", "Coklat Regal"];
        $panjang_array = count($minuman_favorit);

        // Urutan dari depan (Ascending)
        sort($minuman_favorit);
        for($x = 0; $x < $panjang_array; $x++){
            echo $minuman_favorit[$x];
            echo "<br>";
        }

        echo "<br>";

        // urutan dari belakang (Descending)
        rsort($minuman_favorit);
        for($x = 0; $x < $panjang_array; $x++){
            echo $minuman_favorit[$x];
            echo "<br>";
        }
    ?>
</body>
</html>