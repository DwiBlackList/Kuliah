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

        $query2 = "SELECT id FROM data_peminjam ORDER BY id DESC LIMIT 1";
        $ambil_id = mysqli_query($this->koneksi , $query2);
        $row_id = mysqli_fetch_array($ambil_id);
        $hasil_id = $row_id['id'];

        $query3 = "INSERT INTO user VALUES ('' , '$kode_peminjam' , '$kode_peminjam' , '2' , '$hasil_id')";
        mysqli_query($this->koneksi , $query3);

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
    // pembatas job 15 dan 16

    function tambah_data_jenis_buku($kode_jenis_buku, $nama_jenis_buku)
    {
        $query = "INSERT INTO data_jenis_buku VALUES ('' , '$kode_jenis_buku' , '$nama_jenis_buku')";
        mysqli_query($this->koneksi, $query);
    }
    function tampil_data_jenis_buku()
    {
        $query = "SELECT * FROM data_jenis_buku";
        $data = mysqli_query($this->koneksi, $query);
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tambah_data_penerbit($kode_penerbit, $nama_penerbit)
    {
        $query = "INSERT INTO data_penerbit VALUES ('' , '$kode_penerbit' , '$nama_penerbit')";
        mysqli_query($this->koneksi, $query);
    }
    function tampil_data_penerbit()
    {
        $query = "SELECT * FROM data_penerbit";
        $data = mysqli_query($this->koneksi, $query);
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tambah_data_pengarang($kode_pengarang, $nama_pengarang)
    {
        $query = "INSERT INTO data_pengarang VALUES ('' , '$kode_pengarang' , '$nama_pengarang')";
        mysqli_query($this->koneksi, $query);
    }
    function tampil_data_pengarang()
    {
        $query = "SELECT * FROM data_pengarang";
        $data = mysqli_query($this->koneksi, $query);
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tambah_data_buku($kode_buku , $judul_buku , $kode_pengarang , $kode_jenis_buku , $kode_penerbit , $isbn , $tahun , $deskripsi , $jumlah)
    {
        $query = "INSERT INTO data_buku VALUES ('' , '$kode_buku' , '$judul_buku' , '$kode_pengarang' , '$kode_jenis_buku' , '$kode_penerbit' , '$isbn' , '$tahun' , '$deskripsi' , '$jumlah')";
        mysqli_query($this->koneksi, $query);
    }
    function tampil_data_buku()
    {
        $query = "SELECT a.* , b.* , c.* , d.* FROM data_buku a
                    INNER JOIN data_pengarang b ON b.kode_pengarang = a.kode_pengarang
                    INNER JOIN data_jenis_buku c ON c.kode_jenis_buku = a.kode_jenis_buku
                    INNER JOIN data_penerbit d ON d.kode_penerbit = a.kode_penerbit
        ";
        $data = mysqli_query($this->koneksi, $query);
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tampil_data_peminjam()
    {
        $query = "SELECT * FROM data_peminjam";
        $data = mysqli_query($this->koneksi, $query);
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tambah_peminjaman($kode_buku , $kode_peminjam)
    {
        $tanggal_pinjam = date('Y-m-d');
        $tanggal_kembali = date('Y-m-d' , time() + (60 * 60 * 24 * 7));
        $query = "INSERT INTO peminjaman VALUES ('' , '$kode_buku' , '$kode_peminjam' , '$tanggal_pinjam' , '$tanggal_kembali' , '1')";
        mysqli_query($this->koneksi, $query);
    }
    function tampil_peminjaman()
    {
        $query = "SELECT a.* , b.* , c.* FROM peminjaman a
                    INNER JOIN data_buku b ON b.kode_buku = a.kode_buku
                    INNER JOIN data_peminjam c ON c.kode_peminjam = a.kode_peminjam
        ";
        $data = mysqli_query($this->koneksi, $query);
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function login($username){
        $data = mysqli_query($this->koneksi,"SELECT * FROM user WHERE username = '$username'");
        $isnull = mysqli_num_rows($data);
        // echo $isnull;
        if ($isnull == 0){
            echo "<b>Data user tidak ada</b>";
            $hasil = [];
            // print_r($hasil);
            header('Location: login.php');
        } else{
            while($row=mysqli_fetch_array($data)){
                $hasil[] = $row;
                // print_r($hasil);
            }
        }
        return $hasil;
    }
    function tampil_peminjaman_peminjam($username)
    {
        $query = "SELECT a.* , b.* , c.* FROM peminjaman a
                    INNER JOIN data_buku b ON b.kode_buku = a.kode_buku
                    INNER JOIN data_peminjam c ON c.kode_peminjam = a.kode_peminjam
                    WHERE a.kode_peminjam = '$username'
        ";
        $data = mysqli_query($this->koneksi , $query);

        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}
