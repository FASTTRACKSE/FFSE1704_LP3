<!DOCTYPE html>
<html>
<head>
	<title>Le Trong Quan Official</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body style="width: 600px; margin: auto" >
	<div>
<h1>Users List</h1>
<button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:0px; ">Add User News</button>
</div>
<?php
					require_once('kndbas8.php');
					$mysqli = connectDB('localhost','root','','ffse1704');

					//thực thi các câu lệnh truy vấn tại đây
					$sql = "SELECT * FROM lms_users";
					$result = $mysqli->query($sql);
				?>
				
	<table class="table table-striped table-bordered">
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
<div>
					<tr>

						<td><?=$arUsers['user_id']?></td>
						<td><?=$arUsers['user_name']?></td>
						<td><?=$arUsers['user_fullname']?></td>
						<td><?=$arUsers['user_email']?></td>
						<td>
							<a href="http://localhost/FFSE1704_PHP1/indexxx.php?user_id=<?=$arUsers['user_id']?>">
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
</body>
</html>