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

    $tongtien=0;
    $tonggia=0;
    
    foreach($_SESSION['giohang'] as $key=>$value){
        $tongtien = ($value['sl']*$value['don']);
        $tonggia += $tongtien;
?>

    <tr>
        <td> <?=$value['ten'] ?> </td>
        <td> <?=$value['don'] ?> </td>
        <td> <?=$value['sl'] ?>  </td>
        <td> <?=$tongtien ?> </td>
    </tr>
    <tr> <td>Thành tiền <?=$tonggia ?></td></tr>
    <?php } ?>
</table>
<a href="muahoa.php">Trở về</a>
