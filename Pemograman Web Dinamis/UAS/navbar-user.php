
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <img src="img/logo.png" alt="Avatar Logo" style="width:3.5%; margin-right: 15px;" class="rounded-pill">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  disabled" href="#" role="button" data-bs-toggle="dropdown">Jenis Barang</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_data_jenis_barang.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_data_jenis_barang.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Alamat User</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_alamat_user.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_alamat.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data Toko</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_toko.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_toko.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data Barang</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_barang.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_barang.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data User</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item disabled" href="#">Tambah Data</a></li>
                        <li><a class="dropdown-item disabled" href="#">Tampilkan Data</a></li>
                    </ul>
                </li>
            </ul>
            <a href="logout.php"><button class="btn btn-outline-danger" type="button">LOG OUT</button></a>
        </div>
    </div>
</nav>

<marquee behavior="" direction="" class="container-fluid bg-dark text-white">Selamat Datang <?php echo $_SESSION['username']; ?> </marquee>
