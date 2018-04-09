<!DOCTYPE html>
<html>
<head>
	<title>Xuân Kỳ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body style="max-width: 800px;margin: auto;">

</body>
</html>
<?php
require_once "sv.php";
$ahihi= connectDB('localhost','xuanky','12345','ffse1704');
$id=$_GET['i'];
$sql="SELECT * FROM lms_users WHERE user_id=$id";
$rv=$ahihi->query($sql);
$item=$rv->fetch_assoc();
$rv->num_rows;
?>
<div><p style="font-size: 30px;margin-left: 290px;margin-top: 10px;color: red;font-family: fantasy;" class="typography-headline">View Users Info</p></div>
<table class="table table-bordered" style="max-width: 800px">
	<tr>
		<td><strong>#</strong></td>
		<td><strong>Name</strong></td>
		<td><strong>Fullname</strong></td>
		<td><strong>Email</strong></td>
		<td><strong>Password</strong></td>
	</tr>
	<tr>
		<td><?=$item['user_id'] ?></td>
		<td><?=$item['user_name'] ?></td>
		<td><?=$item['user_fullname'] ?></td>
		<td><?=$item['user_email'] ?></td>
		<td><?=$item['user_password'] ?></td>
	</tr>
</table>
<a href="index.php"><button type="button" class="btn btn-info" style="margin-left: 734px;margin-top: -5px;">Trở lại</button></a>