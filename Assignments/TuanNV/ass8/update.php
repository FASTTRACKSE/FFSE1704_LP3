<?php
	require_once('libaries.php');
	$mysqli = connectDB('localhost','tuannv','tuannv','ffse1702041');
	$id = $_GET['id'];
	$sql = "SELECT * FROM `lms_users` WHERE user_id = $id";
	$rs = $mysqli->query($sql);
	$item=$rs->fetch_assoc();
	if(isset($_POST['submit'])){
		$user_fullname = $_POST['user_fullname'];
		$user_email = $_POST['user_email'];
		if($_POST['password'] != ''){
			$user_password = $_POST['user_password'];
		}else{$user_password = $item['user_password'];}
		$sql = "UPDATE lms_users SET user_fullname = '$user_fullname',user_password = '$user_password',user_email= '$user_email' WHERE user_id = '$id'";
		$rs = $mysqli->query($sql);
		header("location:index.php");
	};
	if ($_POST['back']) {
		header("location:index.php");
	};

?>
<html>
    <head>
        <style>
form {
    margin: auto;
    width: 40%;
    border-collapse: collapse;
    border: 1px solid black;
    height: 60%;
}
      </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

    <form action="" method="POST" >
    	<style type="text/css">
			b {
    			margin-left: 10%
    		}
    	</style>
        <table >
        <h2 style="display: inline-block;margin-left: 10%">Update User Info</h2>
        <h5 style="display: inline-block;margin-left: 10%; width: 100%">Please edit the input values and submit to update the recond            .</h5>
            <tr style="text-align: left;"><b style="margin-left: 10%">Name</b></tr><br>
            <tr>
            <input type="text" name="user_name"  style="margin-left: 10%;width: 70%" value="<?=$item['user_name']?>" disabled /><br>
            </tr>
            <tr style="text-align: left;"><b >Fullname</b></tr><br>
            <tr> <input type="text" name="user_fullname" style="margin-left: 10%;width: 70%"/></tr><br>
            <tr style="text-align: left;"><b>Password</b></tr><br>
            <tr><input type="password" name="user_password" style="margin-left: 10%;width: 70%"/></tr><br>
            <tr style="text-align: left;"><b>Email</b></tr><br>
            <tr><input type="text" name="user_email" style="margin-left: 10%;width: 70%"/></tr><br>
            <tr style="width: 70%;margin-top: 15px;">
                
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-left: 10%;margin-top: 15px;">
                    <input type="submit" class="btn btn-default" name="back" value="Cancel" style="margin-left: 3%;margin-top: 15px;">
                </tr>
            </td>
        
        </table>
    </form>
</html>