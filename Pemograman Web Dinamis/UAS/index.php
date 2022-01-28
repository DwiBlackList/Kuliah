<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKOPEDEI</title>
    <!-- Latest compiled and minified CSS -->
            <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: black;
        }
    </style>
</head>

<body>
    <!-- <div class="d-flex justify-content-center mb-3">
        <div class="splash">
            <img src="img/logo.png" alt="">
            <h1 class="fade-in"></h1>
        </div>
    </div> -->

    <?php include 'navbar.php'; ?>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide1.jpg" alt="slide1" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" alt="slide2" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" alt="slide3" class="d-block" style="width:100%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>



    <script src="JavaScript.js"></script>
</body>

</html>