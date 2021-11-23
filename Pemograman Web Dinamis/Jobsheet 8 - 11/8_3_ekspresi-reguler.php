<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>;">
        Email : <input type="text" name="email" id=""> <br> 
        <input type="submit" value="Cek">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST['email'];
            if (empty($_POST['email'])) {
                echo "email harus diisi";
            } else {
                $ekspresi = "/^[_a-z0-9-]+(\.[_a-z0-9+)*@[a-z0-9-]+(\.[_a-z0-9+)*(\.[a-z]{2,})$/i";
            }

            if (preg_match($ekspresi, $email)){
                echo "Alamat email <b>".$email."</b> valid";
            } else {
                echo "Alamat email <b>".$email."</b> tidak valid";
            }
        }
    ?>
</body>
</html>