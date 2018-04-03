<?php
	require_once('php-asm-08c.php');
	$mysqli = ketnoi_database('localhost', 'root', '', 'ffse1702016');
	$id=$_GET['user_id'];
	$sql = "SELECT * FROM `lms_users` WHERE user_id=$id";
	$rs = $mysqli->query($sql);
	$item=$rs->fetch_assoc();
	$rs->num_rows;
	print_r($item);
?>