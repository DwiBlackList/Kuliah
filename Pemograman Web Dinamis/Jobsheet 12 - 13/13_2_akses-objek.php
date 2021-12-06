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
        $object = new User;
        print_r($object);echo "<br>";

        $object -> name = "Ichsanul Dwi P";
        $object -> password = "Yo Ndak Tau Kok Tanya Saiya  ";
        print_r($object);echo "<br>";

        $object->save_user();

        class User{
            public $name , $password;
            function save_user()
            {
                echo "Halo ini adalah fungsi di dalam kelas User";
            }
        }
    ?>
</body>
</html>