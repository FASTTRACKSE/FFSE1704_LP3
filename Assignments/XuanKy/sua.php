<!DOCTYPE html>
<html>
<head>
	<title>Xuân Kỳ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body style="margin: auto;width: 500px">
	<?php
	require_once "sv.php";
	$ahihi= connectDB('localhost','xuanky','12345','ffse1704');
	if (isset($_POST['username'])) {
		$username=$_POST['username'];
		$fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$password=$_POST['matkhau'];
		$id=$_GET['id'];
		$sql="UPDATE lms_users SET user_name = '$username',user_fullname = '$fullname',user_email = '$email',user_password = '$password' WHERE user_id=$id";
		$result=$ahihi->query($sql);
		$ahihi->close();
	}
	?>
	<div><p style="font-size: 30px;margin-left: 165px;margin-top: 10px;color: red;font-family: fantasy;" class="typography-headline">Update Users Info</p></div>
	<form method="post" style="max-width: 500px">
		Tên tài khoản <input type="text" name="username" class="form-control">
		Họ và tên <input type="text" name="fullname" class="form-control">
		Email <input type="text" name="email" class="form-control">
		Mật khẩu <input type="password" name="matkhau" class="form-control">	
		<div>
			<input class="btn btn-success" type="submit" name="submit" value="Sửa" style="    margin-top: 15px;">
			<a href="index.php">
				<button type="button" class="btn btn-info" style="margin-left: 377px;margin-top: 15px;">Trở lại</button>
			</a>
		</div>
	</form>
</body>
</html>
