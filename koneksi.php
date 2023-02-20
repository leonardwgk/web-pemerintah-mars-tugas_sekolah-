<?php
$koneksi = mysqli_connect("localhost", "root", "", "webpemerintah");

function query($query)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}

function create($data)
{
    global $koneksi;
    // ambil semua data dari form
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $laporan = htmlspecialchars($data["laporan"]);

    // query ke database
    $query = ("INSERT INTO layanan
    VALUES ('', '$nama', '$alamat', '$laporan')
    ");

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function update($data)
{
    global $koneksi;
    // ambil semua data dari form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $laporan = htmlspecialchars($data["laporan"]);

    // query ke database
    $query = ("UPDATE layanan SET
        nama = '$nama',
        alamat = '$alamat',
        laporan = '$laporan'
    WHERE id = $id
    ");

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function delete($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM layanan WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
