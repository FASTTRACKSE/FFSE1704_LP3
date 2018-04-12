<?php 
	if(isset($_POST['post'])){
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$hoten=$_POST['hoten'];
	function connectDB($server,$username,$password,$database_name){
	$dulieu= new mysqli($server,$username,$password,$database_name);
	$dulieu->set_charset('utf8');
	if($dulieu-> connect_errno){
		echo "kết nối bị lỗi:".$mysqli->connect_error();
	}
	return $dulieu;

}
	$mysqli=connectDB('localhost','nghia111','123456','hoc_sinh');

	mysqli_query($mysqli,"SELECT * FROM lms_users WHERE user_name='$name'");
		if(mysqli_affected_rows($mysqli)>0){
			echo " tên đăng nhập đã có";
		}
		else {
			$sql="INSERT INTO lms_users(user_name,user_fullname,user_password)
	VALUES('$name','$hoten','$pass')";
		$result=$mysqli->query($sql);

	echo "<pre>";
	print_r($sql);
	echo "</pre>";
	redirect('admin/user/index');
		}

	

}
 ?>

<form action="" method="POST" enctype="multipart/form-data">
	<table border="0" width="500px" bordercolor="#FFFF99" bgcolor="#FFFF99" align="center" >
		<tr >
			<td colspan="2" bgcolor="#FF9900" align="center">Phiếu đăng nhập</td>
		</tr>
		<tr>
			<td width="111"><strong>Tên Đăng Nhập</strong></td>
			<td width="379"><input type="text" name="name" required></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Mật khẩu</strong></td>
			<td width="379"><input type="password" name="pass" required></td>
			
		</tr>
		<tr>
			<td width="111"><strong>email</strong></td>
			<td width="379"><input type="email" name="hoten" required></td>
			
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
			</table>
</form>
