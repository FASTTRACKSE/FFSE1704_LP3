<!DOCTYPE html>
<html>
<head>
	<title>Creat User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<?php
			require_once('php-asm-08c.php');
			$ketnoi = ketnoi_database('localhost', 'root', '', 'webuser');
		if(isset($_POST['submit'])){
			$name = $_POST['Name'];
			$password = $_POST['Password'];
			$email = $_POST['Email'];
			$sql = "INSERT INTO user(user_name, password, mail) VALUES('$name','$password','$email')";
			echo "$sql";
			$result = $ketnoi->query($sql);
			$ketnoi->close();
		}
	?>
<form method="post">
	Name: <input type="text" name="Name"><br/>
	Password: <input type="password" name="Password"><br/>
	Email: <input type="text" name="Email"><br/>
	<input type="submit" name="submit" value="Gửi">
</form>
</body>
</html>