s<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment PHP 3c</title>
</head>
<body>
	<?php
		$tugoc = " ";
		$caugoc = " ";
		$cauthay = " ";
		 $tuthay= " ";
		if(isset($_POST['tuthay'])){
		$caugoc = $_POST['caugoc'];
		$tugoc = $_POST['tugoc'];
		$tuthay   = $_POST['tuthay'];
		$cauthay = str_replace($tugoc, $tuthay, $caugoc);
		}
	?>
	<form method="post" action="">
		<table width="500" border="0" align="center" bordercolor="#FFFF99" bgcolor="#FFFF99">
			<tr>
				<td colspan="2" align="center" bgcolor="#FF9900"><h1 class="style1">Thay Thế Chuỗi  </h1></td>
			</tr>
			<tr>
				<td width="379">
				<input name="caugoc" type="text"  value="<?php echo $caugoc ?>" >
				</td>
			</tr>
			<tr>
				<td><strong>Từ gốc</strong></td>
				<td width="379">
				<input name="tugoc" type="text"  value="<?php echo $tugoc ?>" >
				</td>
			</tr>
			<tr>
				<td><strong>Từ thay thế</strong></td>
				<td width="379">
				<input name="tuthay" type="text"  value="<?php echo $tuthay;?> " >
				</td>
			</tr>
			<tr>
				<td><strong>Câu Đã Thay Thế là: </strong></td>
				<td width="379">
				<input name="cauthay" type="text"  value="<?php echo $cauthay;?> " >
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><label>
				<input type="submit" name="post" value="Thực Hiện">
				</label></td>
			</tr>
		</table>
	</form>

</body>
</html>