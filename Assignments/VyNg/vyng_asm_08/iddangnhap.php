<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	require_once('bai90.php');
	$MYSQLi = connectDB('localhost','giavy1995','123456789','sinhvienffse1704');
	$SQL = "SELECT * FROM masinhvienffse1704";
	$id=$_GET['id'];
	$SQL = "SELECT * FROM `masinhvienffse1704` WHERE user_id=$id";
	$rs= $MYSQLi->query($SQL);
	$item=$rs->fetch_assoc();
	$rs->num_rows;
	print_r($item);
?>
</body>
</html>