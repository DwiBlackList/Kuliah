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
        $object1 = new User();
        $object1->name = "Alisa";
        $object2 = clone $object1;
        $object2->name = "Amira";

        echo "Object 1 name = ". $object1->name . "<br>";
        echo "Object 2 name = ". $object2->name . "<br>";

        class User{
            public $name;
        }
    ?>
</body>
</html>