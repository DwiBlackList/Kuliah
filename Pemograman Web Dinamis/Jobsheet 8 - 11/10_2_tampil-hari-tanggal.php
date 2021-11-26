<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nama_hari = array("Minggu" , "Senin" , "Selasa" , "Rabu" , "Kamis" , "Jumat" , "Sabtu");
        $nama_bulan = array("" , "Januari" , "Februari" , "Maret" , "April" , "Mei" , "Juni" , "Juli" , "Agustus" , "September" , "Oktober" , "November" , "Desember");

        $kode_hari = date("w");
        $hari = $nama_hari[$kode_hari];
        $tanggal = date("j");
        $kode_bulan = date("m");
        $bulan = $nama_bulan[$kode_bulan];
        $tahun = date("Y");

        echo "Sekarang hari ".$hari.", tanggal ".$tanggal." ".$bulan." ".$tahun."<br>";
        print("Sekarang hari $hari, tanggal $tanggal $bulan $tahun ");
    ?>
</body>
</html>
