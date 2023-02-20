<?php
require 'koneksi.php';

// ambil data dari URL
$id = $_GET['id'];

if (delete($id) > 0) {
    echo "
        <script>
        alert('Data Berhasil Dihapus!')
        document.location.href = 'admin.php'
        </script>
        ";
} else {
    echo "
        <script>
        alert('Data Gagal Dihapus!')
        document.location.href = 'admin.php'
        </script>
        ";
}
