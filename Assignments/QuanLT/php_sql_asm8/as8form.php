<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
require('kndbas8.php');
?>
	<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$abc="INSERT INTO lms_users(user_name,user_fullname,user_password) VALUES ('$name','$fullname','$email');";
$connect = connectDB('localhost','root','','ffse1704');
$connect->query($abc);

}
?>

<form action="indexxx.php" method="POST">
	Name: <br><input type="text" name="name"><br>
	Fullname: <br><input type="text" name="fullname"><br>
	Email: <br><input type="text" name="email"><br>
	Password: <br><input type="password" name="password"><br>
	<input type="submit" name="submit" value="Dang ky">
	<input type="submit" name="canel" value="Canel">
</form>

</body>
</html>