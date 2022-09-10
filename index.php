<?php
include "assets/connect.php";
$result = mysqli_query($induction, "SELECT * FROM `dictionary_db`");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your memory</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="hero">
        <div class="form">
            <form method="POST" action="assets\connect.php">
                <input name="word_translaing" type="text" placeholder="Введите слово" />
                <input name="word_translated" type="text" placeholder="Введите его перевод" />
                <input type="submit" value="Отправить" name="submit" />


            </form>
        </div>
        <div class="main_table">
        <?php

        while ($dictionary_db = mysqli_fetch_assoc($result)) {
        ?>
       
        <div class="table">
                <div class="word_translaing">
                    <h2><?php echo $dictionary_db['word_translaing']; ?></h2>
                </div>
                <!-- <div class="enter"></div> -->
                <div class="word_translated">
                    <h2><?php echo $dictionary_db['word_translated']; ?></h2>
                </div>
            </div>
            </div>
        <?php

        }
        ?>
       
           

    </div>





</body>

</html>