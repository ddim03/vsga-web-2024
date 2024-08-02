<?php
require 'db_connect.php';

$id = 2;

$sql = "DELETE FROM products WHERE id = :id";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id' => $id
]);

echo "Product berhasil dihapus";
