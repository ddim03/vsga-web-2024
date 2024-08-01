<?php
include 'koneksi2.php';
$sql = "CREATE DATABASE dbpro";
if (mysqli_query($conn, $sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
mysqli_close($conn);
