<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	
</body>
</html>
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

<?php
		if(isset($_POST['submit'])){

			require_once('php-asm-8/themknoi.php');
			$mysqli=connectDB('localhost','nghia111','123456','hoc_sinh');
			$id=$_GET['id'];


         $sql = "DELETE FROM lms_users WHERE user_id = $id";
      
           
            $result = $mysqli -> query($sql);

         
              header('Location: php-asm-8/php-asm-8b.php');
        
             $mysqli -> close();
         }
           if(isset($_POST['cancel'])){
        	header('Location: php-asm-8/them.php');
        };
         
	?>
