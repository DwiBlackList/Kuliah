<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // buat class bunga
    class bunga
    {
        public function lihat_bunga()
        {
            return "Nama bunga: mawar,
                Warna : merah, Lokasi : taman depan";
        }
    }
    // turunkan class bunga ke anggrek
    class anggrek extends bunga
    {
        public function lihat_bunga()
        {
            return "Nama bunga: anggrek,
                Warna : ungu, Lokasi : di pohon mangga";
        }
        public function lihat_jenis_bunga()
        {
            return parent::lihat_bunga();
        }
    }
    $anggrek_baru = new anggrek();
    echo $anggrek_baru->lihat_bunga();
    echo "<br />";
    echo $anggrek_baru->lihat_jenis_bunga();
    ?>
</body>

</html>