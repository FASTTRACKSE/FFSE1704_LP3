<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	session_start();
	$_SESSION['tenhoa'] = $_POST['tenhoa'];
	$_SESSION['soluong'] = $_POST['soluong'];
	$_SESSION['dongia'] = $_POST['dongia'];

	$tong=0;
	$tong=($_POST['soluong']*$_POST['dongia']);
?>
<form method="post" action="">
	<table>
		<td><strong>tên hoa:<br><?php echo $_SESSION['tenhoa']; ?></strong></td>
		<td><strong>số lương:<br><?php echo $_SESSION['soluong']; ?></strong></td>
		<td><strong>đơn giá:<br><?php echo $_SESSION['dongia']; ?></strong></td>
		<td><strong>tổng:<br><?php echo $tong;?></strong></td>
	</table>
	<a href="cuahang.php">trở về</a>
</form>
</body>
</html>