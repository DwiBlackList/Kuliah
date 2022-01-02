<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "sewa_buku";
    var $koneksi = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_errno();
        } else {
            // echo "Koneksi database sukses";
        }
    }
    function tampil_data()
    {
        $query = "SELECT a.* , b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin";
        $data = mysqli_query($this->koneksi, $query);
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tampil_data_jenis_kelamin()
    {
        $query = "SELECT * FROM jenis_kelamin";
        $data_jenis_kelamin = mysqli_query($this->koneksi, $query);
        while ($row_jenis_kelamin = mysqli_fetch_array($data_jenis_kelamin)) {
            $hasil_jenis_kelamin[] = $row_jenis_kelamin;
        }
        return $hasil_jenis_kelamin;
    }
    function tambah_data_peminjam($kode_peminjam, $nama_peminjam, $jenis_kelamin, $tanggal_lahir, $alamat, $pekerjaan)
    {
        $query = "INSERT INTO data_peminjam VALUES ('' , '$kode_peminjam' , '$nama_peminjam' , '$jenis_kelamin' , '$tanggal_lahir' , '$alamat' , '$pekerjaan' , '0' , 'Null')";
        mysqli_query($this->koneksi, $query);
    }
    function kode_peminjam($kode_peminjam)
    {
        $query = "SELECT a.* , b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin WHERE a.kode_peminjam='$kode_peminjam' ";
        $data_peminjam = mysqli_query($this->koneksi, $query);

        while ($row_peminjam = mysqli_fetch_assoc($data_peminjam)) {
            $hasil_peminjam[] = $row_peminjam;
        }
        return $hasil_peminjam;
    }
    function edit_data_peminjam($kode_peminjam, $nama_peminjam, $jenis_kelamin, $tanggal_lahir, $alamat, $pekerjaan)
    {
        $query = "UPDATE data_peminjam SET nama_peminjam = '$nama_peminjam' , jenis_kelamin = '$jenis_kelamin' , tanggal_lahir = '$tanggal_lahir' , alamat = '$alamat' , pekerjaan = '$pekerjaan' WHERE kode_peminjam = '$kode_peminjam' ";
        mysqli_query($this->koneksi, $query);
    }
    function hapus_data_peminjam($kode_peminjam)
    {
        $query = "DELETE FROM data_peminjam WHERE kode_peminjam = '$kode_peminjam' ";
        mysqli_query($this->koneksi, $query);
    }
}
