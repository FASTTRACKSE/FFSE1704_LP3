<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	session_start();
	echo "<pre>";
	print_r($_POST);	
	echo "<pre/>";
	$id = $_POST['id'];
	
	$tenhoa = $_POST['tenhoa'];
	$soluong = $_POST['soluong'];
	$dongia = $_POST['dongia'];
	
	if(isset($_SESSION['giohoa'][$id])){
		$_SESSION['giohoa'][$id]['soluong']+=$soluong;
	}else{
		$_SESSION['giohoa'][$id]=array(
		'tenhoa'=>$tenhoa,
		'soluong'=>$soluong,
		'dongia'=>$dongia
		);
	}
	$tong=0;
	$sumTong=0;
?>
<table>
	<tr>
		<th>ID </th>
		<th>Ten </th>
		<th>So luong</th>
		<th>Don gia </th>
		<th>Thanh Tien </th>
	</tr>
	<?php foreach($_SESSION['giohoa'] as $key=> $item){	
		$tong=$item['soluong']*$item['dongia'];
	?>
		<tr>
			<td><?=$key?> </td>
			<td><?=$item['tenhoa']?> </td>
			<td><?=$item['soluong']?> </td>
			<td><?=$item['dongia']?> </td>
			<td><?=$tong?> </td>
		</tr>
	<?php $sumTong+=$tong; } ?>
</table>
	<a href="cuahang.php">trở về</a>
	<?=$sumTong?>
</body>
</html>