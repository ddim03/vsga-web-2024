<?php
require 'db_connect.php';
$stmt = $pdo->prepare("SELECT name, price FROM products");
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Produk</title>
</head>

<body>
    <table border="1" cellpadding="10">
        <tr>
            <th>NAMA</th>
            <th>HARGA</th>
        </tr>
        <tbody>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['price'] ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>

</html>