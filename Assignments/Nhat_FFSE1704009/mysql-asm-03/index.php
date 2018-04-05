<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment MySQL 03</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<body>
	<?php
		require_once('ket_noi_MySQL.php');

		 $MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');
		 $SQL = "SELECT * FROM lms_users";
		$result = $MYSQLi -> query($SQL);
	?>



<h1 style="margin-left: 380px;">User List</h1> 
<a href="http://localhost/FFSE1704_LP3/Assignments/Nhat_FFSE1704009/mysql-asm-03/create.php"><button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:385px; border: 1px; ">Add New User</button></a>
<table class="table table-striped" style="width: 50%; margin: auto;">
		
		
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Fullname</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		
	<?php
		//Phân trang
		require_once('ket_noi_MySQL.php');
		 $MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');

		 $sotin_1_trang= 5;

		 if(isset($_GET['trang'])){
		 	 $trang= $_GET['trang'];
		 }else{
		 	$trang = 1;
		 }

		 $from= ($trang-1)*$sotin_1_trang;
		 $SQL = "SELECT * FROM lms_users LIMIT $from, $sotin_1_trang";
		$result = $MYSQLi -> query($SQL);
		while ($arUS = $result->fetch_assoc()) {
		




			?>
	
			<tr>
				<td><?= $arUS['user_id'] ?></td>
				<td><?= $arUS['user_name'] ?></td>
				<td><?= $arUS['user_fullname'] ?></td>
				<td><?= $arUS['user_email'] ?></td>
				<td>
					<a href="http://localhost/FFSE1704_LP3/Assignments/Nhat_FFSE1704009/mysql-asm-03/read.php?id=<?=$arUS['user_id'] ?>"  style="padding-right: 10px;"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a href="http://localhost/FFSE1704_LP3/Assignments/Nhat_FFSE1704009/mysql-asm-03/update.php?id=<?=$arUS['user_id'] ?>&name=<?=$arUS['user_name'] ?>" style="padding-right: 10px;"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="http://localhost/FFSE1704_LP3/Assignments/Nhat_FFSE1704009/mysql-asm-03/delete.php?id=<?=$arUS['user_id']?>" ><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
		
	<?php		
        }
   
		$MYSQLi -> close();
	?>
	<!--kết thúc phân trang-->














	<?php

		//Tìm kiếm
		 if (isset($_GET['submit'])) {
            $search = $_GET['search'];
            if (empty($search)) {
                echo "Hãy nhập dữ liệu";
            }
            else
            {
            	require_once('ket_noi_MySQL.php');
                
                $MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');
              $SQL1 = "SELECT * FROM lms_users WHERE user_name LIKE '%$search%'";
              $result1 = $MYSQLi -> query($SQL1);
              $result1 -> num_rows;
              if($result1 -> num_rows >0){
              	
             

				while ($arUS = $result1->fetch_assoc()) {
			
	?>
	
			<tr>
				<td><?= $arUS['user_id'] ?></td>
				<td><?= $arUS['user_name'] ?></td>
				<td><?= $arUS['user_fullname'] ?></td>
				<td><?= $arUS['user_email'] ?></td>
				<td>
					<a href="http://localhost/FFSE1704_LP3/Assignments/Nhat_FFSE1704009/mysql-asm-03/read.php?id=<?=$arUS['user_id'] ?>"  style="padding-right: 10px;"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a href="http://localhost/FFSE1704_LP3/Assignments/Nhat_FFSE1704009/mysql-asm-03/update.php?id=<?=$arUS['user_id'] ?>&name=<?=$arUS['user_name'] ?>" style="padding-right: 10px;"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="http://localhost/FFSE1704_LP3/Assignments/Nhat_FFSE1704009/mysql-asm-03/delete.php?id=<?=$arUS['user_id']?>" ><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
		
	<?php		
		}
	}	else{
              	echo " không tìm thấy kết quả";
              }

            }
        }
   
	?>
<!--kết thúc tìm kiếm-->
	</table>


 
<div>
	<?php
		//Phân trang
		require_once('ket_noi_MySQL.php');
		 $MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');
		 mysqli_query($MYSQLi,"SELECT * FROM lms_users");
		 $tongtaikhoan= mysqli_affected_rows($MYSQLi);
		  $sotrang =ceil($tongtaikhoan/$sotin_1_trang);
		for ($t=1; $t<=$sotrang ; $t++) { 
			echo "<a href='index.php?trang=$t'>Trang $t</a> - ";
		};
		
	?>
</div>

<nav class="navbar navbar-light bg-light">
  <form class="form-inline" method="GET">
    <input class="form-control mr-sm-2" type="text" placeholder="Search Name" name="search">
    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit"></input>
  </form>
</nav>
<!--
	<?php

        if (isset($_GET['submit'])) {
            $search = $_GET['search'];
            if (empty($search)) {
                echo "Hãy nhập dữ liệu";
            }
            else
            {
            	require_once('ket_noi_MySQL.php');
                
                $MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');
              $SQL = "SELECT * FROM lms_users WHERE user_name LIKE '%$search%'";
              $result = $MYSQLi -> query($SQL);
              $result -> num_rows;
              if($result -> num_rows >0){
              	echo $search;
              }else{
              	echo " không tìm thấy kết quả";
              }

            }
        }
        ?>   
-->

</body>
</html>