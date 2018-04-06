<body>
<?php
	require_once('php-asm-08c.php');
	$mysqli = ketnoi_database('localhost', 'root', '', 'ffse1702016');
	$id=$_GET['user_id'];
	$sql = "SELECT * FROM `lms_users` WHERE user_id=$id";
	$rs = $mysqli->query($sql);
	$item=$rs->fetch_assoc();
	$rs->num_rows;
	echo "<pre>";
	print_r($item);
	echo "<pre/>";
?>
<a href="http://localhost/ffse1702016/php-asm-08b.php">Back</a>
</body>