<?php 
	session_start();
  
	if(isset($_POST['submit'])){
		$namefile='avatar';
		$username= $_POST['username'];
		$password=$_POST['password'];
		$fullname=$_POST['fullname'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$favorite=$_POST['favorite'];
   
		$name = $_FILES['avatar']['name'];
        	
		$arname = explode('.', $name);
		$duoifile = end($arname);
		$newname = time();
		$namenew = $newname.'.'.$duoifile;
		$tmp_name = $_FILES['avatar']['tmp_name'];

		$part = $_SERVER['DOCUMENT_ROOT'];//C:/xampp/htdocs
		$part_upload = $part.'/FFSE1704_LP3/Assignments/DaiPPQ/php-asm-04/images/'.$namenew;

		move_uploaded_file($tmp_name, $part_upload);  
            
		//tao phan tu moi cho mang $_POST
		if($name!='false'){
			$_POST['avatar']=$namenew;
		}else{
			$_POST['avatar']="";
		}           
		//Them phan tu vao session
		$_SESSION[$username]=$_POST;  
	}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Danh sách tài khoản</title>
        <style type="text/css">
            table {
                border-collapse: collapse;
            }
            table tr td,
            th {
                border: 1px solid black;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Danh sách tài khoản</h1>
        <table>
            <tr>
                <th>TT</th>
                <th>Tên tài khoản</th>
                <th>Họ và tên</th>
                <th>Ảnh đại diện</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Chức năng</th>
            </tr>
            <?php

				$i = 0;
				foreach ($_SESSION as $value) {
					$i++;
					?>
						<tr>
    						<td>  <?= $i ?> </td>
    						<td>  <?= $value['username'] ?> </td>
    						<td>  <?= $value['fullname'] ?> </td>
    						<td> <img style="width: 50px;height: 50px; padding-left: 20px;" src="<?='http://localhost/FFSE1704_LP3/Assignments/DaiPPQ/php-asm-04/images/'.$value['avatar'] ?>"/></td>
    						<td>  <?= $value['gender'] ?> </td>
    						<td>  <?= $value['address'] ?> </td>
    						<td> <a href="">Xoa </a> </td>
						</tr>
					<?php
				}
			?>
		</table>
	</body>
</html>