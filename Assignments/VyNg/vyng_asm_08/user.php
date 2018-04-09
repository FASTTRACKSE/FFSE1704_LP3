<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
	if (isset($_POST['submit'])) {
		$user_name=$_POST['username'];
		$user_fullname=$_POST['fullname'];
		$user_email=$_POST['email'];
		$user_password=$_POST['password'];
	
	require_once('bai90.php');
	$MYSQLi = connectDB('localhost','giavy1995','123456789','sinhvienffse1704');
	$SQL = "INSERT INTO masinhvienffse1704(user_name,user_fullname,user_email,user_password)
	VALUES('$user_name','$user_fullname','$user_email','$user_password')";
	echo $SQL;
	$result = $MYSQLi -> query($SQL);
	echo "<pre>";
	print_r($SQL);
	echo "</pre>";
	header("location:lms_users.php");

}
?>
<table>
	<form method="POST" enctype="multipart/form-data">
            <tr >
                <h1>create new user</h1>
            </tr>
            <tr>
                <td>Tên đăng nhập</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
            	<td>email</td>
            	<td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="fullname" required></td>
            </tr>
            <tr>
                <td>Ảnh đại diện</td>
                <td><input type="file" name="avatar" value="Chọn tệp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Xác nhận"> 
                    <input type="reset" name="cancel" value="Hủy bỏ">
                </td>
            </tr>
    </form>
</table>
</body>
</html>