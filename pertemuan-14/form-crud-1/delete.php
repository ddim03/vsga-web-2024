<?php
require 'core/Mahasiswa.php';
session_start();

$mahasiswa = new Mahasiswa();
$nim = $_GET['nim'];

if ($mahasiswa->delete($nim)) {
    $_SESSION['success'] = 'Data mahasiswa berhasil di hapus';
    header('Location: index.php');
} else {
    echo "
    <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
    </script>
";
    header('Location: index.php');
}
