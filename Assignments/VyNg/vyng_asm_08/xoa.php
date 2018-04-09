<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    
    if(isset($_POST['submit'])){
    require_once('bai90.php');
    $MYSQLi = connectDB('localhost','giavy1995','123456789','sinhvienffse1704');

            

                  
             
                    $id=$_GET['id'];                  

                    $SQL="DELETE FROM masinhvienffse1704 WHERE user_id=$id";
      
                   
                      $rs=$MYSQLi->query($SQL);

                      header('location: lms_users.php');

                      $MYSQLi -> close();
       			 };

       			 if (isset($_POST['cancel'])) {
       			 	header('location: lms_users.php');
       			 };

    ?>
<form method="POST">
    <table>
    	<input type="submit" name="submit" value="yes">
    	<input type="submit" name="cancel" value="no">
    </table>
</form>
</body>
</html>