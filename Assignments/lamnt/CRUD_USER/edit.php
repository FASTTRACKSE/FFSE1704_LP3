<?php 
	require_once('libaries.php');
	$mysqli=connectDB('localhost','root','','ffse1702');
	$id =$_GET['id'];
	$sql ="SELECT * FROM `lms_users` WHERE user_id=$id";
	$rs= $mysqli->query($sql);
	$item=$rs->fetch_assoc();
	$rs->num_rows;
	if(isset($_POST['submit'])){
		
		$name = $_POST['fullname'];
		$email=$_POST['email'];  
		if($_POST['password']!=''){
			$password = $_POST['password'];
		}else{
			$password = $item['user_password'];
		}
		$sql = "UPDATE lms_users SET user_fullname='$name',user_email='$email',user_password='$password' WHERE user_id=$id ";
		$avatar= uploadFile('hinhanh');
		if($avatar!=""){
			$sql = "UPDATE lms_users SET user_fullname='$name',user_email='$email',user_password='$password',avatar='$avatar' WHERE user_id=$id ";
		}
		$rs=$mysqli->query($sql);
		if($rs==true){
			header("location: index.php");
		}else{
			echo "sua that bai";
		}
	}
?>
<form role="form" action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
	<label>Tên tài khoản</label>
	<input type="text" name="username" readOnly='true' value='<?=$item['user_name']?>' class="form-control" />
</div>
<div class="form-group">
	<label>Họ và tên </label>
	<input type="text" name="fullname" value='<?=$item['user_fullname']?>' class="form-control" />
</div>
<div class="form-group">
	<label>Email </label>
	<input type="text" name="email" value='<?=$item['user_email']?>' class="form-control" />
</div>
<div class="form-group">
	<label>Mật khẩu </label>
	<input type="password" name="password" class="form-control" />
</div>
<div class="form-group">
	<label>Ảnh đại diện</label>
	<input type="file" name="hinhanh" />
</div>
<button type="submit" name="submit" class="btn btn-success btn-md">Sua</button>
</form>