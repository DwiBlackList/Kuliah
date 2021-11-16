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
            'id' => array(1, 2, 3, 4),
            'nama' => array('Joni', 'Mona', 'Miki', 'Joko'),
            'prodi' => array('Informatika', 'Elektronika', 'Telekomunikasi', 'Informatika'),
            'alamat' => array('Semarang', 'Manado', 'Medan', 'Surabaya')
        );
    ?>
        <table border="1">
            <tr>
                <th>Id</th><th>Nama</th><th>Prodi</th><th>Alamat</th>
            </tr>
    <?php
        for($i=0; $i < 4; $i++){
    ?>
        <tr>
        <td><?php echo $mahasiswa['id'][$i];?></td>
        <td><?php echo $mahasiswa['nama'][$i];?></td>
        <td><?php echo $mahasiswa['prodi'][$i];?></td>
        <td><?php echo $mahasiswa['alamat'][$i];?></td>
        </tr>
    <?php
        }
    ?>
        </table>
</body>

</html>