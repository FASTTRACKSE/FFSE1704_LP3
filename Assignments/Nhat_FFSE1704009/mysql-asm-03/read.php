<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php
		require_once('ket_noi_MySQL.php');
		$MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');
		$id = $_GET['id'];
		$SQL = "SELECT * FROM lms_users WHERE user_id=$id";
		$result = $MYSQLi->query($SQL);
		$item=$result->fetch_assoc();

		//echo $result -> num_rows;
		//echo "<pre>";
		//print_r($item);
		//echo "</pre>";

	?>
	<h1 style=" margin-left: 375px;"> View User Info</h1>
	<hr style="width: 50%; margin: auto;">
	<br>
	<table class="table table-striped" style="width: 50%; margin: auto;">
	
			<tr>
				<th>Name</th>
			</tr>

			<tr>
				<td><?= $item['user_name'] ?></td>
			</tr>

			<tr>
				<th>Address</th>
			</tr>

			<tr>
				<td><?= $item['user_fullname'] ?></td>
			</tr>

			<tr>
				<th>Salary</th>
			</tr>

			<tr>
				<td><?= $item['user_email'] ?></td>
			</tr>
	
	</table>



	


	<a href="http://localhost/FFSE1704_LP3/Assignments/Nhat_FFSE1704009/mysql-asm-03/index.php"><button type="button" class="btn btn-primary" style="margin-top: 20px; margin-left: 380px;">Back</button></a>
</body>
</html>