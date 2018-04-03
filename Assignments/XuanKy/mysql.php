<?php
//khởi tạo đối tượng mới
	$mysqli= new mysqli ('localhost','xuanky','12345','ffse1701005');
	//thiết lập font chữu tiếng việt
	$mysqli->mysql_set_charset("utf8");
	//hiển thị thông báo lỗi nếu có
	if (mysqli_connect_errno()){
		echo "fail".$mysqli->connect_errno();
	}
	else{
		echo "kết nối thành công";
	}
	$sql="SELECT * FROM `lms_students` WHERE id=1";
	$result=$mysqli->query($sql);
	while($arTT=$result->fetch_assoc()){
		echo "<pre>";
		print_r($arTT);
		echo "</pre>";
	}
	//đóng kết nối
	$mysqli->close();
?>