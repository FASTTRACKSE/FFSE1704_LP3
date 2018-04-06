<?php
	session_start();
	unset($_SESSION['name']);
	header("location: php-asm-08-login.php");
?>