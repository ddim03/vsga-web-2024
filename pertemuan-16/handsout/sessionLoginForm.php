<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="loginMultiRoleSession.php" method="post">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <td><label for="username">Password</label></td>
                <td>:</td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>