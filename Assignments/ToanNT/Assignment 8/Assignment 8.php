<ht
<?php 
include ("auth.php");
$conn = mysqli_connect("localhost", "toan", "123456");
mysqli_set_charset($conn,"utf8");
$db = mysqli_select_db($conn, "ffse1703");
$query = mysqli_query($conn, "SELECT * FROM ffse1703012_user");
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Bài tập SQL</title>
</head>
<body>
	<h1>Home</h1>
	<a href="logout.php"><input type="button" value="Logout"></a>
	<a href="registration.php"><input type="button" value="Thêm"></a>
	<table class="table table-bordered table-condensed" style="border-color: black;border: : 1px">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Chức năng</th>
			</tr>
		</thead>
		<tbody>
			
			<?php $i=1; while ($row = mysqli_fetch_array($query)): ?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo htmlspecialchars($row['username']); ?></td>
					<td><?php echo htmlspecialchars($row['firstname']); ?></td>
					<td><?php echo htmlspecialchars($row['lastname']); ?></td>
					<td><?php echo htmlspecialchars($row['email']); ?></td>
					<?php  echo "<td>"."<a href='http://localhost/user/view_user.php?id=".$row["id"]."'> <span class='glyphicon glyphicon-eye-open'></span></a>"."<a href='http://localhost/user/update.php?id=".$row['id']."'><span class='glyphicon glyphicon-pencil'></span></a></span></a>"."<a href='http://localhost/user/delete.php?id=".$row["id"]."'><span class='glyphicon glyphicon-trash '></span></a></td>"; ?>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>