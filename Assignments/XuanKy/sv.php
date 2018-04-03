<?php
function connectDB($sever,$username,$password,$database_name){
	$mysqli= new mysqli($sever,$username,$password,$database_name);
	$mysqli->set_charset("utf8");
	if($mysqli->connect_errno){
		echo "fail";
	}
	return $mysqli;
}
?>