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
function connectDB($server,$username,$password,$database_name){
	$dulieu= new mysqli($server,$username,$password,$database_name);
	$dulieu->set_charset('utf8');
	if($dulieu-> connect_errno){
		echo "kết nối bị lỗi:".$mysqli->connect_error();
	}
	return $dulieu;

}
$mysqli=connectDB('localhost','nghia123','123456','hoc_sinh');
$sql="SELECT * FROM lms_users";

	$result=$mysqli->query($sql);
?>
<h1>User List</h1>
<a href="<?= base_url() ?>index.php/admin/user/create "><button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:125px;  ">Add New User</button></a> 
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
					<a href="<?= base_url() ?>index.php/admin/user/read?id=<?=$arus['user_id'] ?>"  style="padding-right: 10px;"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a href="<?= base_url() ?>index.php/admin/user/update?id=<?=$arus['user_id'] ?>" style="padding-right: 10px;"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="<?= base_url() ?>index.php/admin/user/delete?id=<?=$arus['user_id'] ?>" ><span class="glyphicon glyphicon-trash"></span></a>
				
				</td>
	 </tr>

 	
 	 <?php 
 	}
 	$mysqli->close();
 	  ?>
 </table>

</body>
</html>

