<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Ddevice-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // buat class mahasiswa
    class mahasiswa
    {
        public function data_mahasiswa()
        {
            return "Nama mahasiswa: Mariska,nim : 12345678, Alamat : Yogyakarta";
        }
    }
    // turunkan class mahasiswa ke mhs_informatika
    class mhs_informatika extends mahasiswa
    {
        public function data_mahasiswa()
        {
            return "Nama mahasiswa: Jerry,nim : 987654321, Alamat : Malang";
        }
    }
    // buat objek dari class laptop (instansiasi)
    $mahasiswa_baru = new mhs_informatika();
    //panggil method lihat_spec()
    echo $mahasiswa_baru->data_mahasiswa();
    ?>
</body>

</html>