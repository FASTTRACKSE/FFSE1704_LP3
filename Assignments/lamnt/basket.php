<?php 
	session_start();
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	//Lấy thông tin file
	$name = $_FILES['hinhanh']['name'];//name.jpg
	$arName = explode('.',$name);
	$duoiFile = end($arName);
	$newName = time();
	$name_new = $newName.'.'.$duoiFile;
	$tmp_name= $_FILES['hinhanh']['tmp_name'];
	
	//Tạo đường dẫn gốc
	$part= $_SERVER['DOCUMENT_ROOT'];//D:/xampp/htdocs
	$part_upload=$part.'/FFSE1704_LP3/Assignments/lamnt/images/'.$name_new;
	
	//Di chuyển file vào thư mục trên server
	move_uploaded_file($tmp_name,$part_upload);
	
	$id = $_POST['id'];
	$qty_new = $_POST['qty'];
	$a = $_POST['id'];
	if(isset($_SESSION['giohoa'][$id])){
		echo "Key da ton tai";
		$_SESSION['giohoa'][$a]['qty']+=$qty_new;
	}else{
		echo "Key chua ton tai";
		$_SESSION['giohoa'][$id]=array(
			'name' =>$_POST['name'],
			'qty'=>$_POST['qty'],
			'price'=>$_POST['price'],
			'image'=>$name_new
		);
	}
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	$sum = 0;
	foreach($_SESSION['giohoa'] as $key=>$value){
		$qty = $value['qty'];
		$price = $value['price'];
		$sum = $sum + $qty*$price;
		echo $qty*$price . "<br>";
	}
	echo $sum;
?>
<h1>
	Giỏ hàng
</h1>
<table>
	<tr>
		<th>Tên sản phẩm </th>
		<th>Số lượng </th>
		<th>Đơn giá</th>
		<th>Thành tiền </th>
		<th>Hình ảnh </th>
	</tr>
	<tr>
		<td>Hoa</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td><img width="100px" src='http://localhost/FFSE1704_LP3/Assignments/lamnt/images/<?=$_SESSION['giohoa'][$id]['image']?>'  /></td>
	</tr>
	<tr>
		<td colspan='4'>Thành tiền : 1đ</td>
	</tr> 	
</table>
<a href="shop.php">Trở về</a>