<!DOCTYPE html>
<html>
<head>
	<title>Xuân Kỳ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body style="margin: auto;width: 500px">

</body>
</html>
<?php
require_once "sv.php";
$ahihi= connectDB('localhost','xuanky','12345','ffse1704');
	if (isset($_POST['username'])) {
		$username=$_POST['username'];
		$fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$password=$_POST['matkhau'];
		$sql="INSERT INTO lms_users (user_name,user_fullname,user_email,user_password) VALUES ('$username','$fullname','$email','$password')";
		$result=$ahihi->query($sql);
		$ahihi->close();
	}
?>
<div><p style="font-size: 30px;margin-left: 180px;color: red;font-family: fantasy;margin-top: 10px" class="typography-headline">Create New Users</p></div>
<form method="post" style="max-width: 500px">
	Tên tài khoản <input type="text" name="username" class="form-control">
	Họ và tên <input type="text" name="fullname" class="form-control">
	Email <input type="text" name="email" class="form-control">
	Mật khẩu <input type="password" name="matkhau" class="form-control">	
	<div><input  class="btn btn-success" type="submit" name="submit" value="Thêm" style="    margin-top: 15px;" onclick="alert('Đã thêm tài khoản')">
	<a href="index.php"><button type="button" class="btn btn-info" style="margin-left: 368px;margin-top: 15px;">Trở lại</button></a></div>
</form>
