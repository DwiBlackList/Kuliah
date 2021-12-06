<?php
    class laptop{
        var $pemilik;
        var $merk;
        var $ukuran_layar;

        function hidupkan_laptop()
        {
            return "Hidupkan Laptop";
        }
        function matikan_laptop()
        {
            return "Matikan Laptop";
        }
    }

    $laptop_baru = new laptop();
    $laptop_baru->pemilik = "DWI";
    $laptop_baru->merk = "EROGE";
    $laptop_baru->ukuran_layar = "25 inchi";

    echo $laptop_baru->pemilik;echo "<br>";
    echo $laptop_baru->ukuran_layar;echo "<br>";
    echo $laptop_baru->merk;echo "<br>";

    echo $laptop_baru->hidupkan_laptop();echo "<br>";
    echo $laptop_baru->matikan_laptop();echo "<br>";
?>