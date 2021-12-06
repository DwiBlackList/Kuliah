<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F Pass</title>
</head>
<body>
    <?php
        $halaman_website = "https://www.google.com";
        $berkas = fopen($halaman_website , "r");

        if ($berkas) {
            fpassthru($berkas);
        }else{
            print("Berkas $halaman_website tidak dapat dibuka");
        }
    ?>  
</body>
</html>