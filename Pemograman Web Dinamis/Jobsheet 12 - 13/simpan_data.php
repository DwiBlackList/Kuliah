<?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    if (!empty($_POST["minat1"])) {
        $minat1 = $_POST["minat1"];
    }else{
        $minat1 = "-";
    }
    if (!empty($_POST["minat2"])) {
        $minat2 = $_POST["minat2"];
    }else{
        $minat2 = "-";
    }
    if (!empty($_POST["minat3"])) {
        $minat3 = $_POST["minat3"];
    }else{
        $minat3 = "-";
    }
    if (!empty($_POST["minat4"])) {
        $minat4 = $_POST["minat4"];
    }else{
        $minat4 = "-";
    }
    $minat = $minat1 . $minat2 . $minat3 . $minat4 ;

    $data = fopen("Buku_tamu.DAT" , "a");
    fputs($data , $nama ."\n");
    fputs($data , $email ."\n");
    fputs($data , $jenis_kelamin ."\n");
    fputs($data , $minat ."\n");
?>