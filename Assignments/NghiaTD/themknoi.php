<?php 
function connectDB($server,$username,$password,$database_name){
	$dulieu= new mysqli($server,$username,$password,$database_name);
	$dulieu->set_charset('utf8');
	if($dulieu-> connect_errno){
		echo "kết nối bị lỗi:".$mysqli->connect_error();
	}
	return $dulieu;

}
 ?>
 