<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>
	<body>
		
		<div style="width: 50%;margin: auto;">
			<div>
				<h1>Users List</h1>
				<button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:0px; "><a style="text-decoration: none;" href="create.php">Add New User</a></button>
			</div>
			<div>
				<?php
					require_once('libaries.php');
					$mysqli = connectDB('localhost','tunglnt1702','123456','ffse1702052');
					//thực thi các câu lệnh truy vấn tại đây
					$sql = "SELECT * FROM lms_users";
					$result = $mysqli->query($sql);
				?>
				<table class="table table-bordered table-striped">
					<tr>
						<th>ID</th>
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
		        			<a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/view.php?id=<?=$arUsers['user_id']?>">
								<span class="glyphicon glyphicon-eye-open" style="padding: 10px"></span>
							</a>

							<a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/update.php?id=<?=$arUsers['user_id']?>">
								<span class="glyphicon glyphicon-pencil" style="padding: 10px"></span>
							</a>

							<a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/delete.php?id=<?=$arUsers['user_id']?>">
								<span class="glyphicon glyphicon-trash" style="padding: 10px"></span>
							</a>
						</td>
					</tr>
				<?php
					}
				?>
				</table>
				<?php
					//đóng kết nối
					$mysqli -> close();
				?>
			</div>
			<div>
  			<ul class="pagination">
	    		<li><a href="#">1</a></li>
		    	<li><a href="#">2</a></li>
		    	<li><a href="#">3</a></li>
		    	<li><a href="#">4</a></li>
		    	<li><a href="#">5</a></li>
  			</ul>
		</div>
		</div>
	</body>
</html>