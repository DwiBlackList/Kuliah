<?php
        $tanggal = $_GET['tanggal'];
        $bulan = $_GET['bulan'];
        $tahun = $_GET['tahun'];

        if (isset($tahun)) {
            if (($tanggal == 0) or ($bulan == 0) or ($tahun == 0)) {
                print("Tanggal , Bulan , dan Tahun harap dioso");
            }else {
                if (checkdate($bulan , $tanggal , $tahun)) {
                    print("Ok . Anda lahir pada $tanggal/$bulan/$tahun");
                }else {
                    print("$tanggal / $bulan / $tahun TIDAK VALID");
                }
            }
        }else {
            print("Skript ini perlu dipanggil dari 10_5_cek-tgl1.php");
        }
?>