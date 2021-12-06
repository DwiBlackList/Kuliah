<?php

use laptop as GlobalLaptop;

class laptop {
        var $pemilik;

        function hidupkan_laptop()
        {
            return "Hidupkan Laptop";
        }
    }

    $laptop_anto = new laptop();
    $laptop_andi = new laptop();
    $laptop_dina = new laptop();
    
    $laptop_anto->pemilik = "Anto";
    $laptop_andi->pemilik = "Andi";
    $laptop_dina->pemilik = "Dina";

    echo $laptop_anto->pemilik;echo "<br>";
    echo $laptop_andi->pemilik;echo "<br>";
    echo $laptop_dina->pemilik;echo "<br>";
?>