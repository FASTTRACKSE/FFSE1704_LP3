<?php 
session_start();
	if(isset($_SESSION['user'])){
		echo "xin chao ".$_SESSION['user'];
	}else{
		header("location: login.php");
	}
	
	
?>
<a href="dangxuat.php" > Dang xuat </a>