<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>
	<body>
		<?php
		require_once('libaries.php');		
		$per_page=5 	;
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
		$mysqli = connectDB('localhost','tunglnt1702','123456','ffse1702052');
		$sql1 = "SELECT * FROM lms_users WHERE user_fullname LIKE '%$search%'";
		$result1 = $mysqli -> query($sql1);
		$total_rows= $result1->num_rows;
		$rows= ceil($total_rows/$per_page);
		$sql = "SELECT * FROM lms_users WHERE user_fullname LIKE '%$search%' LIMIT $current_page,$per_page";
		echo $sql;
		$result = $mysqli -> query($sql);
	?>
		
		<div style="width: 50%;margin: auto;">
			<div>
				<h1>Users List</h1>
				<button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:0px; "><a style="text-decoration: none;" href="create.php">Add New User</a></button>
			</div>
			<form action='' method="GET">
	<input type = "text" name='search'value='<?=$search?>' placeholder="Tim kiem"/>
</form>
			<div>
				<table class="table table-bordered table-striped">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Fullname</th>
						<th>Email</th>
						<th>Action</th>
					</tr>


				<?php
					while ($arUsers = $result->fetch_assoc()) {
				?>
					<tr>
						<td><?=$arUsers['user_id']?></td>
						<td><?=$arUsers['user_name']?></td>
						<td><?=$arUsers['user_fullname']?></td>
						<td><?=$arUsers['user_email']?></td>
						<td>
		        			<a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/view.php?id=<?=$arUsers['user_id']?>">
								<span class="glyphicon glyphicon-eye-open" style="padding: 10px"></span>
							</a>

							<a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/update.php?id=<?=$arUsers['user_id']?>">
								<span class="glyphicon glyphicon-pencil" style="padding: 10px"></span>
							</a>

							<a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/delete.php?id=<?=$arUsers['user_id']?>">
								<span class="glyphicon glyphicon-trash" style="padding: 10px"></span>
							</a>
						</td>
					</tr>
				<?php
					}
				?>
				</table>
				<?php
					//đóng kết nối
					$mysqli -> close();
				?>
			</div>
			<div>
  			<ul class="pagination">
  				<?php for($i=1;$i<=$rows;$i++){ ?>
	    		<li><a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/index.php?page=<?=$i?>&search=<?=$search?>"> Trang <?=$i?></a></li>
	    		<?php } ?>
	    		<?php
					if($page>1&&$page<$rows){
				?>
		    	<li><a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/index.php?page=<?=$page+1?>&search=<?=$search?>"> next </a>	</li>
		    	<li><a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/index.php?page=<?=$page-1?>&search=<?=$search?>"> previous </a></li>
		    	<?php	
					}elseif($page==$rows){
				?>
		    	<li><a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/index.php?page=<?=$page-1?>&search=<?=$search?>"> previous</a></li>
		    	<?php 
					}else{
				?>
		    	<li><a href="http://localhost/FFSE1704_LP3/Assignments/Tunglnt/asm8/index.php?page=<?=$page+1?>&search=<?=$search?>"> next</li>
		    	<?php
					}
				?>
  			</ul>
		</div>
		</div>
	</body>
</html>