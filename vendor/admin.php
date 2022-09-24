<?php
session_start();
include "connect.php";
$query = "SELECT * FROM `users`";
$result = mysqli_query($induction, $query);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">login</th>
                <th scope="col">email</th>
                <th scope="col">nickname</th>
                <th scope="col">delet</th>
                <th scope="col">update</th>
                
            </tr>
            </form>
        </thead>
        <tbody>
            </form>
            <tr>
                <?php
                while ($users_sel = mysqli_fetch_array($result)) {
                    
                    echo '<tr>' . '<th scope="row">'   . $users_sel['id'] . '</th>' . '<th>' . $users_sel['login'] . '</th>' . '<th>' . $users_sel['email'] . '</th>' . '<th>' . $users_sel['nickname'] . '</th>'.'<th>' .'<form action="admin/deleat.php" method="POST"><input name="id"  hidden value="'. $users_sel['id']  .
                     '" type="text"><input class="btn  btn-outline-danger" type="submit" value="DELETE">'.'<form>' . '</th>'.'<th>' .'<form action="admin/up.php" method="POST"><input name="id_up"  hidden value="'. $users_sel['id']  . '" type="text"><input class="btn  btn-outline-danger" type="submit" value="UPDATE">'.'<form>' . '</th>'. '</tr>';
                }


                ?>
        </tbody>
    </table>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>