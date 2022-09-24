<?php 

include "../connect.php";
$id=$_POST['id'];


echo $id."  ";

$sql = "DELETE FROM `users` WHERE id='$id'";
function form_submitted($form_name = false)
{
  if (!isset($_POST['id'])) { // был ли вообще сабмит
    return false; //неа, завершаем
  }
  if ($form_name && $_POST['id'] != $form_name) { //если проверяется конкретная форма, была ли отправлена именно она?
    return false; //нет, завершаем
  }
  return true; //все, ок.
}




function output($id, $induction)
{
  if (form_submitted() == true) {
    if ($id) {
      $sql = "SELECT*FROM users";

      $result = mysqli_query($induction, $sql);

      while ($id_delete = mysqli_fetch_array($result)) {
        if ($id=$id_delete['id']) {
          $sql_delete = "DELETE FROM `users` WHERE `id`='$id'";

          $result = mysqli_query($induction, $sql_delete);

          
          
        } 
        }
        echo "Не верный хеш или почта";
      }
      if (mysqli_query($induction, $sql)) {
        mysqli_close($induction);
      } else {
        echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($induction);
      }
    } else {
      echo "Заполните поля";
    }
  }header("Location: ../admin.php");

output($id,$induction);

mysqli_close($induction);

?>