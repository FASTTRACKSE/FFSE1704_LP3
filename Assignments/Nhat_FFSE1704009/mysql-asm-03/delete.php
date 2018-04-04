<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
</head>
<body>
	<?php
		require_once('ket_noi_MySQL.php');
    		$MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');
            $id = $_GET['id'];
         $SQL = "DELETE FROM lms_users WHERE user_id = $id";
      
           
            $result = $MYSQLi -> query($SQL);

         
              header('Location: index.php');
        
             $MYSQLi -> close();
	?>
</body>
</html>