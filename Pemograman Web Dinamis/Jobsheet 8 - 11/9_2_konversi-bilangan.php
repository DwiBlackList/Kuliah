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
        echo bindec("10011")."<br>";   
        echo bindec("100")."<br>";
        echo decbin(11)."<br>";
        echo decoct(10)."<br>";
        echo octdec(12)."<br>";
        echo dechex(20)."<br>";
        echo hexdec(14)."<br>";
        echo number_format(453000000, 2)."<br>";
        echo number_format(453000000, 2,",",".")."<br>";
    ?>  
</body>
</html>