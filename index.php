<?php
include "assets/connect.php";
$query="SELECT word_translaing FROM `dictionary_db` ORDER BY id DESC";
$query2="SELECT word_translated FROM `dictionary_db` ORDER BY id DESC";
$result = mysqli_query($induction,$query);
$result2=mysqli_query($induction,$query2);


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
            <form method="POST" action="assets\typeword.php">
                <input name="word_translaing" type="text" placeholder="Введите слово"  class="type_one"/ >
                <input name="word_translated" type="text" placeholder="Введите его перевод"   class="type_two" />
                <input type="submit" value="Отправить" name="submit" class="submit" />


            </form>
        </div>
        <div class="main">
        <?php
        //  echo "<span class='class'>" ."авпавпю". $text . "</span>";
        
        while ($dictionary_db = mysqli_fetch_assoc($result)) {
        ?>
               

               <div class="column">  <div class="word_translaing"> <h2><?php echo $dictionary_db['word_translaing']; ?></h2></div>
                   

            
        <?php

        }
        while ($dictionary_db = mysqli_fetch_assoc($result2)) {
            ?>
                    
    
                    
                       <div class="word_translated"> <h2><?php echo $dictionary_db['word_translated']; ?></h2></div></div>
                       
    
                
            <?php
    
            }
           
        ?>
        </div>
           

    </div>





</body>

</html>