<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../img/Logo_V3.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
        </a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="tampil_peminjaman_peminjam.php">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tampil_data_buku_peminjam.php">Daftar Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="setting_peminjam.php?id=<?php echo $_SESSION['username']; ?>">Setting</a>
                </li>
            </ul>
            <a href="logout.php"><button class="btn btn-outline-danger" type="button">LOG OUT</button></a>
        </div>
    </div>
</nav>
<marquee behavior="" direction="" class="container-fluid bg-dark text-white">Selamat Datang <?php echo $_SESSION['username']; ?> </marquee>