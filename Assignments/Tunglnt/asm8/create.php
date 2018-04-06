<?php
	require_once('libaries.php');
		$mysqli = connectDB('localhost','tunglnt1702','123456','ffse1702052');

	if(isset($_POST['submit'])){
		
		$user_name = $_POST['user_name'];
		$user_fullname = $_POST['user_fullname'];
		$user_password = $_POST['user_password'];
		$user_email = $_POST['user_email'];
		$sql = "INSERT INTO lms_users(user_name,user_fullname,user_password,user_email) VALUES('$user_name','$user_fullname','$user_password','$user_email')";
		echo $sql;
		$result=$mysqli->query($sql);
		$mysqli->close();
		header("location: index.php");
};
if (isset($_POST['back'])) {
	header('location:index.php');
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
        <h2 style="display: inline-block;margin-left: 10%">Create New User</h2>
        <h5 style="display: inline-block;margin-left: 10%;">Please fill this form and submit to add a new user record to the database.</h5>
            <tr style="text-align: left;"><b style="margin-left: 10%">Name</b></tr><br>
            <tr>
            <input type="text" name="user_name"  style="margin-left: 10%;width: 70%" /><br>
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