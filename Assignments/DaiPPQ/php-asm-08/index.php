<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>
	<body>
		
		<div style="width: 50%;">
			<div>
				<h1>Users List</h1>
				<button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:0px; ">Add New User</button>
			</div>
			<div>
				<?php
					require_once('libaries.php');
					$mysqli = connectDB('localhost','mido','0933237480','ffse1704002');

					//thực thi các câu lệnh truy vấn tại đây
					$sql = "SELECT * FROM lms_users";
					$result = $mysqli->query($sql);
				?>
				<table class="table table-bordered table-striped">
					<tr>
						<th>Name</th>
						<th>Fullname</th>
						<th>Email</th>
						<th>Action</th>
					</tr>


				<?php
					while ($arUsers = $result->fetch_assoc()) {
				?>
					<tr>
						<td><?=$arUsers['user_name']?></td>
						<td><?=$arUsers['user_fullname']?></td>
						<td><?=$arUsers['user_email']?></td>
						<td>
		        			<a href="#">
								<span class="glyphicon glyphicon-eye-open" style="padding: 10px"></span>
							</a>

							<a href="#">
								<span class="glyphicon glyphicon-pencil" style="padding: 10px"></span>
							</a>

							<a href="#">
								<span class="glyphicon glyphicon-trash" style="padding: 10px"></span>
							</a>
						</td>
					</tr>
				<?php
					}
				?>
				</table>
				<?php
					//đống kết nối
					$mysqli -> close();
				?>
			</div>
		</div>
	</body>
</html>