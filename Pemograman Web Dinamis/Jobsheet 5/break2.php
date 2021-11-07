<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break 2</title>
</head>
<body>
    <?php
        for ($i=1; $i <= 20; $i++) { 
            switch ($i) {
                case 5:
                    echo "5 - break 1 <br>";
                    break 1;
                
                case '7':
                    echo "7 - break 2 <br>";
                default:
                    echo $i."<br>";
                    break;
            }
        }
    ?>
</body>
</html>