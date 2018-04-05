<?php 
	require_once('libaries.php');
	$mysqli=connectDB('localhost','root','','ffse1702');
	$id =$_GET['id'];
	if(isset($_POST['submit'])){
		$sql ="DELETE FROM `lms_users` WHERE user_id=$id";
		$rs = $mysqli->query($sql);
		if($rs==true){
			header('location: index.php');
		}else{
			echo "Xoa that bai";
		}
	}
	
?>
<form role="form" action="" method="POST" >
<button type="submit" name="submit" class="btn btn-success btn-md">Xoa</button>
<a href="http://localhost/FFSE1704_PHP1/vd1.php">Tro ve</a>
</form>