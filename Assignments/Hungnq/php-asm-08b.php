<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		.user{
			width: 200px;
			text-align: center;
		}
		.row2{
			padding-left: 500px;
		}
		body{
			padding-top: 70px;
			margin-left: 300px;
		}
	</style>
</head>
<body>
<div class="input-group mb-3">
	<div>
    	<h3>User List<h3/>
  	</div>
	<div class="input-group-prepend row2">
    	<button class="btn btn-outline-secondary" type="button">Add new user</button>
  	</div>
</div>
<?php
	require_once('php-asm-08c.php');
	$ketnoi = ketnoi_database('localhost', 'root', '', 'ffse1702016');
	// tạo câu lệnh sql và thực thi
	$sql = "SELECT * FROM lms_users";
	$result = $ketnoi->query($sql);
?>
<table  class="table table-striped user border border-secondary">
	<tr>
		<td>STT</td>
		<td>Name</td>
		<td>Fullname</td>
		<td>Email</td>
		<td>Password</td>
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
			<span class="glyphicon glyphicon-eye-open"></span>
			<span class="glyphicon glyphicon-pencil"></span>
			<span class="glyphicon glyphicon-trash"></span>
		</td>
	</tr>
<?php
	}
	$ketnoi->close();
?>	
</table>
</body>
</html>