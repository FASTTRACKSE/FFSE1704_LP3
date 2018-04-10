<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<?php
			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
				$fullname = $_POST['fullname'];
				$email = $_POST['email'];
				$id = $_POST['id'];

				require_once('libaries.php');
				$mysqli = connectDB('localhost','mido','0933237480','ffse1704002');

				//thực thi các câu lệnh truy vấn tại đây
				$SQL = "UPDATE lms_users SET user_fullname='$fullname',user_email='$email', user_password='$password' WHERE user_id = $id";

				$result = $mysqli->query($sql);

				header('location: index.php');
				//đống kết nối
				$mysqli -> close();
			}
		?>

		<div style="width: 25%; margin: auto;">
			<div>
				<h1>Update User Info</h1>
				<hr>
				<p>
					Please edit the input values and submit to update the record.
				</p>
			</div>
			<div>
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="name" value="<?php echo $name ?>">
					</div>
					<div class="form-group">
						<label>Fullname</label>
						<input type="text" class="form-control" name="fullname">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name="email">
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<a href="index.php">
						<button type="button" class="btn btn-default">Cancel</button>
					</a>
				</form>
			</div>
		</div>
	</body>
</html>