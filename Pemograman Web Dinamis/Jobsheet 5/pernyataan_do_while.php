<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pernyataan Do While</title>
</head>
<body>
    <?php
        $bilangan = 1;
        do {
            echo $bilangan."<br>";
            $bilangan++;
        } while ($bilangan < 10);
    ?>
</body>
</html>