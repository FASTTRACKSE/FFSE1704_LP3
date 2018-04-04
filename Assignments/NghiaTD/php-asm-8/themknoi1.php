<?php 
require_once('themknoi.php');
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

 	
 	
 	
 	