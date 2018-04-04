<?php 
function connectDB($server , $username, $password, $database_name){
	$mysqli = new mysqli($server, $username, $password, $database_name);

	  	//Sét tiếng việt 
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno ){
		echo " Kết nối thất bại ";
	}
	return $mysqli ; 
}
?>
