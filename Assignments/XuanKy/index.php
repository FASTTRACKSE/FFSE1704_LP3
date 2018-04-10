<!DOCTYPE html>
<html>
<head>
	<title>Xuân Kỳ</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body style="margin: auto;width: 800px">
</body>
</html>
<?php
	//tạo đối tượng mới
$mysqli= new mysqli('localhost','xuanky','12345','ffse1704');
	//thiết lập font chữ tiếng việt
$mysqli	->set_charset("utf8");
	//hiển thị thông báo lỗi
if(mysqli_connect_errno()){
	echo "lỗi".$mysqli->connect_errno();
}
else{
}
	//thực hiện câu lệnh sql
$sql="SELECT lms_users.user_id , lms_users.user_name ,lms_users.user_fullname , lms_users.user_email FROM lms_users ";
$result=$mysqli->query($sql);

?>
		<p  class="typography-headline"></p>
		<strong style="font-size: 30px;width: 125px;">Users List</strong>
		<a href="them.php"><button type="button" class="btn btn-success" style="    margin-left: 530px;">Add New users</button></a>
<hr  width="800px" align="left" /> 
<table class="table table-bordered" style="max-width: 800px">
	<tr>
		<td><strong>#</strong></td>
		<td><strong>Name</strong></td>
		<td><strong>Fullname</strong></td>
		<td><strong>Email</strong></td>
		<td><strong>Action</strong></td>
	</tr>
	<?php while ($ar=$result->fetch_assoc()) { ?>
	<tr>
		<td><?=$ar['user_id'] ?></td>
		<td><?=$ar['user_name'] ?></td>
		<td><?=$ar['user_fullname'] ?></td>
		<td><?=$ar['user_email'] ?></td>
		<td>
			<a href="http://localhost/ffse1701005/xem.php?id=<?=$ar['user_id'] ?>" class="glyphicon glyphicon-eye-open"></a>
			<a href="http://localhost/ffse1701005/sua.php?id=<?=$ar['user_id'] ?>" class="glyphicon glyphicon-pencil"></a>
			<a href="http://http://localhost/ffse1704_lp3/Assignments/XuanKy/delete1.php?id=<?=$ar['user_id'] ?>" class="	glyphicon glyphicon-trash"></a>
		</td>
	</tr>
	<?php } ?>
</table>