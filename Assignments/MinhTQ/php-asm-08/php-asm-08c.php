<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<?php 
	require_once('php-asm-08a.php');
	$mysqli = ketnoiDB('localhost','minhTQ','123456','lms_users');
	$id=$_GET['id'];
	$sql = "SELECT * FROM lms_user WHERE user_id=$id";
	$rs = $mysqli->query($sql);
	$item=$rs->fetch_assoc();
	$rs->num_rows;
	?>
	<style>
		.minh{
			margin: 52px 9px 20px 1px
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; color: red;">View User Info</h1>
	<table class="table table-bordered minh">
		<tr>
			<th>#</th>
			<th>name</th>
			<th>fullname</th>
			<th>mail</th>
			<th>password</th>
		</tr>
		<tr>
			<td><?= $item['user_id']?></td>
			<td><?=$item['user_name']?></td>
			<td><?=$item['user_fullname']?></td>
			<td><?=$item['user_mail']?></td>
			<td><?=$item['user_password']?></td>
		</tr>

	</table>
	<a href="php-asm-08.php" title="">
		<button type="button" class="btn btn-success" style="margin: 11px 2px 11px 1123px">trở lại</button>
	</a>
</body>
</html>



