<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>LOGIN</title>
    <style>
        body {
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="d-flex aligns-items-center justify-content-center" style="height: 100vh;">
        <div class="card bg-dark text-white m-auto " style="width: 50%;">
            <div class="card-body">
                <h2>LOGIN</h2>
                <form action="validasi_login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
                    </div>
                    <hr>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-success">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>