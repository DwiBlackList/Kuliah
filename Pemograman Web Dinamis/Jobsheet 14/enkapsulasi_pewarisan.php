<?php
   // The parent class
    class Mahasiswa {
        private $nim;
        public function setNim($nim)
        {
            $this -> nim = $nim; 
        }
    }
    class mhs_informatika extends Mahasiswa{
        public function hello()
        {
            return "Halo NIM saya <b>". $this -> nim . "</b><br />";
        }
    }
    $mhs_informatika1 = new mhs_informatika();
    $mhs_informatika1 -> setNim('123456789');
    echo $mhs_informatika1 -> hello();
?>