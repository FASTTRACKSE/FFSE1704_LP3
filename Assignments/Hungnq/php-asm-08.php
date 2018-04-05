<?php
	$mysqli = new mysqli('localhost', 'hungnq123', '123', 'ffse1702016_hungnq');
	$mysqli->set_charset("utf8");
	if(mysqli_connect_errno()){
		echo "Không thể kết nối: <br/>" . mysqli_connect_errno();
		exit();
	} else {
		echo "Kết nối thành công";
	}
	$query = "SELECT sinhvien.id, sinhvien.name, sinhvien.age, sinhvien.class, sinhvien.gender, danhmuctin.tendanhmuctin
			FROM sinhvien
			INNER JOIN danhmuctin
			WHERE sinhvien.id=danhmuctin.id_danhmuctin";
	$result = $mysqli->query($query);
	while ($mang = $result->fetch_assoc()) {
		echo "<pre>";
		print_r($mang);
		echo "</pre>";
	}
	$mysqli->close();
?>