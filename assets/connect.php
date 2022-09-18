<?php
$host = "localhost";
$name = "root";
$pass = "";
$db = 'dictionary';
$induction = mysqli_connect($host, $name, $pass, $db);



if ($induction == false) {
    echo die, "error to connect DataBase";
}
?>