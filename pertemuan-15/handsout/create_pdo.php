<?php

require_once 'db_connect.php';

$username = 'dwiaji';
$email = 'dwiaji@gmail.com';


$sql = "INSERT INTO users (username, email) VALUES (:username, :email)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username' => $username, 'email' => $email]);
echo "Data berhasil ditambahkan";
