<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "tokopedei";
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

    function login($username)
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM user WHERE username = '$username'");
        $isnull = mysqli_num_rows($data);
        if ($isnull == 0) {
            echo "<b>Data user tidak ada</b>";
            $hasil = [];
            header('Location: login.php');
        } else {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }

    function register($nama, $username, $password, $jenis_kelamin, $email, $nohp, $foto)
    {
        //cek dulu jika ada gambar produk jalankan coding ini
        if ($foto != "") {
            $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
            $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];
            $angka_acak     = rand(1, 999);
            $nama_gambar_baru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan nama file sebenarnya
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, 'img/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
                // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                $query = "INSERT INTO user VALUES ('' , '$nama' , '$username' , '$password' , '$jenis_kelamin' , '$email' , '$nohp' , '$nama_gambar_baru' , 'User')";
                $result = mysqli_query($this->koneksi, $query);
                // periska query apakah ada error
                if (!$result) {
                    die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) .
                        " - " . mysqli_error($this->koneksi));
                } else {
                    //tampil alert dan akan redirect ke halaman sign-up.php
                    //silahkan ganti sign-up.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='sign-up.php';</script>";
                }
            } else {
                //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='sign-up.php';</script>";
            }
        } else {
            $query = "INSERT INTO user VALUES ('' , '$nama' , '$username' , '$password' , '$jenis_kelamin' , '$email' , '$nohp' , 'default.jpg' , 'User')";
            $result = mysqli_query($this->koneksi, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) .
                    " - " . mysqli_error($this->koneksi));
            } else {
                //tampil alert dan akan redirect ke halaman sign-up.php
                //silahkan ganti sign-up.php sesuai halaman yang akan dituju
                echo "<script>alert('Data berhasil ditambah.');window.location='sign-up.php';</script>";
            }
        }
    }

    function tambah_data_jenis_barang($nama_jenis_barang)
    {
        $query = "INSERT INTO jenis_barang VALUES ('' , '$nama_jenis_barang')";
        mysqli_query($this->koneksi, $query);
    }
    function tampil_data_jenis_barang()
    {
        $query = "SELECT * FROM jenis_barang";
        $data_jenis_barang = mysqli_query($this->koneksi, $query);
        while ($row_jenis_barang = mysqli_fetch_array($data_jenis_barang)) {
            $hasil_jenis_barang[] = $row_jenis_barang;
        }
        return $hasil_jenis_barang;
    }




    function tambah_alamat($nama , $alamat , $label_alamat , $provinsi , $kotakab , $kecamatan , $kodepos)
    {
        $query1 = "SELECT * FROM user WHERE username = '$nama' ";
        mysqli_query($this->koneksi, $query1);
        $ambil_id = mysqli_query($this->koneksi , $query1);
        $row_id = mysqli_fetch_array($ambil_id);
        $hasil_id = $row_id['id'];
        // echo $hasil_id;
        
        $query2 = "INSERT INTO alamat_user VALUES ('' , '$hasil_id' , '$alamat' , '$label_alamat' , '$provinsi' , '$kotakab' , '$kecamatan' , '$kodepos')";
        print_r($query2);
        mysqli_query($this->koneksi, $query2);
    }
    function tampil_alamat_user()
    {
        $query = "SELECT a.* , b.nama FROM alamat_user a INNER JOIN user b ON b.id = a.id_user";
        $data_alamat_user = mysqli_query($this->koneksi, $query);
        while ($row_alamat_user = mysqli_fetch_array($data_alamat_user)) {
            $hasil_alamat_user[] = $row_alamat_user;
        }
        return $hasil_alamat_user;
    }
    function tampil_alamat_user_user($username)
    {
        $query1 = "SELECT * FROM user WHERE username = '$username' ";
        mysqli_query($this->koneksi, $query1);
        $ambil_id = mysqli_query($this->koneksi , $query1);
        $row_id = mysqli_fetch_array($ambil_id);
        $hasil_id = $row_id['id'];
        // echo $hasil_id;

        $query = "SELECT a.* , b.nama FROM alamat_user a INNER JOIN user b ON b.id = a.id_user WHERE id_user = '$hasil_id'";
        $data_alamat_user = mysqli_query($this->koneksi, $query);
        while ($row_alamat_user = mysqli_fetch_array($data_alamat_user)) {
            $hasil_alamat_user[] = $row_alamat_user;
        }
        return $hasil_alamat_user;
    }
    function tampil_edit_alamat_user($id_alamat)
    {
        $query = "SELECT a.* , b.nama FROM alamat_user a INNER JOIN user b ON b.id = a.id_user WHERE a.id = '$id_alamat' ";
        $data_alamat_user = mysqli_query($this->koneksi, $query);
        while ($row_alamat_user = mysqli_fetch_array($data_alamat_user)) {
            $hasil_alamat_user[] = $row_alamat_user;
        }
        return $hasil_alamat_user;
    }
    function simpan_edit_alamat($id , $alamat , $label_alamat , $provinsi , $kotakab , $kecamatan , $kodepos)
    {
        $query = "UPDATE alamat_user SET alamat = '$alamat' , label_alamat = '$label_alamat' , provinsi = '$provinsi' , kotakab = '$kotakab' , kecamatan = '$kecamatan' , kodepos = '$kodepos' WHERE id = '$id' ";
        mysqli_query($this->koneksi, $query);
        print_r($query);
    }
    function hapus_alamat_user($id)
    {
        $query = "DELETE FROM alamat_user WHERE id = '$id' ";
        mysqli_query($this->koneksi, $query);
    }


    function simpan_toko($nama , $namatoko , $alamattoko , $foto)
    {
        //ambil id user
        $query1 = "SELECT * FROM user WHERE username = '$nama' ";
        mysqli_query($this->koneksi, $query1);
        $ambil_id = mysqli_query($this->koneksi , $query1);
        $row_id = mysqli_fetch_array($ambil_id);
        $hasil_id = $row_id['id'];
        print_r($hasil_id);

        //validasi gambar + query input
        //cek dulu jika ada gambar produk jalankan coding ini
        if ($foto != "") {
            $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
            $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];
            $angka_acak     = rand(1, 999);
            $nama_gambar_baru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan nama file sebenarnya
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, 'img/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
                // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                $query = "INSERT INTO toko VALUES ('' , '$namatoko' , '$alamattoko' , '$nama_gambar_baru' , '$hasil_id')";
                $result = mysqli_query($this->koneksi, $query);
                // periska query apakah ada error
                if (!$result) {
                    die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) .
                        " - " . mysqli_error($this->koneksi));
                } else {
                    //tampil alert dan akan redirect ke halaman tambah_toko.php
                    //silahkan ganti tambah_toko.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='tambah_toko.php';</script>";
                }
            } else {
                //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_toko.php';</script>";
            }
        } else {
            $query = "INSERT INTO toko VALUES ('' , '$namatoko' , '$alamattoko' , 'default.jpg' , '$hasil_id')";
            $result = mysqli_query($this->koneksi, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) .
                    " - " . mysqli_error($this->koneksi));
            } else {
                //tampil alert dan akan redirect ke halaman tambah_toko.php
                //silahkan ganti tambah_toko.php sesuai halaman yang akan dituju
                echo "<script>alert('Data berhasil ditambah.');window.location='tambah_toko.php';</script>";
            }
        }

    }
    function tampil_toko($username)
    {
        $query1 = "SELECT * FROM user WHERE username = '$username' ";
        mysqli_query($this->koneksi, $query1);
        $ambil_id = mysqli_query($this->koneksi , $query1);
        $row_id = mysqli_fetch_array($ambil_id);
        $hasil_id = $row_id['id'];
        // print_r($hasil_id);


        $query = "SELECT a.* , b.nama FROM toko a INNER JOIN user b ON b.id = a.id_user WHERE a.id_user = '$hasil_id' ";
        $data_toko = mysqli_query($this->koneksi, $query);
        while ($row_toko = mysqli_fetch_array($data_toko)) {
            $hasil_toko[] = $row_toko;
        }
        return $hasil_toko;
    }
    function hapus_toko($id)
    {
        $query = "DELETE FROM toko WHERE id = '$id' ";
        mysqli_query($this->koneksi, $query);
        print_r($query);
    }


    function tambah_barang($namabarang , $id_toko , $id_jenis_barang , $deskripsi , $jumlah , $harga , $foto)
    {
        if ($foto != "") {
            $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
            $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];
            $angka_acak     = rand(1, 999);
            $nama_gambar_baru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan nama file sebenarnya
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, 'img/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
                // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                $query = "INSERT INTO barang VALUES ('' , '$namabarang' , '$nama_gambar_baru' , '$id_toko' , '$id_jenis_barang' , '$deskripsi' , '$jumlah' , '$harga')";
                $result = mysqli_query($this->koneksi, $query);
                // periska query apakah ada error
                if (!$result) {
                    die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) .
                        " - " . mysqli_error($this->koneksi));
                } else {
                    //tampil alert dan akan redirect ke halaman tambah_barang.php
                    //silahkan ganti tambah_barang.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='tambah_barang.php';</script>";
                }
            } else {
                //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='sign-up.php';</script>";
            }
        } else {
            $query = "INSERT INTO barang VALUES ('' , '$namabarang' , 'default.jpg' , '$id_toko' , '$id_jenis_barang' , '$deskripsi' , '$jumlah' , '$harga')";
            $result = mysqli_query($this->koneksi, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($this->koneksi) .
                    " - " . mysqli_error($this->koneksi));
            } else {
                //tampil alert dan akan redirect ke halaman tambah_barang.php
                //silahkan ganti tambah_barang.php sesuai halaman yang akan dituju
                echo "<script>alert('Data berhasil ditambah.');window.location='tambah_barang.php';</script>";
            }
        }
    }
    // function tampil_data()
    // {
    //     $query = "SELECT a.* , b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin";
    //     $data = mysqli_query($this->koneksi, $query);
    //     while ($row = mysqli_fetch_array($data)) {
    //         $hasil[] = $row;
    //     }
    //     return $hasil;
    // }
    // function tampil_data_jenis_kelamin()
    // {
    //     $query = "SELECT * FROM jenis_kelamin";
    //     $data_jenis_kelamin = mysqli_query($this->koneksi, $query);
    //     while ($row_jenis_kelamin = mysqli_fetch_array($data_jenis_kelamin)) {
    //         $hasil_jenis_kelamin[] = $row_jenis_kelamin;
    //     }
    //     return $hasil_jenis_kelamin;
    // }
    // function tambah_data_peminjam($kode_peminjam, $nama_peminjam, $jenis_kelamin, $tanggal_lahir, $alamat, $pekerjaan)
    // {
    //     $query = "INSERT INTO data_peminjam VALUES ('' , '$kode_peminjam' , '$nama_peminjam' , '$jenis_kelamin' , '$tanggal_lahir' , '$alamat' , '$pekerjaan' , '0' , 'Null')";
    //     mysqli_query($this->koneksi, $query);

    //     $query2 = "SELECT id FROM data_peminjam ORDER BY id DESC LIMIT 1";
    //     $ambil_id = mysqli_query($this->koneksi , $query2);
    //     $row_id = mysqli_fetch_array($ambil_id);
    //     $hasil_id = $row_id['id'];

    //     $query3 = "INSERT INTO user VALUES ('' , '$kode_peminjam' , '$kode_peminjam' , '2' , '$hasil_id')";
    //     mysqli_query($this->koneksi , $query3);

    // }
    // function kode_peminjam($kode_peminjam)
    // {
    //     $query = "SELECT a.* , b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin WHERE a.kode_peminjam='$kode_peminjam' ";
    //     $data_peminjam = mysqli_query($this->koneksi, $query);

    //     while ($row_peminjam = mysqli_fetch_assoc($data_peminjam)) {
    //         $hasil_peminjam[] = $row_peminjam;
    //     }
    //     return $hasil_peminjam;
    // }
    // function edit_data_peminjam($kode_peminjam, $nama_peminjam, $jenis_kelamin, $tanggal_lahir, $alamat, $pekerjaan)
    // {
    //     $query = "UPDATE data_peminjam SET nama_peminjam = '$nama_peminjam' , jenis_kelamin = '$jenis_kelamin' , tanggal_lahir = '$tanggal_lahir' , alamat = '$alamat' , pekerjaan = '$pekerjaan' WHERE kode_peminjam = '$kode_peminjam' ";
    //     mysqli_query($this->koneksi, $query);
    // }
    // function hapus_data_peminjam($kode_peminjam)
    // {
    //     $query = "DELETE FROM data_peminjam WHERE kode_peminjam = '$kode_peminjam' ";
    //     mysqli_query($this->koneksi, $query);
    // }
    // // pembatas job 15 dan 16

    // function tambah_data_jenis_buku($kode_jenis_buku, $nama_jenis_buku)
    // {
    //     $query = "INSERT INTO data_jenis_buku VALUES ('' , '$kode_jenis_buku' , '$nama_jenis_buku')";
    //     mysqli_query($this->koneksi, $query);
    // }
    // function tampil_data_jenis_buku()
    // {
    //     $query = "SELECT * FROM data_jenis_buku";
    //     $data = mysqli_query($this->koneksi, $query);
    //     while ($row = mysqli_fetch_array($data)) {
    //         $hasil[] = $row;
    //     }
    //     return $hasil;
    // }
    // function tambah_data_penerbit($kode_penerbit, $nama_penerbit)
    // {
    //     $query = "INSERT INTO data_penerbit VALUES ('' , '$kode_penerbit' , '$nama_penerbit')";
    //     mysqli_query($this->koneksi, $query);
    // }
    // function tampil_data_penerbit()
    // {
    //     $query = "SELECT * FROM data_penerbit";
    //     $data = mysqli_query($this->koneksi, $query);
    //     while ($row = mysqli_fetch_array($data)) {
    //         $hasil[] = $row;
    //     }
    //     return $hasil;
    // }
    // function tambah_data_pengarang($kode_pengarang, $nama_pengarang)
    // {
    //     $query = "INSERT INTO data_pengarang VALUES ('' , '$kode_pengarang' , '$nama_pengarang')";
    //     mysqli_query($this->koneksi, $query);
    // }
    // function tampil_data_pengarang()
    // {
    //     $query = "SELECT * FROM data_pengarang";
    //     $data = mysqli_query($this->koneksi, $query);
    //     while ($row = mysqli_fetch_array($data)) {
    //         $hasil[] = $row;
    //     }
    //     return $hasil;
    // }
    // function tambah_data_buku($kode_buku , $judul_buku , $kode_pengarang , $kode_jenis_buku , $kode_penerbit , $isbn , $tahun , $deskripsi , $jumlah)
    // {
    //     $query = "INSERT INTO data_buku VALUES ('' , '$kode_buku' , '$judul_buku' , '$kode_pengarang' , '$kode_jenis_buku' , '$kode_penerbit' , '$isbn' , '$tahun' , '$deskripsi' , '$jumlah')";
    //     mysqli_query($this->koneksi, $query);
    // }
    // function tampil_data_buku()
    // {
    //     $query = "SELECT a.* , b.* , c.* , d.* FROM data_buku a
    //                 INNER JOIN data_pengarang b ON b.kode_pengarang = a.kode_pengarang
    //                 INNER JOIN data_jenis_buku c ON c.kode_jenis_buku = a.kode_jenis_buku
    //                 INNER JOIN data_penerbit d ON d.kode_penerbit = a.kode_penerbit
    //     ";
    //     $data = mysqli_query($this->koneksi, $query);
    //     while ($row = mysqli_fetch_array($data)) {
    //         $hasil[] = $row;
    //     }
    //     return $hasil;
    // }
    // function tampil_data_peminjam()
    // {
    //     $query = "SELECT * FROM data_peminjam";
    //     $data = mysqli_query($this->koneksi, $query);
    //     while ($row = mysqli_fetch_array($data)) {
    //         $hasil[] = $row;
    //     }
    //     return $hasil;
    // }
    // function tambah_peminjaman($kode_buku , $kode_peminjam)
    // {
    //     $tanggal_pinjam = date('Y-m-d');
    //     $tanggal_kembali = date('Y-m-d' , time() + (60 * 60 * 24 * 7));
    //     $query = "INSERT INTO peminjaman VALUES ('' , '$kode_buku' , '$kode_peminjam' , '$tanggal_pinjam' , '$tanggal_kembali' , '1')";
    //     mysqli_query($this->koneksi, $query);
    // }
    // function tampil_peminjaman()
    // {
    //     $query = "SELECT a.* , b.* , c.* FROM peminjaman a
    //                 INNER JOIN data_buku b ON b.kode_buku = a.kode_buku
    //                 INNER JOIN data_peminjam c ON c.kode_peminjam = a.kode_peminjam
    //     ";
    //     $data = mysqli_query($this->koneksi, $query);
    //     while ($row = mysqli_fetch_array($data)) {
    //         $hasil[] = $row;
    //     }
    //     return $hasil;
    // }
    // function login($username){
    //     $data = mysqli_query($this->koneksi,"SELECT * FROM user WHERE username = '$username'");
    //     $isnull = mysqli_num_rows($data);
    //     // echo $isnull;
    //     if ($isnull == 0){
    //         echo "<b>Data user tidak ada</b>";
    //         $hasil = [];
    //         // print_r($hasil);
    //         header('Location: login.php');
    //     } else{
    //         while($row=mysqli_fetch_array($data)){
    //             $hasil[] = $row;
    //             // print_r($hasil);
    //         }
    //     }
    //     return $hasil;
    // }
    // function tampil_peminjaman_peminjam($username)
    // {
    //     $query = "SELECT a.* , b.* , c.* FROM peminjaman a
    //                 INNER JOIN data_buku b ON b.kode_buku = a.kode_buku
    //                 INNER JOIN data_peminjam c ON c.kode_peminjam = a.kode_peminjam
    //                 WHERE a.kode_peminjam = '$username'
    //     ";
    //     $data = mysqli_query($this->koneksi , $query);

    //     while ($row = mysqli_fetch_array($data)) {
    //         $hasil[] = $row;
    //     }
    //     return $hasil;
    // }
}
