<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query);
$rowCount = mysqli_num_rows($result);

if ($rowCount == 1) {
    echo "Login Berhasil";
    echo "<a href='adminDashboard.php'>Admin</a>";
} else {
    echo "Login Gagal";
    echo "<a href='loginForm.php'>Login Form</a>";
}

mysqli_close($conn);
