<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Elemen</title>
</head>
<body>
    <?php
        $nilai = [80, 90, 80, 67, 90, 87, 75];
        $cari_nilai = in_array(100, $nilai);
        if ($cari_nilai)
        {
            echo "Nilai mahasiswa ada yang 100";
        }
        else
        {
            echo "Mahasiswa tidak ada yang dapat nlai 100";
        }
    ?>
</body>
</html>