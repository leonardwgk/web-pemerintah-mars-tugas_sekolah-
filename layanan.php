<?php
require 'koneksi.php';
if (isset($_POST["submit"])) {
    // konfirm data berhasil dikirim / tidak
    if (create($_POST) > 0) {
        echo "<script>
        alert('Laporan Berhasil Dikirim!')
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert('Laporan Gagal Dikirim!')
        document.location.href = 'index.php'
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="layanan.css">
    <title>Layanan</title>
</head>

<body>
    <div class="head">
        <div class="judul">
            <img class="logo" src="img/logo.png" alt="">
            <h1 class="nama">MARS <span class="gov">GOV</span></h1>
        </div>
        <div class="mybtn">
            <a href="login.php"><button class="btn">Login</button></a>
        </div>
    </div>


    <div class="navbar">
        <a href="index.php">Beranda</a>
        <a href="index.php">Berita</a>
        <a href="layanan.php">Layanan</a>
        <a href="tentang.php">Tentang</a>
    </div>
    <div class="container">
        <form action="" method="post">
            <h1>Layanan</h1>
            <label for="nama">Nama Lengkap :</label><br>
            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap Anda" required><br>
            <label for="alamat">Alamat :</label><br>
            <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda" required><br>
            <label for="laporan">Keluhan / Kritik / Saran :</label><br>
            <input type="text" name="laporan" id="laporan" required><br>
            <input class="kirim" name="submit" type="submit" value="Kirim">
        </form>
    </div>
    <div class="footer">
        <div class="alamat p-0">
            <p>Kelompok Mars<br>
                Anggota :</p>
            <p>
                Leonard Wangka<br>
                Ahmad Ripai<br>
                Dzakwan Avie R.<br>
                Dafa Permana P.<br>
                Sahwa Aulia J.<br>
                Ubay Al-Rasyid
            </p>
        </div>
        <div class="credit p-0">
            <p>&COPY; Kelompok Mars | XI TJKT 1</p>
        </div>
    </div>
</body>

</html>