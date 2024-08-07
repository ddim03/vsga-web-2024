<?php

$font_size = '15px';
$background_color = '#4e79a0';

if ($_POST) {
    $background_color = $_POST['background_color'];
    $font_size = $_POST['font_size'];
} else {
    if (isset($_COOKIE['background-color'])) {
        $_POST['background_color'] = $background_color = $_COOKIE['background-color'];
    }
    if (isset($_COOKIE['font-size'])) {
        $_POST['font_size'] = $font_size = $_COOKIE['font-size'];
    }
}

// Delete Cookies
$msg = false;

if (isset($_POST['hapus_cookie'])) {
    setcookie('background-color');
    setcookie('font-size');
    $msg = 'Data cookie berhasil dihapus';
}

// Set cookie 7 hari
if (isset($_POST['remember'])) {
    setcookie('background-color', $_POST['background_color'], strtotime('+7 days'));
    setcookie('font-size', $_POST['font_size'], strtotime('+7 days'));
    $msg = 'Data cookie berhasil disimpan';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Cookie Pada PHP</title>
</head>
<style>
    body {
        font-size: <?php echo $font_size; ?>;
        background-color: <?php echo $background_color; ?>;
    }

    h3 {
        margin-top: 0;
        margin-bottom: 10px;
    }

    div {
        margin-bottom: 5px;
    }

    select {
        padding: 5px 10px;
        font-size: <?php echo $font_size; ?>;
        border: 1px solid #ccc;
        color: #5d5d5d;
        text-align: right;
        width: 200px;
        margin-bottom: 10px;
    }

    form {
        margin: 0;
    }

    .container {
        width: 250px;
        margin: auto;
        margin-top: 15px;
        border: 0;
        padding: 20px 20px 15px;
        background-color: #fff;
    }

    .copyright {
        padding: 0;
        background: none;
        text-align: center;
        margin-top: 10px;
        color: #fff;
        font-size: smaller;
    }

    .button {
        border: 0;
        padding: 7px 20px;
        float: left;
        font-family: "open sans";
        font-size: <?php echo $font_size; ?>;
        color: #fff;
        margin-right: 5px;
        margin-bottom: 5px;
        cursor: pointer;
    }

    .blue {
        background-color: #3e97e2;
    }

    .copyright a {
        text-decoration: none;
        color: #e4e4e4;
        margin-top: 3px;
        display: inline-block;
    }

    .red {
        background-color: #e26b3e;
    }

    .clearfix::before,
    .clearfix::after {
        content: "";
        float: none;
        clear: both;
        display: block;
    }

    .remember {
        margin-bottom: 12px;
    }

    .success {
        background-color: #abffc1;
        padding: 5px 10px;
        color: #696969;
    }
</style>

<body>
    <div class="container">
        <form action="" method="post">
            <h3>SETTING</h3>
            <?php
            if ($msg) {
                echo '<div class="success">' . $msg . '</div>';
            }
            ?>
            <div>Background</div>
            <select name="background_color" id="background_color">
                <?php
                $colors = array(
                    '#4e79a0' => "Biru",
                    "#75b14a" => "Hijau",
                    "#d06353" => "Merah",
                );

                foreach ($colors as $name => $value) {
                    $selected = $name == @$_POST['background_color'] ? 'SELECTED=SELECTED' : '';
                    echo '<option value="' . $name . '" ' . $selected . '>' . $value . '</option>';
                }
                ?>
            </select>
            <div>Font Size</div>
            <select name="font_size" id="font_size">
                <?php
                $sizes = array(
                    '15px',
                    '17px',
                    '20px',
                    '25px',
                );

                foreach ($sizes as $value) {
                    $selected = $value == @$_POST['font_size'] ? 'SELECTED=SELECTED' : '';
                    echo '<option value="' . $value . '" ' . $selected . '>' . $value . '</option>';
                }
                ?>
            </select>
            <div class="remember">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember</label>
            </div>
    </div>
    <div class="clearfix">
        <input type="submit" class="button blue" name="submit" value="Simpan">
        <input type="submit" class="button red" name="hapus_cookie" value="Hapus Cookie">
    </div>
    </form>
    </div>
</body>

</html>