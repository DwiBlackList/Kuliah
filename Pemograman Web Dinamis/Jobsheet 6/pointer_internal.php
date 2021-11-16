<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pointer Array</title>
</head>
<body>
    <?php
        $minuman_favorit = ["Boba", "Kopi Brown Sugar", "Dalgona Coffee", "Cheese Tea", "Coklat Regal"];

        $pointer_current = current($minuman_favorit);
        $pointer_end = end($minuman_favorit);
        $pointer_prev = prev($minuman_favorit);
        $pointer_reset = reset($minuman_favorit);
        $pointer_next = next($minuman_favorit);
        echo "Elemen pertama array adalah ". $pointer_current; echo "<br>";
        echo "Elemen terakhir array adalah ". $pointer_end; echo "<br>";
        echo "Elemen array sebelum array terakhir adalah ". $pointer_prev; echo "<br>";
        echo "Reset array sehingga kembali ke elemen pertama ". $pointer_reset; echo "<br>";
        echo "Elemen array berikutnya adalah ". $pointer_next; echo "<br>";
    ?>
</body>
</html>