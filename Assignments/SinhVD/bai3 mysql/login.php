
<html>
	<head>
		<title> Login</title>
	</head>
	<body> 
		<?php 
		$loi="";
		if (isset($_POST['login'])) {
		
        require_once('uplot.php');
        $MYSQLi = sinhvd('localhost','vanducsinh','123456','ffse1704');
        $user_name=$_POST['user_name'];
        $user_fullname=$_POST['user_fullname'];
        $user_email=$_POST['user_email'];
        $sql="INSERT INTO lms_users (user_name,user_fullname,user_email)VALUES('$user_name','$user_fullname','$user_email')";
        $sr=$MYSQLi->query($sql);
        if ($sr==true) {
        	header('location: vd10.php');
        }else{
        	$loi="thêm thất bại";
        }
        var_dump($rs);
        $MYSQLi->close();
}
		 ?>
	<form action="" method="POST" >
		Name: <input type="text" name="user_name " /> <br/>
		Fullname: <input type="text" name="user_fullname" /> <br/>
		Email: <input type="text" name="user_email" /> <br/>

		<input type="submit" name="login" value="Login" />
	  <a href="vd10.php">
	  	<button type="button">trở về</button>
	  </a>
	</form>
		
	</body>
</html>
