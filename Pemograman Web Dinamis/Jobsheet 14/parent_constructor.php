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
    // buat class komputer
    class komputer
    {
        // buat constructor class komputer
        public function __construct()
        {
            echo "Constructor dari class komputer <br />";
        }
        // buat destructor class komputer
        public function __destruct()
        {
            echo "Destructor dari class komputer <br />";
        }
    }
    // turunkan class komputer ke laptop
    class laptop extends komputer
    {
    }
    // turunkan class laptop ke chromebook
    class chromebook extends laptop
    {
    }
    // buat objek dari class chromebook (instansiasi)
    $gadget_baru = new chromebook();
    echo "Belajar OOP PHP <br />";
    ?>
</body>

</html>