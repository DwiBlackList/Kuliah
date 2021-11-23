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
        function hobi(){
            global $hobi_saya;
            $hobi_saya = "Travelling";
            print($hobi_saya);
            echo "<br>";
        }
        $hobi_saya = "Kuliner";
        hobi();
        print($hobi_saya)
    ?>
</body>
</html>