<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dboo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$sql = "INSERT INTO participants (name, email) VALUES ('dimas', 'dimas@gmail.com'), ('gilang', 'gilang@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
