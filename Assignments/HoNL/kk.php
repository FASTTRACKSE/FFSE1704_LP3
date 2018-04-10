</head>
	<body>
	<?php
		$id="";
		$tenhoa="";
		$soluong="";
		$dongia="";
		session_start();
		if (isset($_POST['id'])&&isset($_POST['tenhoa'])&&isset($_POST['soluong'])&&isset($_POST['dongia'])) {
			$hoa['id']=$_POST['id'];
			$hoa['tenhoa']=$_POST['tenhoa'];
			$hoa['soluong']=$_POST['soluong'];
			$hoa['dongia']=$_POST['dongia'];

			$_SESSION['giohoa'][$_POST['id']]=$hoa;
		}
		
	?>
	<h1>shop hoa</h1>
<form method="post" enctype="multipart/form-data" action="gioihang.php">
<form method="post" action="gioihang.php">
		<table>
			<tr>
				<td>id</td>
				<td>
				<input name="id" type="text"  value="<?php echo $id ?>" >
				<input name="id" type="text"   >
				</td>
			</tr>
			<tr>
				<td>Tên Hoa</td>
				<td>
				<input name="tenhoa" type="text"  value="<?php echo $tenhoa ?>" >
				<input name="tenhoa" type="text"  >
				</td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td>
				<input name="soluong" type="number"  value="<?php echo $soluong;?> " >
				<input name="soluong" type="number"   >
				</td>
			</tr>
			<tr>
				<td>Đơn Giá</td>
				<td>
				<input name="dongia" type="number"  value="<?php echo $dongia;?> " >
				<input name="dongia" type="number"  >
				</td>
			</tr>
			<tr>
				 <body>
<?php
	session_start();
	$_SESSION['tenhoa'] = $_POST['tenhoa'];
	$_SESSION['soluong'] = $_POST['soluong'];
	$_SESSION['dongia'] = $_POST['dongia'];

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
	$tong=($_POST['soluong']*$_POST['dongia']);
	$sumTong=0;
?>
<form method="post" action="">
	<table>
		<td><strong>tên hoa:<br><?php echo $_SESSION['tenhoa']; ?></strong></td>
		<td><strong>số lương:<br><?php echo $_SESSION['soluong']; ?></strong></td>
		<td><strong>đơn giá:<br><?php echo $_SESSION['dongia']; ?></strong></td>
		<td><strong>tổng:<br><?php echo $tong;?></strong></td>
	</table>
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
</form>
	<?=$sumTong?>
</body>
</html>