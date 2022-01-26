    <?php
        session_start();
        $username = $_SESSION['username'];
        include_once "config.php";
        $db = new Database();

        foreach($db->login($username)as $x){
            $akses_id = $x['akses_id'];
            if($akses_id == '1'){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penerbit Buku</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <style>
        body {
            background-color: black;
            color : white;
        }
        a {
            color : white;
            text-decoration: none;
        }
    </style> -->
</head>
<body>
    <?php
        include "navbar-admin.php";
    ?>
</body>
</html>
    <?php
            } else {
            echo "Anda Harus Login!";
            header('Location: login.php');
        }
    }
    ?>