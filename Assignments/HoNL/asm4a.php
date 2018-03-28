
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 4</title>
	<style type="text/css">
  table {
      border-collapse: collapse;
  }
  table tr td,
  th {
   border: 1px solid black;
   padding: 10px;
   padding-right: 100px;
}
table th {
   text-align: left;
}
table tr:first-child {
   background: #d6d5d5;
}
</style>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr >
                <th colspan="2">Đăng ký tài khoản</th>
            </tr>
            <tr>
                <td>Tên đăng nhập (*)</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Mật khẩu (*)</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Họ và tên (*)</td>
                <td><input type="text" name="fullname" required></td>
            </tr>
            <tr>
                <td>Ảnh đại diện (*)</td>
                <td><input type="file" name="avatar" value="Chọn tệp"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <select name="address">
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="gender" value="Nam" checked>Nam<br>
                    <input type="radio" name="gender" value="Nữ">Nữ<br>
                </td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>
                    <input type="checkbox" value="Xem phim" name="favorite[]" checked>Xem phim<br>
                    <input type="checkbox"  value="Nghe nhạc" name="favorite[]">Nghe nhạc<br>
                    <input type="checkbox" value="Đọc báo" name="favorite[]">Đọc báo
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Xác nhận"> 
                    <input type="reset" name="cancel" value="Hủy bỏ">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
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
        	$part_upload = $part.'/FFSE1704_LP3/Assignments/Nhat_FFSE1704009/images/'.$namenew;
        	move_uploaded_file($tmp_name, $part_upload);  
            
            //tao phan tu moi cho mang $_POST
            if($name!='false'){
               $_POST['avatar']=$namenew;
            }else{
                $_POST['avatar']="";
            }           
            //Them phan tu vao session
            $_SESSION[$username]=$_POST;
            
           
            header("location: php-asm-04b.php");
        
    }
    ?>