<?php
    interface mahasiswa{
        public function masuk_kuliah();
        public function praktikum();
    }
    class mhs_informatika implements mahasiswa{
        public function masuk_kuliah(){
             return "Mengikuti perkuliahan...";
        }
        public function praktikum(){
             return "Melakukan prkatikum...";
        }
    }
$mhs_baru = new mhs_informatika();
echo $mhs_baru->masuk_kuliah();
