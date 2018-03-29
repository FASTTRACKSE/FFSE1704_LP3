<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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

</style>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <table>
            
            <tr>
                <td>Tên đăng nhập (*)</td>
                <td><input type="text" name="tentaikhoan" required></td>
            </tr>
            <tr>
                <td>Mật khẩu (*)</td>
                <td><input type="password" name="matkhau" required></td>
            </tr>
            <tr>
                <td>Họ và tên (*)</td>
                <td><input type="text" name="hovaten" required></td>
            </tr>
            <tr>
                <td>Ảnh đại diện (*)</td>
                <td><input type="file" name="anhdaidien" value="Chọn tệp"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <select name="diachi">
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="gioitinh" value="Nam" checked>Nam<br>
                    <input type="radio" name="gioitinh" value="Nữ">Nữ<br>
                </td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>
                    <input type="checkbox" value="Xem phim" name="sothich[]" checked>Xem phim<br>
                    <input type="checkbox"  value="Nghe nhạc" name="sothich[]">Nghe nhạc<br>
                    <input type="checkbox" value="Đọc báo" name="sothich[]">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="xacnhan" value="Xác nhận"> 
                    <input type="reset" name="cancel" value="Hủy bỏ">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php 
session_start();


if(isset($_POST['xacnhan'])){
    $namefile='anhdaidien';
    $tentaikhoan= $_POST['tentaikhoan'];
    $matkhau=$_POST['matkhau'];
    $hovaten=$_POST['hovaten'];
    $diachi=$_POST['diachi'];
    $gioitinh=$_POST['gioitinh'];
    $sothich=$_POST['sothich'];
   
            $name = $_FILES['anhdaidien']['name'];
        	
        	$arname = explode('.', $name);
        	$duoifile = end($arname);
        	$newname = time();
        	$namenew = $newname.'.'.$duoifile;
        	$tmp_name = $_FILES['anhdaidien']['tmp_name'];

        	$part = $_SERVER['DOCUMENT_ROOT'];//C:/xampp/htdocs
        	$part_upload = $part.'/FFSE1704_LP3/Assignments/MinhTQ/img/'.$namenew;

        	move_uploaded_file($tmp_name, $part_upload);  
            
            //tao phan tu moi cho mang $_POST
            if($name!='false'){
                $_POST['anhdaidien']=$namenew;
            }else{
                $_POST['anhdaidien']="";
            }           
            //Them phan tu vao session
            $_SESSION[$username]=$_POST;
            
         
            header("location: php-asms-04b.php");
        
    }
    ?>
