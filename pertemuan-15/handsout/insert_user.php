<?php

require 'db_connect.php';

$username = $_POST['username'];
$email = $_POST['email'];

$sql = "INSERT INTO users (username, email) VALUES (:username, :email)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);

$name = "Budi";
$email = "budi@email.com";

$stmt->execute();

echo "User berhasil ditambahkan";
