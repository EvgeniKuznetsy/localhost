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
    <title>Авторизация</title>
</head>

<body>
    <form action="vendor/auth/signin.php" method="post">
        <label>Логин</label>
        <input type="text" placeholder="Ввидите логин"  name="login">
        <label>Пороль</label>
        <input type="password" placeholder="Ввидите пороль"  name="password">
        <button type="submit">Авторизаваться</button>
        <p><a href="register.php" class="reg">Регестрация</a></p><a href="input_hesh.php" class="reg">Авторизаваться через хеш</a></p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);


        ?>
    </form>
</body>

</html>