<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<form action="check_user" method="POST" enctype="multipart/form-data">
			<div style="width: 50%; margin: auto;">
				<div>
					<h1>Users List</h1>
					<a href="<?=base_url()?>Index.php/Admin/user/create">
						<button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:0px; ">Add New User</button>
					</a>
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
							<th>#</th>
							<th>Name</th>
							<th>Fullname</th>
							<th>Email</th>
							<th>Action</th>
						</tr>


					<?php
						while ($arUsers = $result->fetch_assoc()) {
					?>
						<tr>
							<td><?=$arUsers['user_id']?></td>
							<td><?=$arUsers['user_name']?></td>
							<td><?=$arUsers['user_fullname']?></td>
							<td><?=$arUsers['user_email']?></td>
							<td>
			        			<a href="<?=base_url()?>Index.php/Admin/user/read?id=<?=$arUsers['user_id'] ?>">
									<span class="glyphicon glyphicon-eye-open" style="padding: 10px"></span>
								</a>

								<a href="<?=base_url()?>Index.php/Admin/user/update?id=<?=$arUsers['user_id'] ?>">
									<span class="glyphicon glyphicon-pencil" style="padding: 10px"></span>
								</a>

								<a href="<?=base_url()?>Index.php/Admin/user/delete?id=<?=$arUsers['user_id'] ?>">
									<span class="glyphicon glyphicon-trash" style="padding: 10px"></span>
								</a>
							</td>
						</tr>
					<?php
						}
					?>
					</table>

					<?php
						$cou = "SELECT COUNT(*) FROM `lms_users`";
						$result = $mysqli->query($cou);
					?>
					
					<?php
						//đống kết nối
						$mysqli -> close();
					?>
				</div>
			</div>
		</form>
	</body>
</html>