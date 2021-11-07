<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi If Else</title>
</head>
<body>
    <?php 
        $suhu = 20;

        if ($suhu <= 20) {
            echo "Suhu Sejuk";
        }elseif ($suhu > 20 AND $suhu <= 27) {
            echo "suhu Biasa";
        }else {
            echo "Suhu Panas";
        }
    ?>
</body>
</html>