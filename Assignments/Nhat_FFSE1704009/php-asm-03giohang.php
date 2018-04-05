<h1>Giỏ hàng<h1>
<?php
	session_start();

	echo "<table cellspacing=\"0\">
			<tr style=\"background: #dfdfdf\">
				<th style=\"width:120px\">Tên sản phẩm </th>
				<th style=\"width:80px\">Giá</th>
				<th style=\"width:150px\">Số lương</th>
				<th style=\"width:80px\">Tổng tiền</th>
				<th style=\"width:150px\">Chức năng</th>
			</tr>";

	$Tong=0;
	$tonggia = 0 ;

	foreach($_SESSION['giohang'] as $key => $value){
	
		$Tong=($value['soluong']*$value['dongia']);
		$tonggia +=$Tong;
	
		echo "<tr style=\"text-align: center; \">";
		echo  "<td style = 'color:red'>" .$value['tenhoa']."</td>";
		echo  "<td>" .$value['dongia']."</td>";
		echo  "<td>" .$value['soluong']. "</td>";
		echo "<td>" .$Tong. "</td>";
		echo "<td><a href=\"delete.php\" >Xoa</a></td>";	
		echo "</tr>";

	}

	echo"<table>"; 
	echo "<h3>Thành tiền: $tonggia đ</h3>";

	unset($_SESSION['giohang'][1]);
?>
<td><a href="php-asm-03cuahang.php">Trở về</a></td>

<?php
	echo("<pre>");
	print_r($_SESSION);
	echo "<pre>";
?>