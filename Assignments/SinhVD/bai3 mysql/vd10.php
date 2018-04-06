<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ASM MYsql 03</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<body>
	<?php
		require_once('uplot.php');
		 $MYSQLi = sinhvd('localhost','vanducsinh','123456','ffse1704');
		 $SQL = "SELECT * FROM lms_users";
		$result = $MYSQLi->query($SQL);
	?>
	<a href="login.php">
<button type="button" class="btn btn-success" style="margin: 11px 2px 11px 900px" >Add New User</button>
</a>
<table class="table table-striped" style="width: 50%; margin: auto;">
		
		
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Fullname</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		
	<?php
		while ($ar = $result->fetch_assoc()) {
	?>
			<tr>
				<td><?= $ar['user_id'] ?></td>
				<td><?= $ar['user_name'] ?></td>
				<td><?= $ar['user_fullname'] ?></td>
				<td><?= $ar['user_email'] ?></td>
				<td>
					<a href="xemdulieu.php?id=<?=$ar['user_id'] ?>"  style="padding-right: 10px;"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a href="suadulieu.php?id=<?=$ar['user_id'] ?>" style="padding-right: 10px;"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="xoadulieu1.php?id=<?=$ar['user_id'] ?>" ><span class="glyphicon glyphicon-trash"></span></a>
				
				</td>
			</tr>
		

	<?php		
		}
		$MYSQLi -> close();
	?>
	</table>	
</body>
</html>