<?php 

include "../connect.php";
$id=$_POST['id'];



output($id,$induction);

mysqli_close($induction);

?>