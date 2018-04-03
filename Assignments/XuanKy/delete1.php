<?php
require_once "sv.php";
$ahihi= connectDB('localhost','xuanky','12345','ffse1704');
$id=$_GET['id'];
$sql="DELETE FROM lms_users WHERE user_id=$id";
$rv=$ahihi->query($sql);
header("location: index.php");
?>