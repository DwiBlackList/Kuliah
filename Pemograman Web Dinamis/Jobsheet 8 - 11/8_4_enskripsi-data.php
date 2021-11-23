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
        $password = "admin123";
        $enkrip_password = crc32($password);
        echo $enkrip_password."<br>";

        $kode = 12345;
        $enkrip_password2 = crypt($password, $kode);
        echo $enkrip_password2."<br>";

        $enkrip_password3 = md5($password);
        echo $enkrip_password3."<br>";
    ?>
</body>
</html>