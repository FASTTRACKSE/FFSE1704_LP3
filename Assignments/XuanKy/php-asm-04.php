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
    $mess=array();

        //validation
    if(empty($username)){
        $mess[]="Vui long nhap username";
    }
    if(empty($password)){
        $mess[]="Vui long nhap password";
    }
    if(empty($fullname)){
        $mess[]="Vui long nhap fullname";
    }
    if(empty($address)){
        $mess[]="Vui long nhap address";
    }
    if(empty($gender)){
        $mess[]="Vui long chon gender";
    }
    if(count($favorite)==0){
        $mess[]="Vui long chon favorite";
    }
    if(empty($_FILES['avatar']['name'])){
        $mess[]="Vui long chon avatar";
    }
        if(count($mess)==0){//ko co loi 
            //upload file
            $name= $_FILES['avatar']['name'];
            $tmp_name= $_FILES['avatar']['tmp_name'];
            //Lấy đường dẫn góc của host
            $path_root = $_SERVER['DOCUMENT_ROOT'];//C:/htdocs
            //Tạo đường dẫn đầy đủ để upload file
            $path_upload= $path_root.'/http://localhost/ffse1701_php1/images/'.$name;
            //Thực hiện úp upload files lên host
            move_uploaded_file($tmp_name, $path_upload);  
            
            //tao phan tu moi cho mang $_POST
            if($name!='false'){
                $_POST['avatar']=$name;
            }else{
                $_POST['avatar']="";
            }           
            //Them phan tu vao session
            $_SESSION[$username]=$_POST;
            
            //chuyen huong qua trang danhsach
            header("location: danhsach.php");
        }
    }
    ?>