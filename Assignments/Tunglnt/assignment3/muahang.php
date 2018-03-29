<html>
	<title></title>
	<head>
		
	</head>
	<body>
	<?php
		$id="";
		$tenhoa="";
		$soluong="";
		$dongia="";
		session_start();
		if (isset($_POST['id'])||isset($_POST['tenhoa'])||isset($_POST['soluong'])||isset($_POST['dongia'])) {
			$hoa['id']=$_POST['id'];
			$hoa['tenhoa']=$_POST['tenhoa'];
			$hoa['soluong']=$_POST['soluong'];
			$hoa['dongia']=$_POST['dongia'];
			$_SESSION['giohoa'][$_POST['id']]=$hoa;
		}
	?>
	<h1>shop hoa</h1>	
	<form action='giohang.php' method="POST"  style="background:#c6edec; width:250px; " enctype="multipart/form-data" >
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
