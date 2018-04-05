<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

</head>
<body>
<?php
require_once 'asm-08-function.php';
$mysqli = connectDB('localhost','hocsinh','123456','ffse1701011');
if (isset($_POST['taikhoan'])) {
	$taikhoan = $_POST['taikhoan'];
	$name  = $_POST['hoten'];
	$mk = $_POST['matkhau'];
	$mail = $_POST['email'];

	$sql = "INSERT INTO lms_users(user_name , user_fullname ,user_email, user_password) VALUES ( '$taikhoan', '$name','$mail', '$mk')";
	$result = $mysqli->query($sql);
	$mysqli->close();

	echo $sql;
}

?>
	<form method="POST" style=" border-collapse: collapse; border: 1px solid #0066cc; width:300px " >
	<h2><strong> New User</strong></h2>
	<p>Name</p>	
	<input type="input" name="taikhoan">
	<p>Fullname</p>
	<input type="input" name="hoten">
	<p>Email</p>
	<input type="input" name="email">
	<p>Password</p>
	<input type="password" name="matkhau"></br></br>
	<input type="submit" class="btn btn-primary" name="Submit" value="Submit">
	<a href="asm-08-index.php"><button type="button" class="btn btn-default" name="Cancel">Cancel</button></a>
</form>


</body>
</html>