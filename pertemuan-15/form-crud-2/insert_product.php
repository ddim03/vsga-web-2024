<?php

require_once 'db_connect.php';

$name = 'Handphone';
$price = 16000.00;


$sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => $name, 'price' => $price]);
echo "Data berhasil ditambahkan";
