<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <img src="img/logo.png" alt="Avatar Logo" width="3.5%" style="margin-right: 15px;" class="rounded-pill">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Kategori</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_data_jenis_barang.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_data_jenis_barang.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li>
                    <form class="d-flex" style="width:200%; margin-left: 50px ;">
                        <div class="input-group me-2">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn btn-success" type="submit">Go</button>
                        </div>
                        <!-- <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button> -->
                    </form>
                </li>
            </ul>
            <a href="login.php"><button class="btn btn-outline-success" style="margin-right: 15px;" type="button">LOGIN</button></a>

            <a href="sign-up.php"><button class="btn btn-success" type="button">SIGN UP</button></a>
        </div>
    </div>
</nav>