<?php
session_start();
include "connect.php";
$email_check = mysqli_real_escape_string($induction, $_REQUEST['email_check']);
$hash_check = mysqli_real_escape_string($induction, $_REQUEST['hash_check']);

function form_submitted($form_name = false)
{
  if (!isset($_POST['type_email'])) { // был ли вообще сабмит
    return false; //неа, завершаем
  }
  if ($form_name && $_POST['type_email'] != $form_name) { //если проверяется конкретная форма, была ли отправлена именно она?
    return false; //нет, завершаем
  }
  return true; //все, ок.
}


function output($email_check, $hash_check, $induction)
{
  if (form_submitted() == true) {
    if ($email_check == true and $hash_check == true) {
      $sql = "SELECT*FROM pending_users";

      $result = mysqli_query($induction, $sql);
      function check(){
        $check_error=true;
      }
      while ($pending_users = mysqli_fetch_array($result)) {
        if ($email_check == $pending_users['email'] and $hash_check == $pending_users['hash']) {
          $id = $pending_users['id'];
          $sql_delete = "DELETE FROM `pending_users` WHERE `id`='$id'";

          $result = mysqli_query($induction, $sql_delete);

          header("Location: typeword.php?hash=" . $pending_users['hash']);
          
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
  }

output($email_check, $hash_check, $induction);
