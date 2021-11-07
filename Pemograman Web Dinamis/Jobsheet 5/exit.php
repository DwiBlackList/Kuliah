<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exit</title>
</head>
<body>
    <?php
        for ($i=1; $i <= 25; $i++) { 
            echo $i."<br>";
            if ($i == 10) {
                exit;
            }
        }
    ?>
</body>
</html>