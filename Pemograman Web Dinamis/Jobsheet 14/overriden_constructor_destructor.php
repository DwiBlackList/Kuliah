<?php
// buat class komputer
class mahasiswa
{
    // buat constructor class komputer
    public function __construct()
    {
        echo "Constructor dari class mahasiswa <br />";
    }
    // buat destructor class komputer
    public function __destruct()
    {
        echo "Destructor dari class mahasiswa <br />";
    }
}
// turunkan class mahasiswa ke mhs_informatika
class mhs_informatika extends mahasiswa
{
    // buat constructor class mhs_informatika
    public function __construct()
    {
        echo "Constructor dari class mhs_informatika <br />";
    }
    // buat destructor class mhs_informatika
    public function __destruct()
    {
        echo "Destructor dari class mhs_informatika";
    }
}
// turunkan class mhs_informatika ke kelas_reguler
class kelas_reguler extends mhs_informatika
{
    // buat constructor class kelas_reguler
    public function __construct()
    {
        echo "Constructor dari class kelas_reguler <br />";
    } // buat destructor class kelas_reguler
    public function __destruct()
    {
        echo "Destructor dari class kelas_reguler <br />";
    }
}
// buat objek dari class kelas_reguler (instansiasi)
$mhs_baru = new kelas_reguler();
echo "Belajar OOP PHP <br />";
?>