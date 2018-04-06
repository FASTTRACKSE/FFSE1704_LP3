<?php
		require_once('libaries.php');
		$mysqli = connectDB('localhost','tuannv','tuannv','ffse1702041');
		$id = $_GET['id'];
		$sql = "SELECT * FROM `lms_users` WHERE user_id = $id";
		$rs = $mysqli->query($sql);
		$item=$rs->fetch_assoc();
		$rs->num_rows;
		if (isset($_POST['back'])) {
			header("location:index.php");
		}

?>
<html>
    <head>
        <style type="text/css">
form {
    margin: auto;
    
    width: 40%;
    border-collapse: collapse;
    border: 1px solid black;
    height: 40%;
}
b {
                margin-left: 10%;
            }


      </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

 <form action="" method="POST" >
        
        <table >
        <h2 style="white-space:pre;margin-left: 10%"><b>View User Info</b></h2>
        
            <tr style="text-align: left;"><b style="margin-left: 10%">Name</b></tr><br>
            <tr>
            <input value="<?=$item['user_name']?>" style="margin-left: 10%;width: 75%" /><br>
            </tr>
            <tr style="text-align: left;"><b >Fullname</b></tr><br>
            <tr> <input value="<?=$item['user_fullname']?>"  style="margin-left: 10%;width:75%"/></tr><br>
            <tr style="text-align: left;"><b>Email</b></tr><br>
            <tr><input value="<?=$item['user_email']?>"  style="margin-left: 10%;width:75%"/></tr><br>
            <tr style="width: 70%;margin-top: 15px;">
                    <input type="submit" class="btn btn-primary" name="back" value="Back" style="margin-left: 15%;margin-top: 15px;">
                </tr>
            </td>
        
        </table>
    </form>
</html>
