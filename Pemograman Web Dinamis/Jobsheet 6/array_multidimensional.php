<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>
    <?php
        $mahasiswa = array(
                    'id' => array(1,2,3,4),
                    'nama' => array('Joni', 'Mona', 'Miki', 'Joko'),
                    'prodi' => array('Informatika', 'Elektronika', 'Telekomunikasi', 'Informatika'),
                    'alamat' => array('Semarang', 'Manado', 'Medan', 'Surabaya')
        );

        for($i =0; $i < 4; $i++)
        {
            echo $mahasiswa['id'][$i]." ". $mahasiswa['nama'][$i]." ". $mahasiswa['prodi'][$i]." ". $mahasiswa['alamat'][$i]; echo "<br>";
        }
    ?>
</body>
</html>