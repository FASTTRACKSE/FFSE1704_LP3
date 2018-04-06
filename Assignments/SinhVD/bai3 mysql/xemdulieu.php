<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php
		require_once('uplot.php');
		 $MYSQLi = sinhvd('localhost','vanducsinh','123456','ffse1704');
		$id=$_GET['id'];
		$SQL = "SELECT * FROM lms_users WHERE user_id='$id'";
		$result = $MYSQLi->query($SQL);
		$sr=$result->fetch_assoc();
	
	echo $id; 	
	?>
	<h1 style=" margin-left: 375px;"> View User Info</h1>
	<hr style="width: 50%; margin: auto;">
	<br>
	<table class="table table-striped" style="width: 50%; margin: auto;">
			<tr>
				<th>Name</th>
			</tr>
			<tr>
				<td><?= $sr['user_name'] ?></td>
			</tr>
			<tr>
				<th>fullname</th>
			</tr>
			<tr>
				<td><?= $sr['user_fullname'] ?></td>
			</tr>
			<tr>
				<th>email</th>
			</tr>
			<tr>
				<td><?= $sr['user_email'] ?></td>
			</tr>
	
	</table>
	<a href="vd10.php"> 
<button type="button" class="btn btn-primary">trở lại</button>
</a>
	</body>
</html>