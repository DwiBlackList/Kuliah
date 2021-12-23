<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Ddevice-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    // buat class kuliah
    class kuliah
    {
        protected $jam_perkuliahan = "4 jam pertemuan"; // property dengan hak akses protected
    }
    // buat class praktikum
    class praktikum extends kuliah
    {
        public function tampilkan_pertemuan()
        {
            return $this->jam_perkuliahan;
        }
    }
    // buat objek dari class laptop (instansiasi)
    $kuliah_baru = new praktikum();
    // jalankan method
    echo $kuliah_baru->tampilkan_pertemuan(); // "Intel Core i7-4790 3.6Ghz"|
    ?>
</body>

</html>