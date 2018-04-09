<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
	.container{
		width: 350px;
	}
	body{
		background: url(http://www.sivashaktitourism.com/wp-content/uploads/2016/08/bg.jpg);
		padding-top: 105px;
	}
</style>
</head>
<body>
<div class="container">
	<h1>Login</h1>
	<form method="post">
		<div class="form-group">
			Accout:<br> 
			<input type="text" name="Accout" class="form-control" placeholder="Xin vui lòng nhập accout!">
		</div>
		<div class="form-group">
			Password:<br> 
			<input type="password" name="Password" class="form-control" placeholder="Xin vui lòng nhập password!">
		</div>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="dropdownCheck">
			<label class="form-check-label" for="dropdownCheck">Remember me</label>
		</div>
		<button class="btn btn-default" name="submit">Đăng nhập</button>
	</form>
</div>
<?php
	session_start();
	require_once('php-asm-08c.php');
	$mysqli = ketnoi_database('localhost', 'root', '', 'ffse1702016');
	if (isset($_POST['submit'])) {
		$accout = $_POST['Accout'];
		$password = $_POST['Password'];
		$sql = "SELECT user_name, user_password FROM lms_users";
		$result = $mysqli->query($sql);
		$item = $result->fetch_assoc();
		$mysqli->close();
		if ($accout != $item['user_name']) {
			echo "Tên đăng nhập không hợp lệ!";
			exit;
		}
		if ($password != $item['user_password']) {
			echo "Mật khẩu không đúng!";
			exit;
		} 
		else {
			$_SESSION['name']=$accout;			
			header("location:php-asm-08b.php");
		}
	}
?>
</body>
</html>