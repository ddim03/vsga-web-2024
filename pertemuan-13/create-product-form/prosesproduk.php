<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$name = $_POST['name'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name, price) VALUES ('$name', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Data produk berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
