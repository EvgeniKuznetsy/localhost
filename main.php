<?php


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

<form method="POST" action="assets/check_hash.php">

<input name="email_check" type="text" placeholder="Введите почту" class="type_email" />
<input name="hash_check" type="text" placeholder="Введите хеш" class="type_email" />
<input type="submit" value="Регестрация" name="submit_check_hash" class="submit" />
<a href="assets/get_hash.php">
    Получение hash
</a>


</form>

</body>
</html>