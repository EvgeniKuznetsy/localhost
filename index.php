    <?php
    include "connect.php";
    $result = mysqli_query($induction, "SELECT * FROM `posts`");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <title>Document</title>
    </head>

    <body>
    <div class="body">
        <div class="main">
            <span class="name">Названия</span>
            <span class="price">Стоимость</span>
            <span class="description">Описание</span>
        </div>
        <div class="goods">
        <?php
        while ($goods = mysqli_fetch_assoc($result)) {
        ?>

            <div class="good">
                <h2><?php echo $goods['title']; ?></h2>
                <h2>
                    <?php echo $goods['image']; ?>
                </h2>
                <h2><?php echo $goods['description']; ?></h2>
                <h2>

            </div>

        <?php

        }



        ?></div>
</div>

    </body>

    </html>