<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php
		 require_once('bai90.php');
		 $MYSQLi = connectDB('localhost','giavy1995','123456789','sinhvienffse1704');
		 $SQL = "SELECT * FROM masinhvienffse1704";
		$result = $MYSQLi -> query($SQL);
	?>
	<table class="table">
			<tr>
				<h1>user list</h1>
			</tr>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>fullname</th>
				<th>email</th>
				<td><a href="http://localhost/ffse1704_lp3/Assignments/VyNg/vyng_asm_08/user.php"><button type="button" class="btn btn-success">Add new user</button></a></td>
			</tr>
		
	<?php
		while ($arUser = $result->fetch_assoc()) {
	?>
	
			<tr>
				<td><?= $arUser['user_id'] ?></td>
				<td><?= $arUser['user_name'] ?></td>
				<td><?= $arUser['user_fullname'] ?></td>
				<td><?= $arUser['user_email'] ?></td>
				<td>
					<a href="http://localhost/ffse1704_lp3/Assignments/VyNg/vyng_asm_08/iddangnhap.php?id=<?= $arUser['user_id'] ?>">
						<span class="glyphicon glyphicon-eye-open" style="padding: 10px"></span>
					</a>
					<a href="http://localhost/ffse1704_lp3/Assignments/VyNg/vyng_asm_08/sua.php?id=<?= $arUser['user_id'] ?>">
						<span class="glyphicon glyphicon-pencil" style="padding: 10px"></span>
					</a>
					<a href="http://localhost/ffse1704_lp3/Assignments/VyNg/vyng_asm_08/xoa.php?id=<?=$arUser['user_id']?>">
						<span class="glyphicon glyphicon-trash" style="padding: 10px"></span>
					</a>
				</td>
			</tr>
		

	<?php		
		}
		$MYSQLi -> close();
	?>
	

	
		
	</table>
</body>
</html>