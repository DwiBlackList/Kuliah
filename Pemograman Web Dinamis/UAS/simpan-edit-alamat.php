<?php

include "config.php";

$koneksi = new Database();
$koneksi->simpan_edit_alamat($_POST['id'] , 
                            $_POST['alamat'] , 
                            $_POST['label_alamat'] , 
                            $_POST['provinsi'] , 
                            $_POST['kotakab'] , 
                            $_POST['kecamatan'] , 
                            $_POST['kodepos']
                        );
header('Location:halaman-admin.php');