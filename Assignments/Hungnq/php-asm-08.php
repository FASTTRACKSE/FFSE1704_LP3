<?php
	$mysqli = new mysqli('localhost', 'hungnq', '123', 'webuser');
	$mysqli->set_charset("utf8");
	if(mysqli_connect_errno()){
		echo "Không thể kết nối: <br/>" . mysqli_connect_errno();
		exit();
	} else {
		echo "Kết nối thành công";
	}
	$query = "SELECT * FROM tin_tuc";
	$result = $mysqli->query($query);
	echo '<pre>';
	prin_r($result);
	echo '</pre>';
	$mysqli->close();
?>