<?php
    $host="localhost";
    $name="root";
    $pass="";
    $db='test1';
    $induction=mysqli_connect($host,$name,$pass,$db);
    if($induction==false){
        echo "error to connect DataBase";
    }
    ?>