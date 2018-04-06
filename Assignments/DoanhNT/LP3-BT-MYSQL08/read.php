<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<?php
			require_once('libaries.php');
			$mysqli = connectDB('localhost','mido','0933237480','ffse1704002');

			$id = $_GET['id'];
			$sql = "SELECT * FROM lms_users WHERE user_id=$id";
			$result = $mysqli->query($sql);
			$item=$result->fetch_assoc();

			//đống kết nối
			$mysqli -> close();
		?>

		<div style="width: 25%; margin: auto;">
			<div>
				<h1>View User Info</h1>
				<hr>
			</div>
			<div>
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Name</label>
						<p><?= $item['user_name'] ?></p>
					</div>
					<div class="form-group">
						<label>Address</label>
						<p><?= $item['user_fullname'] ?></p>
					</div>
					<div class="form-group">
						<label>Salary</label>
						<p><?= $item['user_email'] ?></p>
					</div>
					<a href="index.php">
						<button type="button" class="btn btn-primary">Cancel</button>
					</a>
				</form>
			</div>
		</div>
	</body>
</html>