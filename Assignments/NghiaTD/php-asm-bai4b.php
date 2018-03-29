<?php 
session_start();
	if(isset($_POST['post'])){
		$ten=$_POST['name'];
		$password=$_POST['password'];
		$hoten=$_POST['hoten'];
		$diachi=$_POST['diachi'];
		$gioitinh=$_POST['gioitinh'];
		$sothich=$_POST['sothich'];

		$tenfile='fileanh';
		$name = $_FILES['fileanh']['name'];
		// var_dump($name);die();
		$arname=explode('.', $name);
		$duoifile = end($arname);
		
		$newname=time();
		$namenew=$newname.'.'.$duoifile;
		$tmp_name=$_FILES['fileanh']['tmp_name'];
		$part = $_SERVER['DOCUMENT_ROOT'];//C:/xampp/htdocs
		$part_upload = $part.'/FFSE1704_LP3/Assignments/NghiaTD/img'.$namenew;
		move_uploaded_file($tmp_name, $part_upload);  
		if($name='TRUE'){
			$_POST['fileanh']=$namenew;
		}
		else {
			$_POST['fileanh']="";
		}
		$_SESSION[$ten]=$_POST;

		
	}
	

 ?>
<table border="1px" cellpadding="0" cellspacing="0"  >
            <tr bgcolor="#f6f6f6">
                <th>TT</th>
                <th>Tên tài khoản</th>
                <th>Họ và tên</th>
                <th>Ảnh đại diện</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Chức năng</th>
            </tr>


            <?php 

            $i=0;
            foreach ($_SESSION as $value) {
            	$i++;

            
             ?>
             <tr>
                    <td>  <?= $i ?> </td>
                    <td>  <?= $value['name'] ?> </td>
                    <td>  <?= $value['hoten'] ?> </td>
                    <td> <img style="width: 50px;height: 50px; padding-left: 20px;" src="<?='http://localhost/FFSE1704_LP3/Assignments/NghiaTD/img'.$value['fileanh'] ?>"/></td>
                    <td>  <?= $value['gioitinh'] ?> </td>
                    <td>  <?= $value['diachi'] ?> </td>
                    <td> <a href="">Xoa </a> </td>
                </tr>
                <?php
            }

            
            ?>
 </table>