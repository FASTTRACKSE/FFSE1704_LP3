<?php
	session_start();
	if(isset($_POST['id'])||
		isset($_POST['ten'])||
		isset($_POST['sl'])||
		isset($_POST['dongia'])
)
	{
		$id=$_POST['id'];
		$ten=$_POST['ten'];
		$sl=$_POST['sl'];
		$dongia=$_POST['dongia'];
		
		if(isset($_SESSION['giohang'][$id])){
			$_SESSION['giohang'][$id]['sl']+=$sl;
		}
		else {
				$_SESSION['giohang'][$id] = array(
					'id ' => $id,
					'ten' => $ten,
					'sl'  => $sl,
					'dongia' => $dongia,
					
				);
			}
			header("location: php-asm-03b.php");	
	}
?>


<form action="" method="POST" style="background-color:#c6edec;width: 250px;" enctype="multipart/form-data">
	<h2 style="background: #00a19b; width:240px;color: white; padding-left: 10px;"> Cửa hàng Sunflower</h2>
	Id hoa:<br>
	<input type="text" name="id"><br><br>
	Tên hoa:<br>
	<input type="text" name="ten"><br><br>
	Số lượng :<br>
	<input type="number" name="sl"><br><br>
	Đơn giá:<br>
	<input type="number" name="dongia"><br><br>		
	<input style="margin-left: 80px;" type="submit" name="submit" value="Mua hoa"><br>


</form>