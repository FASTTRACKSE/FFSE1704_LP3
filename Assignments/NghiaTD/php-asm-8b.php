<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php 
require_once('php-asm-8a.php');
$mysqli=connectDB('localhost','nghia123','123456','hoc_sinh');
$sql="SELECT * FROM lms_users";

	$result=$mysqli->query($sql);
?>
<h1>User List</h1> <button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:125px;  ">Add New User</button>
<table class="table table-striped">
 	<tr>
 		<th>#</th>
 		<th>Name</th>
 		<th>Full Name</th>
 		<th>Email</th>
 		<th>Action</th>
 	</tr>

 	<?php
	while ($arus=$result->fetch_assoc()) {
	?> 

		 <tr>
 	 	<td><?=$arus['user_id'] ?></td>
 	 	<td><?=$arus['user_name'] ?></td>
 	 	<td><?=$arus['user_fullname'] ?></td>
 	 	<td><?=$arus['user_email'] ?></td>
 	 	
	   <td>
					<a href="#"  style="padding-right: 10px;"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a href="#" style="padding-right: 10px;"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="#" ><span class="glyphicon glyphicon-trash"></span></a>
				
				</td>
	 </tr>

 	
 	 <?php 
 	}
 	$mysqli->close();
 	  ?>
 </table>

</body>
</html>

