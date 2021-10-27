<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting Variable</title>
</head>
<body>
    <?php 
        $var = 4.82;
        $holder = (double)$var;
        echo "$holder adalah ";
        echo gettype($holder);
        echo "<br>";
        $holder = (string)$var;
        echo "$holder adalah ";
        echo gettype($holder);
        echo "<br>";
        $holder = (integer)$var;
        echo "$holder adalah ";
        echo gettype($holder);
        echo "<br>";
        $holder = (boolean)$var;
        echo "$holder adalah ";
        echo gettype($holder);
        echo "<br>";
        echo "Tipe asli variable adalah";
        echo gettype($var);
    ?>
</body>
</html>