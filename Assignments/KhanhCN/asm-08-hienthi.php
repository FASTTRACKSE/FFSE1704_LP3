<!DOCTYPE html>
<html>
<head>
	<title>Hiển thị</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

</head>
<body>

</body>
</html>
<?php
require_once 'asm-08-function.php';
$mysqli = connectDB('localhost','hocsinh','123456','ffse1701011');
$id = $_GET['id'];
$sql = "SELECT * FROM lms_users WHERE user_id = $id ";
$raa = $mysqli->query($sql);
$item = $raa->fetch_assoc();
$raa->num_rows;

?>
<table class="table table-bordered" style="max-width: 600px">
	
	<tr style="color: #0066cc; background: #C1CDC1 " >
		<th>#</th>
		<th>Name</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Pasword</th>
	</tr>
	
	<tr>
		<td><?=$item['user_id']?></td>
		<td><?=$item['user_name']?></td>
		<td><?=$item['user_fullname']?></td>
		<td><?=$item['user_email']?></td>
		<td><?=$item['user_password']?></td>
	</table>
	<a href="asm-08-index.php"><input type="submit" class="btn btn-primary" name="Submit" value="Cancel"></a>