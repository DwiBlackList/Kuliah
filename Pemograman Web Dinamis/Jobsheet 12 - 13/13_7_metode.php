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
        class laptop {
            public function hidupkan_laptop($pemilik , $merk)
            {
                return "Hidupkan Laptop $merk punya $pemilik";
            }
        }

        $laptop_andi = new laptop();
        echo $laptop_andi->hidupkan_laptop("Andi" , "Lenovo");
    ?>
</body>
</html>