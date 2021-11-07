<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else 2</title>
</head>
<body>
    <?php 
        $nama_hari = date("D");
        if ($nama_hari == "Sun") {
            echo "Minggu";
        }elseif ($nama_hari == "Mon") {
            echo "Senin";
        }elseif ($nama_hari == "Tues") {
            echo "Selasa";
        }elseif ($nama_hari == "Wed") {
            echo "Rabu";
        }elseif ($nama_hari == "Thurs") {
            echo "Kamis";
        }elseif ($nama_hari == "Fri") {
            echo "Jum'at";
        }else{
            echo "Sabtu";
        }
    ?>
</body>
</html>