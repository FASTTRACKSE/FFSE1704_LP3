<?php
$username= $_GET['username'];
session_start();
$image = $_SESSION[$username]['avatar'];//lay ten file
unlink($_SERVER['DOCUMENT_ROOT'].'/lab2.1/image/'.$image);//xoa file
unset($_SESSION[$_GET['username']]);//xoa phan tu session
header("location: danhsach.php");
