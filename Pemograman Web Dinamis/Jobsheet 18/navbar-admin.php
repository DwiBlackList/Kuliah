
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <img src="../img/Logo_V3.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data Buku</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_data_buku.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_data_buku.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data Jenis Buku</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_jenis_buku.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_data_jenis_buku.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data Peminjam</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_data_peminjam.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampilkan_data_peminjam.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data Penerbit</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_data_penerbit.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_data_penerbit.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data pengarang</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah_data_pengarang.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_data_pengarang.php">Tampilkan Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Peminjaman</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="peminjaman_buku.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="tampil_peminjaman.php">Tampilkan Data</a></li>
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
<?php
// switch (isset($_GET['page'])) {
//     case "tambah_data_buku.php":
//         include "DataBuku/tambah_data_buku.php";
//         break;
//     case "tampil_data_buku.php":
//         include "DataBuku/tampil_data_buku.php";
//         break;
//     case "tambah_jenis_buku.php.php":
//         include "tambah_jenis_buku.php";
//         break;
//     case "tampil_jenis_buku.php.php":
//         include "tampil_jenis_buku.php";
//         break;
//     case "tambah_data_peminjam.php":
//         include "tambah_data_peminjam.php";
//         break;
//     case "tampilkan_data_peminjam.php":
//         include "tampilkan_data_peminjam.php";
//         break;
//     case "tambah_data_penerbit.php":
//         include "tambah_data_penerbit.php";
//         break;
//     case "tampil_data_penerbit.php":
//         include "tampil_data_penerbit.php";
//         break;
//     case "tambah_data_pengarang.php":
//         include "tampil_data_pengarang.php";
//         break;
//     case "peminjaman_buku.php":
//         include "peminjaman_buku.php";
//         break;
//     case "tampil_peminjaman.php":
//         include "tampil_peminjaman.php";
//         break;
// }
?>