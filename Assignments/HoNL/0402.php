<?php  
  $mysqli = new mysqli('localhost','sinhvien','99999','anews');
  //set tiếng việt
  $mysqli->set_charset("utf8");
  //hiển thị thông báo lỗi nếu có
  if($mysqli->connect_errno){
  	echo "kết nối bị lỗi:".$mysqli->connect_errno();
  } else{
  	echo "kết nối thành công";
  }
  	//tạo câu lệnh sql và thực thi
   $sql = "SELECT * FROM tintuc";
   $result =$mysqli->query($sql);
   while ($arTT = $result->fetch_assoc()) {
   	echo "<pre>";
   	print_r($arTT);
   	echo"</pre>";
   }
   echo "<hr>";
   //tạo câu lệnh và thực thi
   $sql = "SELECT *,tentintuc AS name FROM tintuc
   WHERE id_tintuc=1";
   $result1=$mysqli->query($sql);
   $arTT1 =$result1->fetch_assoc();
   echo "<pre>";
   print_r($arTT1);
   echo "</pre>";

  ?>