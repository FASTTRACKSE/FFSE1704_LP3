<!DOCTYPE html>
<html>
<head>
	<title>Xuân Kỳ</title>
</head>
<body>
	<h1>Giõ hàng</h1>
	<?php
	session_start();
	?>
	<table cellpadding="10px" cellspacing="0px" style="border: 1px solid;background-color: #00ffff38;">
		<tr style="background-color: #00ffdc;">
			<td>Tên sản phẩm</td>
			<td>Giá</td>
			<td>Số lượng</td>
			<td>Tổng tiền</td>
		</tr>
		<?php
		$sum=0;
		$tong=0;

		?>
		<?php foreach ($_SESSION['giohang'] as $key => $value) {
			$sum= ($value['dongia']* $value['soluong']);$tong=$tong+$sum;
			?>

			<tr>
				<td style="border-bottom: 1px solid"><?=$value['tenhoa']?></td>
				<td style="border-bottom: 1px solid"><?=$value['dongia']?></td>
				<td style="border-bottom: 1px solid"><?=$value['soluong']?></td>
				<td style="border-bottom: 1px solid"><?= $sum ?></td>
				<td style="border-bottom: 1px solid"><a href="xoa.php">Xóa</a></td>
			</tr>
			<?php }?>
			<?php
			echo"<pre>";
			print_r($FILES);
			echo"</pre>";
			?>
		</table>
	</body>
	</html>
	<h2>Tổng số tiền là: <?=$tong?>K.vnd</h2>
	<a href="cuahang.php">Trở về</a>