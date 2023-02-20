<?php
require 'koneksi.php';
$laporan = query("SELECT * FROM layanan")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="head">
        <div class="judul">
            <img class="logo" src="img/logo.png" alt="">
            <h1 class="nama">MARS <span class="gov">GOV</span></h1>
        </div>
        <div class="mybtn">
            <a href="index.php"><button class="btn">Logout</button></a>
        </div>
    </div>


    <div class="navbar">
    </div>
    <div class="admin">
        <h1>Selamat Datang, Admin</h1>
    </div>
    <div class="container">
        <table class="tabel" border="1" cellpadding="10" cellspacing="0">
            <tr class="baris">
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Laporan</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1 ?>
            <?php foreach ($laporan as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["alamat"] ?></td>
                    <td><?= $row["laporan"] ?></td>
                    <td>
                        <a href="update.php?id=<?= $row['id'] ?>"><button class="ubah" type="submit">Update</button></a>
                        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapusnya?')"><button class="hapus" type="submit">Delete</button></a>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
        </table>
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