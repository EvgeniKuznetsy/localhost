<?php
session_start();
include "../connect.php";
$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($induction, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "nickname" => $user['nickname'],
        "email" => $user['email'],
        
    ];

    header('Location: ../typeword.php');
    
} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../../index.php');
}




?>
