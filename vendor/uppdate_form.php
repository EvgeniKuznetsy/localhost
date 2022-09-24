<?php
include "connect.php";
$id_upp = $_POST['id'];
$query = "SELECT * FROM `users`WHERE `id`='id_upp'";
$result = mysqli_query($induction, $query);
while ($get_last_name = mysqli_fetch_array($result)) {
    if ($id_upp == $get_last_name['id']) {
        $nickname = $get_last_name['nickname'];
        $login = $get_last_name['login'];
        $email = $get_last_name['email'];
        $password = $get_last_name['password'];
        $password_confirm = $get_last_name['password_confirm'];
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/auth.css">
    <title>Document</title>
</head>

<body>
    <form action="vendor/auth/signup.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" placeholder="Ввидите логин" name="login" value="$login">
        <label>Никнейм</label>
        <input type="text" placeholder="Ввидите никнейм" name="nickname" value="$nickname">
        <label>Почта</label>
        <input type="email" placeholder="Ввидите адресс вашей почты" name="email" value="$email">
        <label>Пороль</label>
        <input type="password" placeholder="Ввидите пороль" name="password" value="$password">
        <button type="submit">Регестрация</button>


    </form>
</body>

</html>