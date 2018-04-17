<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php
		
		function connectDB($server,$username,$password,$database_name){
	$dulieu= new mysqli($server,$username,$password,$database_name);
	$dulieu->set_charset('utf8');
	if($dulieu-> connect_errno){
		echo "kết nối bị lỗi:".$mysqli->connect_error();
	}
	return $dulieu;

}
// $mysqli=connectDB('localhost','nghia123','123456','hoc_sinh');
// $sql="SELECT * FROM lms_users";

// 	$result=$mysqli->query($sql);

$mysqli=connectDB('localhost','nghia111','123456','hoc_sinh');
	$id=$_GET['id'];
	$sql="SELECT * FROM lms_users WHERE user_id=$id";
	$rs=$mysqli->query($sql);
$item=$rs->fetch_assoc();


// $rs->num_rows;
// print_r($item);

 ?>
	
		
		 <tr>
 	 	<td><?=$item['user_id'] ?></td><br>
 	 	<td><?=$item['user_name'] ?></td>
 	 	<td><?=$item['user_fullname'] ?></td>
 	 	<td><?=$item['user_email'] ?></td>
	 </tr>

 	
 	
 	
 	
	
	</table>



	


	<a href=""><button type="button" class="btn btn-primary" style="margin-top: 20px; margin-left: 380px;">Back</button></a>
 
</body>
</html>