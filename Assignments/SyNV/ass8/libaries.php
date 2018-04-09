<?php
	function connectDB($server, $username, $password, $database_name){
		$no_name = new mysqli($server, $username, $password, $database_name);
		//thiết lập font chử Tiếng Việt
		$no_name->set_charset("utf8");
		//hiển thị thông báo lổi (nếu có)
		if ($no_name -> connect_errno) {
			echo "Cann't connect to db: <br>" . $mysqli->connect_error();
			exit();
		}
		return $no_name;
	}
?>