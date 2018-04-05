<?php
	session_start();
	if(
		isset($_POST["id"]) || 
		isset($_POST["tenhoa"]) || 
		isset($_POST["soluong"]) || 
		isset($_POST["dongia"])
	)
	{
		
		$id = $_POST['id'];
		$tenhoa = $_POST['tenhoa'];
		$soluong = $_POST['soluong'];
		$dongia = $_POST['dongia']; 
		
		
		if (isset($_SESSION['giohang'][$id])) {
			$_SESSION['giohang'][$id]['soluong']+= $soluong;
		}else{
			$_SESSION['giohang'][$id] = array(
				
				'id' => $id,
				'tenhoa' => $tenhoa,
				'soluong' => $soluong,
				'dongia' => $dongia,
			
			);
		}
		header("location: php-asm-03giohang.php");
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action='' method="POST"  style="background:#c6edec; width:250px; " enctype="multipart/form-data" >
      		<h2 style= "background:#00a19b; width:240px; color:white; padding-left:10px"; >Cửa hàng Sunflower</h2>
    		Id hoa:</br> 
    		<input type="text" name="id"> <br/><br/>
			Tên hoa: </br>
			<input type="text" name="tenhoa"><br/><br/>
			Số lượng:</br>
			<input type="number" name="soluong"><br/><br/>
			Đơn giá:</br>
			<input type="number" name="dongia"><br/><br/>
			<input style="margin-left: 80px" type="submit" value="Mua hoa">
		</form>

	</body>
</html>