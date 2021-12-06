<?php
    class kuliah {
        protected $nama_mahasiswa = "Anto ";
        
        public function akses_mahasiswa()
        {
            return $this->nama_mahasiswa;
        }

        protected function masuk_kuliah()
        {
            return "Masuk Kuliah";
        }

        public function masuk_kelas()
        {
            return $this->masuk_kuliah();
        }
    }

    $kuliah_anto = new kuliah();
    // $kuliah_anto->nama_mahasiswa = "Anto";

    echo $kuliah_anto->akses_mahasiswa();
    echo $kuliah_anto->masuk_kelas();
?>