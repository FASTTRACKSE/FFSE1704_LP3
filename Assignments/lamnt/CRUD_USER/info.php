<?php 
	if(isset($_GET['id'])){
		require_once('libaries.php');
		$mysqli=connectDB('localhost','root','','ffse1702');
		$id =$_GET['id'];
		$sql ="SELECT * FROM `lms_users` WHERE user_id=$id";
		$rs= $mysqli->query($sql);
		$item=$rs->fetch_assoc();
		$rs->num_rows;
		print_r($item);
	}else{
		echo "ID khong ton tai";
	}
	

?>