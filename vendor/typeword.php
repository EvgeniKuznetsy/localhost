<?php
include "connect.php";
$query = "SELECT word_translaing FROM `dictionary_db` ORDER BY id DESC";
$query2 = "SELECT word_translated FROM `dictionary_db` ORDER BY id DESC";
$result = mysqli_query($induction, $query);
$result2 = mysqli_query($induction, $query2);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your memory</title>
    <link rel="stylesheet" href="../style/style.css">

</head>

<body>
    <div class="hero">

        <div class="form">
            <form method="POST" action="typeword_check.php">
                <input name="word_translaing" type="text" placeholder="Введите слово" class="type_one" />
                <input name="word_translated" type="text" placeholder="Введите его перевод" class="type_two" />
                <input type="submit" value="Отправить" name="submit" class="submit" />


            </form>
        </div>
        <div class="main">
            <div class="column">
                <div class="left_column">
                    <?php
                    while ($dictionary_db = mysqli_fetch_array($result)) {
                        echo '<h1>' . $dictionary_db['word_translaing'] . '</h1>';
                    }   ?>
                </div>
                <div class="right_column">
                    <?php
                    while ($dictionary_db = mysqli_fetch_array($result2)) {
                        echo '<h1>' . $dictionary_db['word_translated'] . '</h1>';
                    }

                    ?>
                </div>
            </div>
        </div>






    </div>





</body>

</html>