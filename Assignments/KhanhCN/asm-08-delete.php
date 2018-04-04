<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

</head>
<body>

</body>
</html>
<?php
require_once 'asm-08-function.php';
$mysqli = connectDB('localhost','hocsinh','123456','ffse1701011');
$id = $_GET['id'];
$sql = "DELETE  FROM lms_users WHERE user_id = $id ";
$raa = $mysqli->query($sql);

 header("location: asm-08-index.php");

?>
