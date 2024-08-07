<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>

<body>
    <?php
    if ($_SESSION['status'] == "login") {
        echo "<h1>Hai " . $_SESSION['username'] . "</h1>";
        echo "<a href='sessionLogout.php'>Logout</a>";
    }
    ?>
</body>

</html>