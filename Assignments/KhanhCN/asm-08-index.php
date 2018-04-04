<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

</head>
<body>

</body>
</html>
<?php
require_once "asm-08-function.php";
$mysqli = connectDB('localhost','hocsinh','123456','ffse1701011');

$sql = "SELECT lms_users.user_id , lms_users.user_name , lms_users.user_fullname, lms_users.user_email FROM lms_users";
$result = $mysqli->query($sql);
//chứa giá trị 

?>
<h2><strong>Users List</strong></h2>
<a href="asm-08-new.php"><button type="button" class="btn btn-success" style="margin-left: 483px; margin-bottom:40px; margin-top: -33px"> Add New User</button></a>
<table class="table table-bordered" style="max-width: 600px">
	
	<tr style="color: #0066cc; background: #C1CDC1 " >
		<th>#</th>
		<th>Name</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	
	<?php 
	while ($arDM = $result->fetch_assoc()){
		?>
		<tr>
			<td><?=$arDM['user_id']?></td>
			<td><?=$arDM['user_name']?></td>
			<td><?=$arDM['user_fullname']?></td>
			<td><?=$arDM['user_email']?></td>
			<td  style="color: #0066cc">
				<span><a href="http://localhost/lab2.1/asm-08-hienthi.php?id=<?=$arDM['user_id']?>" class="glyphicon glyphicon-eye-open"></a></span>
				<span><a href="http://localhost/lab2.1/asm-08-edit.php?id=<?=$arDM['user_id']?>" class="glyphicon glyphicon-pencil"></a></span>
				<span><a href="http://localhost/lab2.1/asm-08-delete.php?id=<?=$arDM['user_id']?>" class="glyphicon glyphicon-trash"></a></span>
			</td>
		<?php
	}
	$mysqli->close();
	?>
</table>