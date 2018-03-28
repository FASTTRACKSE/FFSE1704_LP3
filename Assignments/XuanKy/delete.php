<?php
$username= $_GET['username'];
session_start();
$image = $_SESSION[$username]['avatar'];//lay ten file
unlink($_SERVER['DOCUMENT_ROOT'].'/http://localhost/ffse1701_php1/images/'.$image);//xoa file
unset($_SESSION[$_GET['username']]);//xoa phan tu session
header("location: danhsach.php");
