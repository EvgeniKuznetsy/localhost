<?php
session_start();
include "../connect.php";
$nickname = $_POST['nickname'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    $password=md5($password);
    mysqli_query($induction, "INSERT INTO `users` (`id`, `login`, `email`,  `nickname`,`password`) VALUES (NULL, '$login', '$email', '$nickname','$password')");
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header("Location:../../index.php");
} else {
    $_SESSION['message'] = "Пороли не совпадают";
    header('Location: ../../register.php');
}
