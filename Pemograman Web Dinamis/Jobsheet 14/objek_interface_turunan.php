<?php
    interface mahasiswa{
        public function masuk_kuliah();
        public function praktikum();
    }
    interface mahasiswa_reguler extends mahasiswa{
        public function kelas_pagi();
    }
    class mhs_informatika implements mahasiswa_reguler{
        public function masuk_kuliah(){
             return "Mengikuti kuliah...";
        }
        public function praktikum(){
             return "Melakukan praktikum...";
        }
        public function kelas_pagi(){
             return "Masuk kuliah pagi";
        }
    }
    $mhs_baru = new mhs_informatika();
    echo $mhs_baru->kelas_pagi();
