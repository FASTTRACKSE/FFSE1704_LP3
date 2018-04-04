<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	require_once('php-asm-08a.php');
	$mysqli = ketnoiDB('localhost','minhTQ','123456','lms_users');
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$mail = $_POST['mail'];
		$password = $_POST['password'];
		$sql = "INSERT INTO lms_user(user_name,user_fullname,user_mail,user_password) VALUES ('$username','$fullname','$mail' ,'$password')";
		
		$result = $mysqli->query($sql);
		$mysqli->close();	
	}
	?>
	<style>
	form{
		background-color: #eae3e3;
		width: 436px;
		margin-left: 456px;
	}
	h3{
		padding-left: 20px;
	}
	input{
		margin-left: 100px;
	}
	h2{
		padding: 16px 3px 0px 84px;
		background-color: #b3e0dc;
		height: 49px;
	}
</style>

</head>
<body>
	<form  method="POST" enctype="mutipart/form-data" >
		<h2>Đăng ký thành viên</h2>
		<h3>username :</h3> <input type="text" name="username" value="" required>
		<br>

		<h3>fullname:</h3> <input type="text" name="fullname" value="" required>
		<br>

		<h3>email:</h3> <input type="text" name="mail" value="" required>
		<br>  

		<h3>passwork:</h3> <input type="password" name="password" value="" required>
		<br>

		<input type="submit" name="submit" value="gửi" style="margin: 28px 74px 15px 88px;width: 69px;" onclick="alert('bạn đã thêm thành công ')">
		<a href="php-asm-08.php">
		<button type="button">trở lại 
	</button> </a>
	</form>
</body>
</html>



