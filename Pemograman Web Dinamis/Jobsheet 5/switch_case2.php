<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case 2</title>
</head>
<body>
    <?php
        $kendaraan = "Sepeda";
        switch ($kendaraan) {
            case 'Mobil':
                echo "Saya memakai kedaraan mobil ketika berangkat";
                break;
                
            case 'Grab':
            case 'Gojek':
                echo "Saya memakai kedaraan ojek online ketika berangkat";
                break;
            
            case 'Bus':
                echo "Saya memakai kedaraan bus ketika berangkat";
                break;
            
            case 'Sepeda':
                echo "Saya memakai kedaraan sepeda ketika berangkat";
                break;
            
            default:
                echo "Saya hari ini tidak berangkat";
                break;
        }
    ?>
</body>
</html>