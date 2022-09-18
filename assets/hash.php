<?php
include "connect.php";
$hash = md5(microtime());
function location()
{
	header("Location: /get_hash.php");
}

$email = mysqli_real_escape_string($induction, $_REQUEST['email']);
function form_submitted($form_name = false)
{
	if (!isset($_POST['submit_hash'])) { // был ли вообще сабмит
		return false; //неа, завершаем
	}
	if ($form_name && $_POST['submit_hash'] != $form_name) { //если проверяется конкретная форма, была ли отправлена именно она?
		return false; //нет, завершаем
	}
	return true; //все, ок.

}



function output($email, $induction, $hash)
{
	if (form_submitted() == true) {

		if ($hash == true and $email == true) {

			$sql = "INSERT INTO pending_users (hash, email) VALUES ('$hash', '$email')";

			if (mysqli_query($induction, $sql)) {
				mysqli_close($induction);
				location();
				
			} else {
				echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($induction);
			}
		} else {
			location();
		}
	}
}

Output($email, $induction, $hash);
