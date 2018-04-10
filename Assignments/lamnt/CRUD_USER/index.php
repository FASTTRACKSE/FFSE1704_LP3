
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment MySQL 03</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php
		require_once('libaries.php');		
		$per_page=5;
		if(isset($_GET['page'])){
			$page = $_GET['page'];
			if($page<0){
				$page=1;
			}
		}else{
			$page=1;
		}
		$current_page= ($page-1)*$per_page;
		if(isset($_GET['search'])){
			$search = $_GET['search'];
		}else{
			$search = '';
		}
		$MYSQLi = connectDB('localhost','root','','ffse1702');
		$sql1 = "SELECT * FROM lms_users WHERE user_fullname LIKE '%$search%'";
		$result1 = $MYSQLi -> query($sql1);
		$total_rows= $result1->num_rows;
		$rows= ceil($total_rows/$per_page);
		$SQL = "SELECT * FROM lms_users WHERE user_fullname LIKE '%$search%' LIMIT $current_page,$per_page";
		echo $SQL;
		$result = $MYSQLi -> query($SQL);
	?>
<h1 style="margin-left: 380px;">User List</h1> <a href='http://localhost/FFSE1704_PHP1/create.php' class="btn btn-success" style="float: right; margin-top:-45px;margin-right:385px; border: 1px; ">Add New User</a>
<form action='' method="GET">
	<input type = "text" name='search'value='<?=$search?>' placeholder="Tim kiem"/>
</form>
<table class="table table-striped" style="width: 50%; margin: auto;">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Avatar</th>
		<th>Action</th>
	</tr>
	<?php
		while ($arUS = $result->fetch_assoc()) {			
	?>	
		<tr>
			<td><?= $arUS['user_id'] ?></td>
			<td><?= $arUS['user_name'] ?></td>
			<td><?= $arUS['user_fullname'] ?></td>
			<td><?= $arUS['user_email'] ?></td>
			<td><img width='200px' src="http://localhost/FFSE1704_PHP1/images/<?=$arUS['avatar']?>"/></td>
			<td>
				<a href="http://localhost/FFSE1704_PHP1/info.php?id=<?=$arUS['user_id']?>"  style="padding-right: 10px;"><span class="glyphicon glyphicon-eye-open"></span></a>
				<a href="http://localhost/FFSE1704_PHP1/edit.php?id=<?=$arUS['user_id']?>" style="padding-right: 10px;"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="http://localhost/FFSE1704_PHP1/delete.php?id=<?=$arUS['user_id']?>" ><span class="glyphicon glyphicon-trash"></span></a>
			
			</td>
		</tr>
	<?php		
		}
		$MYSQLi -> close();
	?>		
	</table>
	<ul>
		<?php for($i=1;$i<=$rows;$i++){ ?>
			<li> <a href="http://localhost/FFSE1704_PHP1/index.php?page=<?=$i?>&search=<?=$search?>"> Trang <?=$i?></a> </li>
		<?php } ?>
		<?php
			if($page>1&&$page<$rows){
		?>
				<a href="http://localhost/FFSE1704_PHP1/index.php?page=<?=$page+1?>&search=<?=$search?>"> next 
				<a href="http://localhost/FFSE1704_PHP1/index.php?page=<?=$page-1?>&search=<?=$search?>"> previous 
		<?php	
			}elseif($page==$rows){
		?>
				<a href="http://localhost/FFSE1704_PHP1/index.php?page=<?=$page-1?>&search=<?=$search?>"> previous 
			<?php 
			}else{
			?>
				<a href="http://localhost/FFSE1704_PHP1/index.php?page=<?=$page+1?>&search=<?=$search?>"> next 
				<?php
			}
		?>
	</ul>
</body>
</html>
