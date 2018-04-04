<?php
		require_once('themknoi.php');
$mysqli=connectDB('localhost','nghia111','123456','hoc_sinh');
$id=$_GET['id'];


         $sql = "DELETE FROM lms_users WHERE user_id = $id";
      
           
            $result = $mysqli -> query($sql);

         
              header('Location: php-asm-8b.php');
        
             $mysqli -> close();
         
	?>