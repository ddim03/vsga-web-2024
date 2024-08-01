<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO participants (name, email) VALUES ('dimas', 'dimas@gmail.com'), ('gilang', 'gilang@gmail.com')";

if (mysqli_query($conn, $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
