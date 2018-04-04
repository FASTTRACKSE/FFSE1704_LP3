<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<?php 
	 $loi= "";
	 $name=$_GET['name'];
	if (isset($_POST['update'])) {
	require_once('php-asm-08a.php');
	
		$mysqli= ketnoiDB('localhost','minhTQ','123456','lms_users');
		$name=$_POST['name'];
		$fullname= $_POST['fullname'];
		$mail=$_POST['mail'];
		$id=$_GET['id'];
		$sql="UPDATE lms_user SET  user_fullname='$fullname' ,user_mail='$mail' WHERE user_id='$id'";
		$rs = $mysqli->query($sql);
		if($rs==true){
			header('location: php-asm-08.php');
		}else{
			$loi= "them that bai";
		}
		
		$mysqli->close();
	}





	?>
	<style>
	input.hover{
		color: #3b3bd6;
	}
	form{
		margin-left:  580px;
	}
</style> 

</head>
<body>
	<h1 style="text-align: center; color: red;" >Update User Info</h1>
	<form action="" method="POST" >
		<h3>Name</h3>
		<input type="text" name="name" value="<?php echo $name ?>" disabled><br>
		<h3>fullname</h3>
		<input type="text" name="fullname" value="" required><br>
		<h3>Email</h3>
		<input type="text" name="mail" value="" required><br>
		<input type="submit" name="update" value="update" style="    margin: 19px 0 0px 26px;">
		<input type="submit" name="cancel" value="cancel">

	</form>
</body>
</html>


