<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php echo validation_errors();?>		
<h3><?= $this->session->msg ?></h3>
	<form action='' method="POST">
		<label>user_name</label>
		<input type="text" name="User" value="" >
		<label>password</label>
		<input type="password" name="pass" value="" placeholder="" >
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>