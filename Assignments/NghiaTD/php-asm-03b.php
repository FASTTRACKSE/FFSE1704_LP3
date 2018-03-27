

<h1>giỏ hàng</h1>
<?php
session_start();
echo "<table cellspacing=\"0\">
		<tr style=\"background:#dfdfdf\">
		<th style=\"width:120px\" >Tên sản phẩm</th>
		<th style=\"width:80px\" >Giá</th>
		<th style=\"width:100px\" >Số lượng</th>
		<th style=\"width:120px\" >tổng tiền</th>
		<th style=\"width:150px\" >Chức năng</th>

	
		</tr>";
		$tong=0;
	$tongtien=0;
	foreach($_SESSION['giohang'] as $key => $value) {
		$tong=($value['sl']*$value['dongia']);
		$tongtien +=$tong;
		echo "<tr style=\"text-align:center;\">";
		echo "<td style=color:'red'>".$value['ten']."</td>";
		echo "<td>".$value['dongia']."</td>";
		echo "<td>".$value['sl']."</td>";
		echo "<td>".$tong."</td>";
		echo "<td><a href=\"delete.php\" >Xoa</a></td>";
		echo "</tr>";
	}
	echo "<table>";
	echo "thanh tiền .$tongtien";
?>