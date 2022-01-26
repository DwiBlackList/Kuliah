<?php
    include "config.php";
    $db = new Database();
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $db->login($username, $password);

    foreach($db->login($username) as $x){
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $akses_id = $x['akses_id'];
        $pass = $x['password'];
        echo $username."a" .$password. $akses_id .$pass;

        if(($akses_id == '1') && ($password==$pass)){
            header('Location: halaman_admin.php');
        } else if(($akses_id == '2') && ($password==$pass)){
            header('Location: halaman_peminjam.php');
        } else{
            header('Location: login.php');
        }
    }
?>