<?php
session_start();
include "connect.php";
$email=$_SESSION['user']['email'];
$query = "SELECT*FROM `pending_users` WHERE `email`='$email'";
$result = mysqli_query($induction, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="hash.php">


        <input type="submit" value="Получить хеш" name="submit_hash" class="submit" />


    </form>
    <div class="token">
        <?php

        while ($pending_users = mysqli_fetch_array($result)) {

            echo '<p>Запись hash =  ' . $pending_users['hash'] . '. Email:  ' . $pending_users['email'] . '</p>';
        }

        ?>
        <a href="typeword.php">Вернуться назад</a>
    </div>


</body>

</html>