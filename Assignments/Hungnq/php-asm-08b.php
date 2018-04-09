<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
	.container{
		width: 800px;
	}
	</style>
</head>
<body>
<div class="container">
<div class="input-group mb-3">
	<div class="input-group-prepend" style="margin-top: 40px;">
		<h2 style="width: 160px;margin-bottom: -36px;">User List</h2>
    	<div style="margin-left: 600px;"><button class="btn btn-default"><a href="http://localhost/ffse1702016/php-asm-08-creat.php">Creat User</a></button>
    	<button class="btn btn-default"><a href="http://localhost/ffse1702016/php-asm-08-logout.php">Logout</a></button></div>
  	</div>
</div>
<?php
session_start();
if (isset($_SESSION['name'])) {
}
if (empty($_SESSION['name'])) {
	header("location: php-asm-08-login.php");
}
	require_once('php-asm-08c.php');
	$ketnoi = ketnoi_database('localhost', 'root', '', 'ffse1702016');
	// tạo câu lệnh sql và thực thi
	$sql = "SELECT * FROM lms_users";
	$result = $ketnoi->query($sql);
?>
<table  class="table table-striped border border-secondary">
	<tr>
		<td>#</td>
		<td>Name</td>
		<td>Fullname</td>
		<td>Email</td>
		<td>Passsword</td>
		<td>Action</td>
	</tr>
<?php
	while ($mang = $result->fetch_assoc()) {
?>
	<tr>
		<td><?=$mang['user_id'] ?></td>
		<td><?=$mang['user_name'] ?></td>
		<td><?=$mang['user_fullname'] ?></td>
		<td><?=$mang['user_email'] ?></td>
		<td><?=$mang['user_password'] ?></td>
		<td>
			<a href="http://localhost/ffse1702016/php-asm-08-view.php?user_id=<?=$mang['user_id'] ?>"><span class="glyphicon glyphicon-eye-open"></span></a><a href="http://localhost/ffse1702016/php-asm-08-update.php?user_id=<?=$mang['user_id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a><a href="http://localhost/ffse1702016/php-asm-08-delete.php?user_id=<?=$mang['user_id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
		</td>
	</tr>
<?php
	}
	$ketnoi->close();
?>
</table>
</div>
</body>
</html>