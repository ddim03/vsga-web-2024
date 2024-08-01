<?php
$servername = "localhost";
$username = "root";
$password = "";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
