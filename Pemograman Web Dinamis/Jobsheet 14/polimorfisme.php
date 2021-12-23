<?php
abstract class mahasiswa
{ // buat abstract class
    abstract public function masuk_kuliah(); // buat abstract method
}
class mhs_informatika extends mahasiswa
{
    public function masuk_kuliah()
    {
        return "Mahasiswa Informatika masuk kuliah";
    }
}
class mhs_elektro extends mahasiswa
{
    public function masuk_kuliah()
    {
        return "Mahasiswa Elektro masuk kuliah";
    }
}
class mhs_telekomunikasi extends mahasiswa
{
    public function masuk_kuliah()
    {
        return "Mahasiswa Telekomunikasi masuk kuliah";
    }
}
// buat objek dari class diatas
$mhs_informatika_baru = new mhs_informatika();
$mhs_elektro_baru = new mhs_elektro();
$mhs_telekomunikasi_baru = new mhs_telekomunikasi();
// buat fungsi untuk memproses objek
function mhs_masuk_kuliah($objek_komputer)
{
    return $objek_komputer->masuk_kuliah();
}
// jalankan fungsi


echo mhs_masuk_kuliah($mhs_informatika_baru);
echo "<br />";
echo mhs_masuk_kuliah($mhs_elektro_baru);
echo "<br />";
echo mhs_masuk_kuliah($mhs_telekomunikasi_baru);
