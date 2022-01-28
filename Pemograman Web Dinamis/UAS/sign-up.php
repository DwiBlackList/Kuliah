<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
            <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="d-flex aligns-items-center justify-content-center" style="height: 100vh;">
        <div class="card bg-dark text-white m-auto " style="width: 40%;">
            <div class="card-body">
                <h2>SIGN UP / REGISTER</h2>
                <form action="simpan-sign-up.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="nama" required>
                    </div>
                    <hr>
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
                    <div class="form-group">
                        <label for="password">Jenis Kelamin</label>
                        <select name="jenis-kelamin" id="jenis-kelamin" class="form-select" required>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki - laki</option>
                            <option value="Dan-lain-lain">Lain - lain</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="email">E - mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan E - Mail" name="email" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="NoHp">No. HandPhone</label>
                        <input type="number" class="form-control" id="nohp" placeholder="Masukkan No. Hp" name="nohp" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="foto">Foto Profile</label>
                        <input type="file" class="form-control" id="foto" placeholder="Masukkan No. Hp" name="foto">
                    </div>
                    <hr>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-success">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>