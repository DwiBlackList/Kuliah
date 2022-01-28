<?php
    include "config.php";
    $db = new Database();
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // $db->login($username, $password);

    foreach($db->login($username) as $x){
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $level = $x['level'];
        $pass = $x['password'];
        // echo $username."a" .$password. $akses_id .$pass;

        if(($level == 'Admin') && ($password==$pass)){
            header('location:halaman-admin.php');
        } else if(($level == 'User') && ($password==$pass)){
            header('location:halaman-user.php');
        } else{
            header('location:login.php');
        }
    }
?>