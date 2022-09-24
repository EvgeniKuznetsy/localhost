<?php
session_start();
if ($_SESSION['user']) {
    header("Location: profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/auth.css">
    <title>Авторизация через хеш</title>
</head>

<body>
    <form action="vendor/check_hash.php" method="post">
        <label>Почта</label>
        <input type="text" placeholder="Ввидите почту"  name="email_check">
        <label>Хеш</label>
        <input type="password" placeholder="Ввидите хеш"  name="hash_check">
        <button type="submit" name="type_email">Авторизаваться</button>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);


        ?>

    </form>
</body>

</html>