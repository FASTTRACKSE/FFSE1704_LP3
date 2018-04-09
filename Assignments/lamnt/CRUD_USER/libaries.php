<?php 
	function uploadFile($nameInput){
		//Lấy thông tin file
		if($_FILES[$nameInput]['name']!=''){
		$name = $_FILES[$nameInput]['name'];//name.jpg
		$arName = explode('.',$name);
		$duoiFile = end($arName);
		$newName = time();
		$name_new = $newName.'.'.$duoiFile;//111xxx.jpg
		$tmp_name= $_FILES[$nameInput]['tmp_name'];
		
		//Tạo đường dẫn gốc
		$part= $_SERVER['DOCUMENT_ROOT'];//D:/xampp/htdocs
		$part_upload=$part.'/FFSE1704_PHP1/images/'.$name_new;
		
		//Di chuyển file vào thư mục trên server
		move_uploaded_file($tmp_name,$part_upload);
		return $name_new;
		}else{
			return 0;
		}
	}
	function connectDB($server,$username,$password,$database_name){
		$no_name = new mysqli($server,$username,$password,
		$database_name);
		//Set tiếng việt
		$no_name->set_charset('utf8');
		//Hiển thông báo lỗi nếu có
		if($no_name->connect_errno){
			echo "Kết nối bị lỗi: ". $mysqli->connect_error();
		}
		return $no_name;
	}
	
?>