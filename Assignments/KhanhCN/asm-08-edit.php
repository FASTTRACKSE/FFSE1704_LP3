<?php
require_once 'asm-08-function.php';
$mysqli = connectDB('localhost','hocsinh','123456','ffse1701011');
if (isset($_POST['taikhoan'])) {
	$taikhoan = $_POST['taikhoan'];
	$name  = $_POST['hoten'];
	$mk = $_POST['matkhau'];
	$mail = $_POST['email'];
	$id = $_GET['id'];
	$sql = "UPDATE lms_users SET user_name ='$taikhoan' , user_fullname = '$name' , user_password = '$mk' , user_email='$mail' WHERE user_id = '$id'" ;
	$result = $mysqli->query($sql);

	header("location: asm-08-index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

</head>
<body>
	<form method="POST" style=" border-collapse: collapse; border: 1px solid #0066cc; width:300px " >
		<h2><strong>Create New User</strong></h2>
		<p>Name</p>	
		<input type="input" name="taikhoan">
		<p>Fullname</p>
		<input type="input" name="hoten">
		<p>Email</p>
		<input type="input" name="email">
		<p>Password</p>
		<input type="password" name="matkhau"></br></br>
		<input type="submit" class="btn btn-primary" name="Submit">
		<a href="asm-08-index.php"><input type="submit" class="btn btn-default" name="Cancel"></a>
	</form>
</body>
</html>
