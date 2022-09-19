<?php
session_start();
if (!$_SESSION['user']) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/auth.css">
    <title>Авторизация</title>
</head>

<body>
    <form action="vendor/auth/signin.php" method="post">
        <h2><?=$_SESSION['user']['nickname'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/get_hash.php">Получить хеш</a>
        <a href="vendor/auth/logout.php" class="logout">Выход</a>

    </form>
</body>

</html>