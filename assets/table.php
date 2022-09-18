<?php
include "connect.php";
$query = "SELECT * FROM `dictionary_db` ORDER BY id DESC";
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
    <?php
    while ($dictionary_db = mysqli_fetch_assoc($result)) {
        echo '<p>Слово на англ. :  ' . $dictionary_db['word_translaing'] . '. Слово на русском :  ' . $dictionary_db['word_translated'] . '</p>';
    }
    ?>
</body>

</html>