<?php 
require_once('php-asm-08a.php');
$mysqli= ketnoiDB('localhost','minhTQ','123456','lms_users');
$id=$_GET['id'];
$sql ="DELETE FROM lms_user WHERE user_id=$id";
$rs =$mysqli->query($sql);
	
header("location: php-asm-08.php");
 ?>