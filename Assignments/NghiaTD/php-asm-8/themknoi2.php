<?php 
require_once('themknoi.php');
$mysqli=connectDB('localhost','nghia111','123456','hoc_sinh');
$id=$_GET['id'];
$sql="SELECT * FROM `lms_users` WHERE user_id=$id";
$rs=$mysqli->query($sql);
	
$arus=$rs->fetch_assoc();
$rs->num_rows;
if(isset($_POST['post'])){
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$hoten=$_POST['hoten'];

	$sql="UPDATE lms_users SET user_name='$name',user_fullname='$hoten',user_password='$pass' WHERE user_id=$id";
		$rs=$mysqli->query($sql);
		 if($rs==true){
              header('Location: php-asm-8b.php');
          }else{
            echo "them that bai". $rs -> error;
          }

	}
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>


 
	<table border="0" width="500px" bordercolor="#FFFF99" bgcolor="#FFFF99" align="center" >
		<form role="form" action="" method="POST" enctype="multipart/form-data">
		<tr >
			<td colspan="2" bgcolor="#FF9900" align="center">Phiếu đăng nhập</td>
		</tr>
		<tr>
			<td width="111"><strong>Tên Đăng Nhập</strong></td>
			<td width="379"><input type="text" name="name" value="<?=$arus['user_name']?>" required></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Mật khẩu</strong></td>
			<td width="379"><input type="password" name="pass" required></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Họ và tên</strong></td>
			<td width="379"><input type="text" name="hoten" required></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Ảnh đại diện</strong></td>
			<td width="379"><input type="file" name="fileanh"></td>
			
		</tr>
		<tr>
				<td colspan="2" align="center">
					
					<input type="submit" name="post" value="Thực Hiện">
					<input type="reset" name="cancer" value="Hủy">
				
				</td>
			</tr>
			</form>
			</table>
