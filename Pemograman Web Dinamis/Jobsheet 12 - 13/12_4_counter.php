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
        $nama_file = "counter.DAT";
        if (file_exists($nama_file)) {
            $file = fopen($nama_file , "r");
            $pencacah = (integer) trim(fgets($file , 255));
            $pencacah++ ;
            fclose($file); 
        }else{
            $pencacah = 1;
        }
        $file = fopen($nama_file, "w");
        fputs($file , $pencacah);
        fclose($file);
        printf("Anda adalah pengunjung ke-$pencacah");
    ?>
</body>
</html>