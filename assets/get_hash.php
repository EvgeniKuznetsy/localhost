<?php
include "connect.php";
$query = "SELECT*FROM `pending_users`";
$result = mysqli_query($induction, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="hash.php">

        <input name="email" type="text" placeholder="Введите почту" class="type_email" />
        <input type="submit" value="Получить хеш" name="submit_hash" class="submit" />


    </form>
    <div class="token">
        <?php
        // $path = substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],"/"));
        // echo "<a href='//" . $_SERVER['HTTP_HOST'] . $path . "/get_file.php?hash=" . $result . "'>" . "</a>";

        while ($pending_users = mysqli_fetch_array($result)) {

            echo '<p>Запись hash =  ' . $pending_users['hash'] . '. Email:  ' . $pending_users['email'] . '</p>';
        }

        ?>
        <a href="../main.php">Вернуться назад</a>
    </div>


</body>

</html>