<?php
$username= $_GET['username'];
session_start();
$image = $_SESSION[$username]['avatar'];//lấy tên file
unlink($_SERVER['DOCUMENT_ROOT'].'/Nhat_FFSE1704009/images/'.$image);//xóa file
unset($_SESSION[$_GET['username']]);//xóa session
header("location: php-asm-04b.php");
?>
