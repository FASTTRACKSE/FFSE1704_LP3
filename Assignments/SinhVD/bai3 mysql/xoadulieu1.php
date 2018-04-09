<?php 
require_once('uplot.php');
        $MYSQLi = sinhvd('localhost','vanducsinh','123456','ffse1704');
   $id=$_GET['id'];	
   $sql="DELETE FROM `lms_users` WHERE user_id='$id'";
   $sr=$MYSQLi->query($sql);
   header("location:vd10.php");

 ?>