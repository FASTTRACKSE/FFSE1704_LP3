<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){

		require_once('ket_noi_MySQL.php');
    		$MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');
            $id = $_GET['id'];
         $SQL = "DELETE FROM lms_users WHERE user_id = $id";
      
           
            $result = $MYSQLi -> query($SQL);

         
              redirect("Admin/User/index");
        
             $MYSQLi -> close();
        };

        if(isset($_POST['cancel'])){
        	redirect("Admin/User/index");
        };
	?>
	<h1 style=" margin-left: 375px;">Delete User</h1>
 	<hr style="width: 50%; margin: auto;">
	<form  method="POST"  style="width: 50%; margin: auto; background-color:#FFC0CB; ">
		<small id="emailHelp" class="form-text text-muted" style="font-size: 20px;margin: 25px;padding-top: 25px;">Are you sure you want to delete this user ?</small>
      <br>
      <table>
		<div>  
            <input type="submit" name="submit" value="Yes" class="btn btn-outline-danger" style="margin: 30px;"> 
            <input type="submit" name="cancel" value="No" class="btn btn-light">     
        </div>
       </table>		
	</form>
</body>
</html>