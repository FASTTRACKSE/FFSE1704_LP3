<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<?php
	require_once('php-asm-08a.php');
	$mysqli=ketnoiDB('localhost','minhTQ','123456','lms_users');
	$sql="SELECT * FROM lms_users.lms_user";
	$result= $mysqli->query($sql);
	


	?>
	<style>
		.minh{
			margin: 52px 9px 20px 1px;
		}
	</style>
</head>
<body>
	<a href="php-asm-08b.php" >
		<button type="button" class="btn btn-success" style="margin: 11px 2px 11px 1123px">Thêm thành viên</button>
	</a>
	<table class="table table-striped  " >
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Fullname</th>
			<th>Email</th>
			<th>Action</th>

		</tr>
		<?php
		while ($arTT = $result->fetch_assoc()) {	
			?>
			<tr>
				<td><?=$arTT['user_id'] ?> </td>
				<td><?=$arTT['user_name'] ?> </td>
				<td><?=$arTT['user_fullname'] ?> </td>
				<td><?=$arTT['user_mail'] ?> </td>
				<td> 
					<a href="php-asm-08c.php?id=<?=$arTT['user_id']?>"  style="padding-right: 10px;"><span class="glyphicon glyphicon-eye-open"></span>
					</a>
					<a href="php-asm-08d.php?id=<?=$arTT['user_id']?>&name=<?=$arTT['user_name']?>" style="padding-right: 10px;"><span class="glyphicon glyphicon-pencil"></span>
					</a>
					<a href="php-asm-08e.php?id=<?=$arTT['user_id']?>" ><span class="glyphicon glyphicon-trash" onclick="alert('bạn đã xóa thành công')"></span>
					</a></td>
				</tr>
				<?php 

			}
			$mysqli->close();
			?>
		</table>
	</body>
	</html>



