<?php
//'localhost', 'hungnq123', '123', 'ffse1702016_hungnq'
	function ketnoi_database($server,$username,$password,$db){
		$no_name = new mysqli($server,$username,$password,$db);
		$no_name->set_charset("utf8");
		if($no_name->connect_errno){
			echo "Không thể kết nối: <br/>" . connect_errno();
			exit();
		} 
		return $no_name;
	}
?>