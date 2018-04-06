<?php
require_once "php-asm-08c.php";
$mysqli = ketnoi_database('localhost', 'root', '', 'ffse1702016');
$id=$_GET['user_id'];
$sql="DELETE FROM lms_users WHERE user_id=$id";
$rs=$mysqli->query($sql);
header("location:php-asm-08b.php");
?>