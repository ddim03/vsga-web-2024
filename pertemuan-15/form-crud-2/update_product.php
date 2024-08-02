<?php
require 'db_connect.php';

$id = 1;
$new_price = 17500.00;

$sql = "UPDATE products SET price = :price WHERE id = :id";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    'price' => $new_price,
    'id' => $id
]);

echo 'Product user berhasil diperbarui';
