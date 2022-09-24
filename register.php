<?php
session_start();
if ($_SESSION['user']) {
    header("Location: vendor/typeword.php");
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
    <form action="vendor/auth/signup.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" placeholder="Ввидите логин" name="login">
        <label>Никнейм</label>
        <input type="text" placeholder="Ввидите никнейм" name="nickname">
        <label>Почта</label>
        <input type="email" placeholder="Ввидите адресс вашей почты" name="email">
        <label>Пороль</label>
        <input type="password" placeholder="Ввидите пороль" name="password">
        <label>Подтверждение пороля</label>
        <input type="password" placeholder="Ввидите пороль" name="password_confirm">
        <button type="submit">Регестрация</button>
        <p><a href="index.php">Авторизаваться</a></p>
        
            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                
            }
            unset($_SESSION['message']);
            
            
            ?>
       
    </form>
</body>

</html>