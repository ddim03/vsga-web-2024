<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query);
$fetchResult = mysqli_fetch_assoc($result);
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
}

if ($fetchResult['role'] == 'admin') {
    echo "Anda berhasil login ";
    echo "<a href='adminDashboard.php'>Admin</a>";
} else if ($fetchResult['role'] == 'user') {
    echo "Anda berhasil login ";
    echo "<a href='userDashboard.php'>User</a>";
} else {
    echo "Anda gagal login ";
    echo "<a href='loginForm.php'>Login Form</a>";
}

mysqli_close($conn);
