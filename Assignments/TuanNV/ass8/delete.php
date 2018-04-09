<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div></div>
<h2 style="text-align: center;"><b>Delete User</b></h2>
<form method="POST" class="form-inline" style="text-align: center;background: #ff9999;width: 30%;margin-left: 550;">
  <b style="color: #ff0000">Are you sure you want to delete this user?</b><br>
  <input type="submit" name="yes" class="btn btn-danger" value="Yes">
  <input type="submit" name="no" class="btn btn-default" value="No">

</body>
</html>


<?php
require_once('libaries.php');
$mysqli = connectDB('localhost','tuannv','tuannv','ffse1702041');
$user_id=$_GET['id'];
if (isset($_POST['yes'])) {
   $user_id = $_GET['id'];
   $sql = "DELETE FROM lms_users WHERE user_id = '$user_id'";
   $rs = $mysqli->query($sql);
   header('Location: index.php');
};
 if (isset($_POST['no'])) {
  header('Location: index.php');
};
?>