<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="simpan_data.php" method="POST">
        <table align="center">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>E - Mail</td>
                <td>:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" value="L" name="jenis_kelamin" required>Laki - Laki
                    <input type="radio" value="P" name="jenis_kelamin" required>Perempuan
                </td>
            </tr>
            <tr>
                <td>Minat</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="minat1" value="programming">Programming
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" name="minat2" value="desain">Desain
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" name="minat3" value="networking">Networking
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" name="minat4" value="hacking">Hacking
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Kirim" style="width: 100%; height:100px;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>