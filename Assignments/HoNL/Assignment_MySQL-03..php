<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<body>
	<?php
		require_once('themketnoi..php');
		 $MYSQLi = connectDB('localhost','honl','123456','anews');
		 $SQL = "SELECT * FROM lms_users";
		$result = $MYSQLi -> query($SQL);
	?>
<h1 style="margin-left: 380px;">User List</h1> <button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:385px; border: 1px; ">Add New User</button>
<table class="table table-striped" style="width: 50%; margin: auto;">
		
		
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Fullname</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		
	<?php
		while ($arUS = $result->fetch_assoc()) {
			
	?>
	
			<tr>
				<td><?= $arUS['user_id'] ?></td>
				<td><?= $arUS['user_name'] ?></td>
				<td><?= $arUS['user_fullname'] ?></td>
				<td><?= $arUS['user_email'] ?></td>
				<td>
					<a href="#"  style="padding-right: 10px;"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a href="#" style="padding-right: 10px;"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="#" ><span class="glyphicon glyphicon-trash"></span></a>
				
				</td>
			</tr>
		

	<?php		
		}
		$MYSQLi -> close();
	?>
	

	
		
	</table>	
</body>
</html>