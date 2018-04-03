<?php 
function ketnoiDB($user_name,$user_fullname,$user_mail,$user_password){
	$name= new mysqli($user_name,$user_fullname,$user_mail,$user_password);
	$name->set_charset('utf8');
	if ($name-> connect_errno) {
		echo "kết quả bị lỗi".$mysqli->connect_error();
	}
	return $name;
}

?>