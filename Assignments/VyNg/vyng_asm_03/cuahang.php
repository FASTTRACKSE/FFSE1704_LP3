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
<form method="post" enctype="multipart/form-data" action="gioihang.php">
		<table>
			<tr>
				<td>id</td>
				<td>
				<input name="id" type="text"  value="<?php echo $id ?>" >
				</td>
			</tr>
			<tr>
				<td>Tên Hoa</td>
				<td>
				<input name="tenhoa" type="text"  value="<?php echo $tenhoa ?>" >
				</td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td>
				<input name="soluong" type="number"  value="<?php echo $soluong;?> " >
				</td>
			</tr>
			<tr>
				<td>Đơn Giá</td>
				<td>
				<input name="dongia" type="number"  value="<?php echo $dongia;?> " >
				</td>
			</tr>
			<tr>
				<td><label>
				<input type="submit" name="post" value="Mua Hoa">
				</label></td>
			</tr>
		</table>
	</form>
	</body>
</html>