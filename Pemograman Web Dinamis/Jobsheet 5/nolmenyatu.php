<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null Coalesce Operator</title>
</head>
<body>
    <?php
        $hasil = $dicek ?? "Tidak ada";
        echo "\$hasil : ".$hasil."<br>";

        $dicek = "Haloo";

        $hasil = $dicek ?? "Tidak ada";
        echo "\$hasil : ".$hasil."<br>";
    ?>
</body>
</html>