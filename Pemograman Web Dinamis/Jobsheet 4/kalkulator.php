<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas : Kalkulator</title>

    <style>
        body{
            background: black;
            font-family: sans-serif;
        }

        .kalkulator{
            width: 335px;
            background: #2F495A;
            margin: 100px auto;
            padding: 10px 20px 50px 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 20px 0px white;
        }

        .bil{
            width: 300px;
            margin: 5px;
            border: none;
            font-size: 16pt;
            border-radius: 5px;
            padding: 10px;	
        }

        .opt{
            font-size: 16pt;
            border: none;
            width: 215px;
            margin: 5px;
            border-radius: 5px;
            padding: 10px;
        }

        .tombol{
            background: #EC5159;
            border-top: none;
            border-right: none;
            border-left: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #eee;
            font-size: 15pt;
            border-bottom:4px solid #BF3D3D;
        }

        .brand{
            color: #eee;
            font-size: 11pt;
            float: right;
            text-decoration: none;
            margin: 12px;
        }

        .judul{
            text-align: center;
            color: #eee;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <!-- Membuat Form -->
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="kalkulator.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+ (Penjumlahan)</option>
				<option value="kurang">- (Pengurangan)</option>
				<option value="kali">x (Perkalian)</option>
				<option value="bagi">/ (Pembagian)</option>
				<option value="sisa bagi">% (Modulus)</option>
				<option value="pangkat">** (Perpangkatan)</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
        <!-- Membuat Fungsi -->
        <?php
            if(isset($_POST['hitung'])){
                $bil1 = $_POST['bil1'];
                $bil2 = $_POST['bil2'];
                $operasi = $_POST['operasi'];
                switch ($operasi) {
                    case 'tambah':
                        $hasil = $bil1+$bil2;
                    break;
                    case 'kurang':
                        $hasil = $bil1-$bil2;
                    break;
                    case 'kali':
                        $hasil = $bil1*$bil2;
                    break;
                    case 'bagi':
                        $hasil = $bil1/$bil2;
                    break;
                    case 'sisa bagi':
                        $hasil = $bil1%$bil2;
                    break;
                    case 'pangkat':
                        $hasil = $bil1**$bil2;
                    break;			
                }
            }
        ?>
        <!-- Menampilkan Hasil -->
		<?php if(isset($_POST['hitung'])){ ?>
            <p class="bil" style="font-size:40px;color:white;"><?php echo $hasil; ?></p>
		<?php } ?>			
	</div>
</body>
</html>