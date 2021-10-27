<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Sensitive</title>
</head>
<body>
    <?php
        $hobi = "Rebahan" ;
        echo "Hobi saya adalah ". $hobi . "<br>";
        echo "Hobi saya adalah ". $HOBI . "<br>";
        echo "Hobi saya adalah ". $HObi . "<br>";
    ?>
</body>
</html>