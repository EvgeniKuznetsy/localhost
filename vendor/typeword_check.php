<?php
include "connect.php";
if ($induction == false) {
  echo die, "error to connect DataBase";
}

$word_translaing = mysqli_real_escape_string($induction, $_REQUEST['word_translaing']);
$word_translated = mysqli_real_escape_string($induction, $_REQUEST['word_translated']);

function form_submitted($form_name=false){
    if(!isset($_POST['submit'])){ // был ли вообще сабмит
      return false; //неа, завершаем
    }
    if($form_name && $_POST['submit']!=$form_name){ //если проверяется конкретная форма, была ли отправлена именно она?
      return false;//нет, завершаем
    }
    return true;//все, ок.
  }
  function location(){
     header("Location: typeword.php");
  }
  function output($word_translaing,$word_translated,$induction){
    if (form_submitted()==true) {
      if($word_translaing==true and $word_translated==true){
        $sql = "INSERT INTO dictionary_db (word_translaing, word_translated) VALUES ('$word_translaing', '$word_translated')";
        if (mysqli_query($induction, $sql)) {
            location();
            mysqli_close($induction);
        } else {
            echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($induction);
        }
        
      }else{
          location();
      
        
       
      }
       
    }
  }
  output($word_translaing,$word_translated,$induction);




?>
