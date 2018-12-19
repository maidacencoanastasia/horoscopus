<?php
	$email = $_POST["email"];
	if(mail("x45716@bk.ru", "subject", $email)){
		header("Location: http://landing.page/");
	}
?>