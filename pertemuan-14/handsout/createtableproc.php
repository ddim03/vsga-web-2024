<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$sql = "CREATE TABLE participants (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql) === TRUE) {
    echo "Table participants created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
mysqli_close($conn);
