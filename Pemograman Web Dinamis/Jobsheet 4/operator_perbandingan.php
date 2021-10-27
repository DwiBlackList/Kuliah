<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>
<body>
    <?php
        $x = 40;
        $y = "40";
        var_dump($x == $y);echo "<br>";//mengembalikan true karena nilainya sama
        var_dump($x === $y);echo "<br>";//mengembalikan false karena tipe tidak sama
        var_dump($x != $y);echo "<br>";//mengembalikan false karena nilainya sama
        var_dump($x <> $y);echo "<br>";//mengembalikan false karena nilainya sama
        var_dump($x !== $y);echo "<br>";//mengembalikan true karena tipe data tidak sama
        var_dump($x > $y);echo "<br>";//mengembalikan true karena $x lebih besar dari $y
        var_dump($x < $y);echo "<br>";//mengembalikan true karena $x lebih kecil dari y
        var_dump($x >= $y);echo "<br>";//mengembalikan true karena $x lebih besar atau sama dengan dengan $y
        var_dump($x <= $y);echo "<br>";//mengembalikan true karena $x lebih kecil atau sama dengan dengan $y
        var_dump($x <=> $y);echo "<br>";//mengembalikan 0 karena $x sama dengan $y
    ?>
</body>
</html>