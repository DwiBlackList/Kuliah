<?php
    class kuliah {
        protected $nama_mahasiswa;
        
        protected function masuk_kuliah()
        {
            return "Masuk Kuliah";
        }
    }

    $kuliah_anto = new kuliah();
    $kuliah_anto->nama_mahasiswa = "Anto";

    echo $kuliah_anto->nama_mahasiswa;
    echo $kuliah_anto->masuk_kuliah();
?>