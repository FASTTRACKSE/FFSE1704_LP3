<?php 
fuction connectDB ($server,$username,$passwword,$database_name);{
	$no_name = new mysqli($sever,$username,$passwword,$database_name);
	//set tiếng việt
	$no_name->set_charset('utf8');
	//hiển thị thông báo lỗi nếu có
	if ($no_name->connect_errno) {
		echo "kết nối bị lỗi".$mysqli->connect_errno();

	}
     return $no_name;
}
 
?>