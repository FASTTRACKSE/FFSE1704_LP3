<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div></div>
<h2 style="text-align: center;"><b>Delete User</b><hr></h2>
<form method="POST" class="form-inline" style="text-align: center;background: #ff9999;width: 30%;margin-left: 550;">
  <b style="color: #ff0000">Are you sure you want to delete this user?</b><br>
  <input type="submit" name="yes" class="btn btn-danger" value="Yes">
    <input name="out" type="submit" class="btn btn-default" value="No">

</body>
</html>


<?php

$user_id=$_GET['id'];
$conn = new mysqli($server,$username,$password,$database_name);

 if (isset($_POST["out"])) {
  header('Location: php-asm-08.php');

}
if (isset($_POST["yes"])) {
 	$server = "localhost";
 	$username="tuanpt";
 	$password="123456";
 	$database_name="masinhvien";
    if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
     } 

     $sql = "DELETE FROM lms_users WHERE user_id = $user_id";
     $result = $conn->query($sql);
     header('Location: php-asm-08.php');
}
?>




