<?php
require 'db_connect.php';

if (isset($_POST['min_price'])) {
    $min_price = $_POST['min_price'];
    $stmt = $pdo->prepare("SELECT name, price FROM products WHERE price >= :min_price");
    $stmt->execute(['min_price' => $min_price]);
} else {
    $stmt = $pdo->prepare("SELECT name, price FROM products");
    $stmt->execute();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Produk</title>
</head>

<body>
    <form action="filter_products.php" method="post" style="margin-bottom: 10px;">
        <label for="min_price">Harga Minimum: </label> <br>
        <input type="number" name="min_price" value="<?= isset($min_price) ? $min_price : '' ?>">
        <button type="submit">Cari</button>
    </form>
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