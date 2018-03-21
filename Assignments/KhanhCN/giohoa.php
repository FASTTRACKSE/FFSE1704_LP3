<h1>Giỏ hàng<h1>

<?php
session_start();


echo "<table cellspacing=\"0\">
<tr style=\"background: #B4EEB4\"><th style=\"width:120px\">Tên sản phẩm </th><th style=\"width:80px\">Giá</th><th style=\"width:150px\">Số lương</th><th style=\"width:80px\">Tổng tiền</th><th style=\"width:150px\">Chức năng</th></tr>";


$Tong=0;
$tonggia = 0 ;


foreach($_SESSION['GIOHOA'] as $key => $value){
	
	$Tong=($value['sl']*$value['dg']);
	$tonggia +=$Tong;
	
	echo "<tr style=\"text-align: center\">";
	echo  "<td>" .$value['ten']."</td>";
	echo  "<td>" .$value['dg']."</td>";
	echo  "<td>" .$value['sl']. "</td>";
	echo "<td>" .$Tong. "</td>";
	echo "<td><a href=\"xoa.php\">Xoa</a></td>";
	
	echo "</tr>";
}
echo"<table>"; 


echo "<h3>Thành tiền :  $tonggia đ</h3>";

unset($_SESSION['GIOHOA'][1]);


echo("<pre>");
print_r($_SESSION);
echo "<pre>";

?>
<td><a href="formmuahoa.php">Trở về</a>
</td>