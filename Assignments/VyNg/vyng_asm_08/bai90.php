<?php
		function connectDB($server,$username,$password,$database_name){
		//Khởi tạo đối tượng MYSQLi
		$no_name = new mysqli($server,$username,$password,$database_name);
		//Set tiếng việt
		$no_name -> set_charset("utf8");
		//Hiện thông báo lỗi nếu có
		if($no_name -> connect_errno){
			echo "kết nối bị lỗi: ". $no_name -> connect_errno();
		}
		return $no_name;
		}
	?>