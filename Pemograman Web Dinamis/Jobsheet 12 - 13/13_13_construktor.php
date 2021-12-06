<?php
    class laptop {
        private $pemilik = "Andi";
        private $merk = "Lenovo";

        public function __construct()
        {
            echo "Ini berasal dari Constructor Laptop";
        }
        public function hidupkan_laptop()
        {
            return "Hidupkan Laptop $this->merk punya $this->pemilik";
        }
        public function __destruct()
        {
            echo "Ini berasa dari Destructor Laptop";
        }
    }

    $laptop_andi = new laptop();
    echo "<br>";
    echo $laptop_andi->hidupkan_laptop();
    echo "<br>";
?>